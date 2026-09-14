<?php

use App\Models\Project;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

new #[Title('partials/header.navigation.projects.label')]
class extends Component {

    use WithPagination;

    #[Url]
    public string $search = '';

    #[Url]
    public array $tags = [];

    public array $tags_for_request = [];

    public function mount()
    {
        $this->tags_for_request = $this->tags;
    }

    #[Computed]
    public function projects()
    {
        $query = Project::query();

        if ($this->search) {
            $query->whereLike('name', '%' . $this->search . '%');
        }

        if (!empty($this->tags)) {
            $query->whereHas('tags', function (Builder $query) {
                $query->whereIn('name', $this->tags);
            });
        }

        return $query->paginate(6);
    }

    public function toggleTag(string $tag): void
    {
        if (in_array($tag, $this->tags_for_request)) {
            $this->tags_for_request = array_diff($this->tags_for_request, [$tag]);
        } else {
            $this->tags_for_request[] = $tag;
        }
    }

    public function applyFilter(): void
    {
        $this->tags = $this->tags_for_request;
        $this->resetPage();
    }

    public function resetFilter(): void
    {
        $this->tags_for_request = [];
        $this->tags = [];
        $this->resetPage();
    }
};
