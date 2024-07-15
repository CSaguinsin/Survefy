<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function publicView($boardId)
    {
        return view('public-feedback', ['boardId' => $boardId]);
    }
}

