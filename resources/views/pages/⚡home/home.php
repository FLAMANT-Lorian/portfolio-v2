<?php

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('partials/header.navigation.home.label')]
class extends Component {
    #[Computed]
    public function projects()
    {
        return Project::latest()->take(3)->get();
    }
};
