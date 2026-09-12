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

    public array $tags = [];

    public array $tags_for_request = [];

    #[Computed]
    public function projects()
    {
        $query = Project::query();

        if ($this->search) {
            $query->whereLike('name', '%' . $this->search . '%');
        }

        if (!empty($this->tags_for_request)) {
            $query->whereHas('tags', function (Builder $query) {
                $query->whereIn('name', $this->tags_for_request);
            });
        }

        return $query->paginate(6);
    }

    public function toggleTag(string $tag): void
    {
        if (in_array($tag, $this->tags)) {
            $this->tags = array_diff($this->tags, [$tag]);
        } else {
            $this->tags[] = $tag;
        }
    }

    public function applyFilter(): void
    {
        $this->tags_for_request = $this->tags;
        $this->resetPage();
    }

    public function resetFilter(): void
    {
        $this->tags = [];
        $this->tags_for_request = [];
        $this->resetPage();
    }
};
