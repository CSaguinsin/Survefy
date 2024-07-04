<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\FeedbackBoard;

class AddFeedbackBoard extends Component
{
    public $boardname;

    public function save()
    {
        $this->validate([
            'boardname' => 'required|string|max:255',
        ]);

        FeedbackBoard::create([
            'boardname' => $this->boardname,
        ]);

        session()->flash('success', 'Board created successfully!');

        // Reset the form field
        $this->reset('boardname');

        // Redirect to the dashboard route to refresh the page
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.add-feedback-board');
    }
}
