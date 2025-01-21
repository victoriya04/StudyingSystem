<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::all();
        return view('organizations.index', compact('organizations'));
    }

    public function create()
    {
        return view('organizations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Organization::create($validated);
        return redirect()->route('organizations.index');
    }

    public function show($id)
    {
        $organization = Organization::findOrFail($id);
        return view('organizations.show', compact('organization'));
    }

    public function edit($id)
    {
        $organization = Organization::findOrFail($id);
        return view('organizations.edit', compact('organization'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $organization = Organization::findOrFail($id);
        $organization->update($validated);
        return redirect()->route('organizations.index');
    }

    public function destroy($id)
    {
        $organization = Organization::findOrFail($id);
        $organization->delete();
        return redirect()->route('organizations.index');
    }
}
