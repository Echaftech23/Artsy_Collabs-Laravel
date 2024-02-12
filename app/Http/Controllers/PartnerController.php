<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::orderBy('created_at', 'DESC')->get();

        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartnerRequest $request)
    {
        $partner = Partner::create($request->all());
        return redirect()->route('partners')->with('success', 'Partner added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $partner = Partner::findOrFail($id);

        return view('admin.partners.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $partner = Partner::findOrFail($id);

        return view('admin.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartnerRequest $request, int $id)
    {
        $partner = Partner::findOrFail($id);
        $partner->update($request->all());

        return redirect()->route('partners')->with('success', 'Partner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $partner = Partner::findOrFail($id);

        $partner->delete();

        return redirect()->route('partners')->with('success', 'Partner deleted successfully');
    }
}
