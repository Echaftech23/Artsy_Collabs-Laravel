<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Partner;
use App\Models\User;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->get();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $partners = Partner::orderBy('created_at', 'DESC')->get();

        $artists = User::whereHas('roles', function ($query) {
            $query->where('name', 'artist');
        })->orderBy('created_at', 'DESC')->get();

        return view('admin.projects.create', compact('partners', 'artists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $project = Project::create($request->validated());

        $project->users()->sync($request->input('user_id', []));
        $project->partners()->sync($request->input('partner_id', []));

        return redirect()->route('projects')->with('success', 'Project added successfully');
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

        return view('admin.projects.show', compact('project', 'partners', 'artists'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $project = Project::findOrFail($id);

        $partners = Partner::orderBy('created_at', 'DESC')->get();

        $artists = User::whereHas('roles', function ($query) {
            $query->where('name', 'artist');
        })->orderBy('created_at', 'DESC')->get();

        return view('admin.projects.edit', compact('project', 'partners', 'artists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, int $id)
    {
        $project = Project::findOrFail($id);

        $project->update($request->validated());
        $project->users()->sync($request->user_id);
        $project->partners()->sync($request->partner_id);

        return redirect()->route('projects')->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $project = Project::findOrFail($id);

        $project->delete();

        return redirect()->route('admin.projects')->with('success', 'Project deleted successfully');
    }
}
