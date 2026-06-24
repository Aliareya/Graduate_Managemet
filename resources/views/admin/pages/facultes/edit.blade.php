@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <!-- Page Content -->
    <div class="p-8">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <h1 class="text-2xl font-bold text-gray-800">{{ __('faculty_edit.page_title') }}</h1>
                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>
                    <p class="text-gray-500">{{ __('faculty_edit.page_subtitle') }} {{ $faculty->name }}</p>
                </div>
                <!-- Meta Info -->
                <div class="flex items-center gap-4 text-sm">
                    <div class="flex items-center gap-2 text-gray-500 bg-white px-4 py-2 rounded-lg border border-gray-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ __('faculty_edit.last_edit') }}: {{ $faculty->updated_at ? $faculty->updated_at->format('Y/m/d') : '-' }}</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-500 bg-white px-4 py-2 rounded-lg border border-gray-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span>{{ __('faculty_edit.editor') }}: {{ auth()->user()->name ?? 'Admin' }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Container -->
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm">

            <!-- Form Header with Logo -->
            <div class="p-8 border-b border-gray-100">
                <div class="flex items-start gap-6">
                    <div class="flex-1">
                        <h2 class="text-xl font-bold text-gray-800 mb-1 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            {{ __('faculty_edit.main_info') }}
                        </h2>
                        <p class="text-sm text-gray-500">{!! __('faculty_edit.required_fields') !!}</p>
                    </div>
                    {{-- <!-- Logo -->
                    <div class="flex-shrink-0">
                        <label class="block">
                            <div
                                class="w-24 h-24 bg-blue-50 border-2 border-dashed border-blue-200 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:border-primary hover:bg-primary/5 transition-colors group relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-100 to-blue-50 opacity-50"></div>
                                @if($faculty->logo)
                                    <img src="{{ asset('storage/' . $faculty->logo) }}" alt="Logo" class="w-full h-full object-cover relative z-10">
                                @else
                                    <svg class="w-10 h-10 text-primary relative z-10" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                @endif
                                <div
                                    class="absolute bottom-0 left-0 right-0 bg-primary/90 text-white text-xs py-1 text-center opacity-0 group-hover:opacity-100 transition-opacity z-20">
                                    {{ __('faculty_edit.change_logo') }}
                                </div>
                            </div>
                            <input type="file" name="logo" class="hidden" accept="image/*" id="logo_input">
                        </label>
                    </div> --}}
                </div>
            </div>

            <form action="{{ route('facultes.update', $faculty->id) }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-8" id="facultyForm">
                @csrf
                @method('PUT')

                <!-- Section 1: Basic Information -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        {{ __('faculty_edit.basic_info') }}
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('faculty_edit.faculty_name') }} <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="name" value="{{ old('name', $faculty->name) }}"
                                class="form-input w-full px-4 py-3 border border-xgray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white @error('name') border-red-500 @enderror"
                                required>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('faculty_edit.faculty_code') }} <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="code" value="{{ old('code', $faculty->code) }}"
                                class="form-input w-full px-4 py-3 border border-xgray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white @error('code') border-red-500 @enderror"
                                required>
                            @error('code')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('faculty_edit.established_year') }}
                            </label>
                            <input type="number" name="established_year" value="{{ old('established_year', $faculty->established_year) }}"
                                class="form-input w-full px-4 py-3 border border-xgray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white @error('established_year') border-red-500 @enderror">
                            @error('established_year')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Section 2: Dean Information -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        {{ __('faculty_edit.dean_info') }}
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('faculty_edit.dean_name') }} <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="head_name" value="{{ old('head_name', $faculty->head_name) }}"
                                class="form-input w-full px-4 py-3 border borderx-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white @error('head_name') border-red-500 @enderror"
                                required>
                            @error('head_name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('faculty_edit.dean_phone') }}
                            </label>
                            <input type="tel" name="head_phone" value="{{ old('head_phone', $faculty->head_phone) }}"
                                class="form-input w-full px-4 py-3 border bordexr-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white @error('head_phone') border-red-500 @enderror">
                            @error('head_phone')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('faculty_edit.dean_email') }}
                            </label>
                            <input type="email" name="head_email" value="{{ old('head_email', $faculty->head_email) }}"
                                class="form-input w-full px-4 py-3 border bordxer-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white @error('head_email') border-red-500 @enderror">
                            @error('head_email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Section 3: Location & Contact -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        {{ __('faculty_edit.location_contact') }}
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('faculty_edit.location') }}
                            </label>
                            <input type="text" name="location" value="{{ old('location', $faculty->location) }}"
                                class="form-input w-full px-4 py-3 border borderx-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white @error('location') border-red-500 @enderror">
                            @error('location')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('faculty_edit.faculty_phone') }}
                            </label>
                            <input type="tel" name="phone" value="{{ old('phone', $faculty->phone) }}"
                                class="form-input w-full px-4 py-3 border borderx-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white @error('phone') border-red-500 @enderror">
                            @error('phone')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('faculty_edit.faculty_email') }}
                            </label>
                            <input type="email" name="email" value="{{ old('email', $faculty->email) }}"
                                class="form-input w-full px-4 py-3 border bordexr-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Section 4: Description -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        {{ __('faculty_edit.description') }}
                    </h3>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            {{ __('faculty_edit.faculty_description') }}
                        </label>
                        <textarea name="description" rows="4" maxlength="500"
                            class="form-input w-full px-4 py-3 border borderx-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white resize-none @error('description') border-red-500 @enderror">{{ old('description', $faculty->description) }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                        <div class="flex items-center justify-between mt-1">
                            <p class="text-xs text-gray-400">{{ __('faculty_edit.max_chars', ['count' => 500]) }}</p>
                            <p class="text-xs text-gray-400"><span id="charCount">{{ strlen(old('description', $faculty->description ?? '')) }}</span> {{ __('faculty_edit.characters') }}</p>
                        </div>
                    </div>
                </div>



                <!-- Section 6: Settings -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        {{ __('faculty_edit.settings') }}
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('faculty_edit.status') }}
                            </label>
                            <select name="status"
                                class="form-input w-full px-4 py-3 border border-grxay-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white @error('status') border-red-500 @enderror">
                                <option value="active" {{ old('status', $faculty->status ?? 'active') == 'active' ? 'selected' : '' }}>{{ __('faculty_edit.active') }}</option>
                                <option value="inactive" {{ old('status', $faculty->status ?? 'active') == 'inactive' ? 'selected' : '' }}>{{ __('faculty_edit.inactive') }}</option>
                            </select>
                            @error('status')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-end">
                            <label
                                class="flex items-center gap-3 cursor-pointer p-3 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors w-full">
                                <input type="checkbox" name="show_on_homepage" value="1"
                                    {{ old('show_on_homepage', $faculty->show_on_homepage ?? false) ? 'checked' : '' }}
                                    class="w-5 h-5 text-primary rounded border-gray-300 focus:ring-primary">
                                <div>
                                    <span class="text-sm font-medium text-gray-700 block">{{ __('faculty_edit.show_on_homepage') }}</span>
                                    <span class="text-xs text-gray-500">{{ __('faculty_edit.show_on_homepage_desc') }}</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

            </form>

            <!-- Form Actions -->
            <div class="border-t border-gray-100 p-6 bg-gray-50 rounded-b-2xl">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <button type="submit" form="facultyForm"
                            class="px-6 py-3 bg-[#34a898] text-white rounded-xl hover:bg-primary-dark transition-colors flex items-center gap-2 shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>{{ __('faculty_edit.save_changes') }}</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Help Info -->
        <div class="mt-6 bg-amber-50 border border-amber-100 rounded-xl p-5 flex items-start gap-3">
            <svg class="w-5 h-5 text-amber-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            <div>
                <p class="text-sm font-medium text-amber-800 mb-1">{{ __('faculty_edit.attention') }}</p>
                <p class="text-sm text-amber-700">{{ __('faculty_edit.warning_message') }}</p>
            </div>
        </div>
    </div>
@endsection

@push('page_script')
    <script>
        // Character counter for textarea
        const textarea = document.querySelector('textarea[name="description"]');
        const charCount = document.getElementById('charCount');

        if (textarea && charCount) {
            function updateCharCount() {
                const count = textarea.value.length;
                charCount.textContent = count;

                if (count > 500) {
                    textarea.classList.add('border-red-500');
                } else {
                    textarea.classList.remove('border-red-500');
                }
            }

            textarea.addEventListener('input', updateCharCount);
            
            // Initialize on page load
            updateCharCount();
        }

        // Highlight changed fields
        const inputs = document.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('input', function() {
                this.classList.add('changed-field');
            });
        });

        // Confirm delete
        function confirmDelete() {
            if (confirm('{{ __('faculty_edit.confirm_delete') }}')) {
                document.getElementById('deleteForm').submit();
            }
        }

        // Save as draft (you can implement AJAX here)
        function saveAsDraft() {
            // For now, just show a message
            alert('{{ __('faculty_edit.draft_saved') }}');
            
            // TODO: Implement AJAX save for draft
            // You can send an AJAX request to save the current state
        }

        // Logo preview
        document.getElementById('logo_input')?.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const logoDiv = document.querySelector('.w-24.h-24');
                    const existingImg = logoDiv.querySelector('img');
                    
                    if (existingImg) {
                        existingImg.src = e.target.result;
                    } else {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.alt = 'Logo';
                        img.className = 'w-full h-full object-cover relative z-10';
                        
                        // Remove the SVG icon
                        const svg = logoDiv.querySelector('svg');
                        if (svg) svg.remove();
                        
                        logoDiv.appendChild(img);
                    }
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endpush