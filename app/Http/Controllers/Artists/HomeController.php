<?php

namespace App\Http\Controllers\Artists;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('partners')->latest()->get();

        return view('artists.index', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = Project::findOrFail($request->project_id);

        $project->users()->attach(auth()->user()->id);

        return redirect()->route('artists')->with('success', 'Your Request has been added successfully. Please wait for admin approval.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $project = Project::findOrFail($id);

        $partners = Partner::orderBy('created_at', 'DESC')->get();

        $artists = User::whereHas('roles', function ($query) {
            $query->where('name', 'artist');
        })->orderBy('created_at', 'DESC')->get();

        return view('artists.show', compact('project', 'partners', 'artists'));
    }
}
