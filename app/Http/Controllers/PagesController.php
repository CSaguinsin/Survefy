<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class PagesController extends Controller
{
    public function index()
    {
        return view('guest.landing.index');
    }

    public function about()
    {
        return view('guest.about.index');
    }

    public function dashboard()
    {
        return view('profile.dashboard.dashboard-index');
    }

    public function feedbackDashboard($id)
    {
        $boards = Feedback::all(); // Fetch all boards or your specific query
        return view('profile.feedbackdashboard.feedbackdashboard-index', ['id' => $id, 'boards' => $boards]);
    }
}







