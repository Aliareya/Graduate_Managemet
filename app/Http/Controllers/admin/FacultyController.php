<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.facultes.index');
    }

    public function data(Request $request)
    {
        try {
            $query = Faculty::query()->select(['id', 'name', 'head_name', 'updated_at']);

            return DataTables::of($query)
                ->addColumn('card_html', function ($row) {
                    // Use relationships safely with fallback
                    $deptCount = $row->departments()->count();

                    // For graduates, use try-catch or check if method exists
                    $gradCount = 0;
                    if (method_exists($row, 'graduates')) {
                        try {
                            $gradCount = $row->graduates()->count();
                        } catch (\Exception $e) {
                            $gradCount = 0;
                        }
                    }

                    // Generate routes
                    $showRoute = route('facultes.show', ['faculte' => $row->id]);
                    $editRoute = route('facultes.edit', ['faculte' => $row->id]);
                    $updatedAt = $row->updated_at->diffForHumans();

                    // Use heredoc syntax for clean HTML
                    return <<<HTML
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-gray-800 mb-1">{$row->name}</h3>
                            <p class="text-sm text-gray-500">رئیس: {$row->head_name}</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-3 mt-4">
                        <div class="bg-gray-50 rounded-xl p-3 text-center">
                            <div class="flex items-center justify-center gap-1 mb-1">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <span class="text-xs text-gray-500">دپارتمنت</span>
                            </div>
                            <p class="text-xl font-bold text-gray-800">{$deptCount}</p>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-3 text-center">
                            <div class="flex items-center justify-center gap-1 mb-1">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-xs text-gray-500">فارغ التحصیلان</span>
                            </div>
                            <p class="text-xl font-bold text-gray-800">{$gradCount}</p>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                        <span class="text-xs text-gray-500">آخرین بروزرسانی: {$updatedAt}</span>
                        <div class="flex items-center gap-2">
                            <a href="{$showRoute}" class="p-1.5 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>
                            <a href="{$editRoute}" class="p-1.5 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                HTML;
                })
                ->rawColumns(['card_html'])
                ->make(true);
        } catch (\Exception $e) {
            // Return error response
            return response()->json([
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
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
        $faculty = Faculty::with('departments', 'graduates')->find($id);
        // dd($faculty);
        return view('admin.pages.facultes.show', compact('faculty'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faculty = Faculty::with(['departments', 'graduates'])->findOrFail($id);

        return view('admin.pages.facultes.edit', compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $faculty = Faculty::findOrFail($id);

        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => [
                'required',
                'string',
                'max:50',
                Rule::unique('faculties', 'code')->ignore($faculty->id),
            ],
            'established_year' => 'nullable|integer|min:1000|max:' . date('Y'),
            'head_name' => 'required|string|max:255',
            'head_phone' => 'nullable|string|max:20',
            'head_email' => 'nullable|email|max:255',
            'location' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'description' => 'nullable|string|max:500',
            'status' => 'nullable|in:active,inactive',
            'show_on_homepage' => 'nullable|boolean',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            if ($faculty->logo) {
                Storage::disk('public')->delete($faculty->logo);
            }

            // Store new logo
            $path = $request->file('logo')->store('faculties/logos', 'public');
            $validated['logo'] = $path;
        }

        // Handle boolean field
        $validated['show_on_homepage'] = $request->has('show_on_homepage') ? 1 : 0;

        // Set default status if not provided
        if (!isset($validated['status'])) {
            $validated['status'] = 'active';
        }

        // Update faculty
        $faculty->update($validated);

        // Redirect with success message
        return redirect()
            ->route('facultes.show', $faculty->id)
            ->with('success', __('faculty_edit.saved_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Faculty::find($id)->delete();
        return redirect()->route('facultes.index');
    }
}
