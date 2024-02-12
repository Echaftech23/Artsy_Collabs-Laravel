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
        $projects = Project::orderBy('created_at', 'DESC')->get();

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
        $projects = Project::create([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        $roleId = $request->input('role_id');
        $projects->roles()->attach($roleId);
        return redirect()->route('projects')->with('success', 'Project added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $user = Project::findOrFail($id);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $partner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $partner)
    {
        //
    }
}
