<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class ShowTasks extends Component
{

    public function render()
    {
        $tasks = Task::orderBy('id', 'desc')->paginate(10);
        return view('livewire.show-tasks');
    }
}
