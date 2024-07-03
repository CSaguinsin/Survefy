<?php

namespace App\Livewire;

use App\Models\FeedbackBoard;
use Livewire\Component;

class Boards extends Component
{
    public $boardname;

    protected function rules()
    {
        return [
            'boardname' => 'required|string|max:255',
        ];
    }

    public function save()
    {
        $this->validate([
            'boardname' => 'required|string|max:255',
        ]);

        FeedbackBoard::create([
            'boardname' => $this->boardname,
        ]);
    }

    public function render()
    {
        $boards = FeedbackBoard::all(); // Fetch all feedback boards
        return view('livewire.boards', compact('boards'));
    }
}
