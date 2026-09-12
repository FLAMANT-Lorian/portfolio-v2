<?php

use App\Models\Project;
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

    #[Computed]
    public function projects()
    {
        $query = Project::query();

        if ($this->search) {
            $query->whereLike('name', '%' . $this->search . '%');
        }

        return $query->paginate(6);
    }
};
