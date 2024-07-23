<?php

namespace App\Livewire;

use App\Models\FeedbackBoard;
use Livewire\Component;

class FeedbackDashboard extends Component
{
    public $boardname;
    public $title;
    public $feedback;
    public $boardId;

    protected function rules()
    {
        return [
            'boardname' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'feedback' => 'required|string|max:255',
        ];
    }

    public function delete($boardId)
    {
        $boardname = FeedbackBoard::findOrFail($boardId);
        $boardname->delete();

        // Redirect to the dashboard route
        return redirect()->route('dashboard');
    }

    public function mount($boardId)
    {
        $this->boardId = $boardId;
        $this->boardname = FeedbackBoard::findOrFail($this->boardId); // Ensure this returns an object
    }

    public function render()
    {
        return view('livewire.feedback-dashboard', ['boardname' => $this->boardname]);
    }
}
