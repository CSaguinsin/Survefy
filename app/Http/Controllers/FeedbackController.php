<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function publicView($boardId)
    {
        // Your logic to handle the public feedback view using the boardId parameter
        // e.g., fetching feedback related to the boardId
        return view('public.addfeedback', ['boardId' => $boardId]);
    }
}




