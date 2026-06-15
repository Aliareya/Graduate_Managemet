<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faculties = Faculty::all();
        // dd($faculties);
        return view('admin.pages.facultes.index' , compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.facultes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'code'        => 'required|string|max:50|unique:faculties,code',
            'head_name'   => 'nullable|string|max:255',
            'head_email'  => 'nullable|email|max:255',
            'location'    => 'nullable|string|max:255',
            'email'       => 'nullable|email|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'      => 'required|in:active,inactive',
        ]);

        $logoPath = null;

        if ($request->hasFile('image')) {
            $logoPath = $request->file('image')->store('faculties', 'public');
        }

        Faculty::create([
            'name'             => $validated['name'],
            'code'             => $validated['code'],
            'logo'             => $logoPath,
            'head_name'        => $validated['head_name'] ?? null,
            'head_email'       => $validated['head_email'] ?? null,
            'location'         => $validated['location'] ?? null,
            'email'            => $validated['email'] ?? null,
            'description'      => $validated['description'] ?? null,
            'is_active'        => $validated['status'] === 'active',
            'show_on_homepage' => true,
            'phone'            => null,
            'head_phone'       => null,
            'established_year' => null,
        ]);

        return redirect()
            ->route('facultes.index')
            ->with('success', 'Faculty created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.pages.facultes.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // if (!auth()->user()->hasPermission('users.create')) {
        //     abort(403);
        // }
        return view('admin.pages.facultes.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
