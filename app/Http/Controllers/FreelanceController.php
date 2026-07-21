<?php

namespace App\Http\Controllers;

use App\Models\Freelance;
use Illuminate\Http\Request;

class FreelanceController extends Controller
{
    public function index()
    {
        $freelancers = Freelance::all();

        return view('freelancers.index', compact('freelancers'));
    }

    public function show($id)
    {
        $freelancer = Freelance::findOrFail($id);

        return view('freelancers.show', compact('freelancer'));
    }
}