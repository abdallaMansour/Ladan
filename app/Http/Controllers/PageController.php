<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function project_details(Project $project) {
        return view('ar.project', compact('project'));
    }

    public function project_details_en(Project $project) {
        return view('en.en-project', compact('project'));
    }
}
