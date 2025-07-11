<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertys = Property::latest()->take(8)->get();
        return view('admin.index', compact('propertys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createProperty');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $validated =   $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'location' => 'required|string|max:255',
            'property_type' => 'required|string|max:50',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'features' => 'nullable|string',
        ]);
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('properties', 'public');
        }

        Property::create($validated);
        noty()->success('Property created successfully.');
        return redirect()->route('admin.properties');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $property = Property::findOrFail($id);
        return view('admin.showProperty', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $property = Property::findOrFail($id);
        return view('admin.editProperty', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated =   $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'location' => 'required|string|max:255',
            'property_type' => 'required|string|max:50',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'features' => 'nullable|string',
        ]);
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('properties', 'public');
        }

        Property::findOrFail($id)->update($validated);
        noty()->success('Property updated successfully.');
        return redirect()->route('admin.properties');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $property = Property::findOrFail($id);
        $property->delete();
        noty()->success('Property deleted successfully.');
        return redirect()->route('dashboard')->with('success', 'Property deleted successfully.');
    }

    /**
     * Display a listing of all properties.
     */
    public function properties()
    {
        $properties = Property::latest()->paginate(10);
        return view('admin.propertys', compact('properties'));
    }
}
