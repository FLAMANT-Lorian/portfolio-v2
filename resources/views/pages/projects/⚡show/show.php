<?php

use App\Models\Project;
use Livewire\Component;

new class extends Component {

    public Project $project;

    public function mount(Project $project): void
    {
        $this->project = $project;
    }

    public function render()
    {
        return $this->view()
            ->title($this->project->name);
    }
};
