@extends('admin.layouts.adminLayout')
@section('admin_page_content')
    <div class="p-8">
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ __('graduate_create.page_title') }}</h1>
            <p class="text-gray-500">{{ __('graduate_create.page_subtitle') }}</p>
        </div>

        @if ($errors->any())
            <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-6 py-4 rounded-xl">
                <ul class="list-disc list-inside space-y-1 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('graduates.store') }}" method="POST" id="graduateForm" enctype="multipart/form-data">
            @csrf
            <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm space-y-10">

                <!-- Section 1: Personal Information -->
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-b pb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        {{ __('graduate_create.personal_info') }}
                    </h2>
                    
                    <!-- Image Upload Section -->
                    <div class="mb-8">
                        <label class="block text-sm font-medium text-gray-700 mb-3">
                            {{ __('graduate_create.profile_image') }}
                        </label>
                        <div class="flex items-start gap-6">
                            <!-- Image Preview -->
                            <div class="relative">
                                <div id="imagePreview" class="w-32 h-32 rounded-xl border-2 border-dashed border-gray-300 flex items-center justify-center bg-gray-50 overflow-hidden">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <button type="button" id="removeImage" class="hiddenc absolute -top-2 -right-2 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition-colors shadow-md">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            
                            <!-- Upload Button -->
                            <div class="flex-1">
                                <label for="profile_image" class="cursor-pointer inline-flex items-center gap-2 px-6 py-3 bg-blue-50 text-blue-900 rounded-xl hover:bg-blue-100 transition-colors border border-blue-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                    </svg>
                                    <span class="font-medium">{{ __('graduate_create.choose_image') }}</span>
                                </label>
                                <input type="file" 
                                       id="profile_image" 
                                       name="profile_image" 
                                       accept="image/*"
                                       class="hidden">
                                <p class="mt-2 text-xs text-gray-500">{{ __('graduate_create.image_help') }}</p>
                                @error('profile_image')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('graduate_create.first_name') }} <span class="text-red-500">{{ __('graduate_create.required') }}</span>
                            </label>
                            <input type="text" name="first_name" required value="{{ old('first_name') }}"
                                placeholder="{{ __('graduate_create.first_name') }}"
                                class="w-full px-4 py-3 border border-grcay-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('first_name') border-red-400 @enderror">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('graduate_create.last_name') }} <span class="text-red-500">{{ __('graduate_create.required') }}</span>
                            </label>
                            <input type="text" name="last_name" required value="{{ old('last_name') }}"
                                placeholder="{{ __('graduate_create.last_name') }}"
                                class="w-full px-4 py-3 border border-grcay-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('last_name') border-red-400 @enderror">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('graduate_create.father_name') }}
                            </label>
                            <input type="text" name="father_name" value="{{ old('father_name') }}" 
                                placeholder="{{ __('graduate_create.father_name') }}"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('graduate_create.gender') }}
                            </label>
                            <select name="gender"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                                <option value="">{{ __('graduate_create.select') }}</option>
                                <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>{{ __('graduate_create.male') }}</option>
                                <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>{{ __('graduate_create.female') }}</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('graduate_create.birth_date') }}
                            </label>
                            <div class="relative">
                                <input type="date" name="birth_date" value="{{ old('birth_date') }}"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2 pointer-events-none"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Contact Information -->
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-b pb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        {{ __('graduate_create.contact_info') }}
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('graduate_create.phone') }}</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="07XXXXXXXXX"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('graduate_create.email') }}</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="example@email.com"
                                class="w-full px-4 py-3 border border-grayc-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('email') border-red-400 @enderror">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('graduate_create.address') }}</label>
                            <textarea name="address" rows="4" placeholder="{{ __('graduate_create.address_placeholder') }}"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none">{{ old('address') }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Educational Information -->
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-b pb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        </svg>
                        {{ __('graduate_create.educational_info') }}
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('graduate_create.student_id') }} <span class="text-red-500">{{ __('graduate_create.required') }}</span>
                            </label>
                            <input type="text" name="student_id" required value="{{ old('student_id') }}"
                                placeholder="{{ __('graduate_create.example_student_id') }}"
                                class="w-full px-4 py-3 border border-graxy-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('student_id') border-red-400 @enderror">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('graduate_create.faculty') }} <span class="text-red-500">{{ __('graduate_create.required') }}</span>
                            </label>
                            <select name="faculty_id" id="faculty_id" required
                                class="w-full px-4 py-3 border border-xxgray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white @error('faculty_id') border-red-400 @enderror">
                                <option value="">{{ __('graduate_create.select_faculty') }}</option>
                                @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}"
                                        {{ old('faculty_id') == $faculty->id ? 'selected' : '' }}>
                                        {{ $faculty->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('graduate_create.department') }}
                            </label>
                            <select name="department_id" id="department_id"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                                <option value="">{{ __('graduate_create.select_faculty_first') }}</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}" data-faculty="{{ $department->faculty_id }}"
                                        {{ old('department_id') == $department->id ? 'selected' : '' }}>
                                        {{ $department->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('graduate_create.entry_year') }}</label>
                            <input type="text" name="entry_year" value="{{ old('entry_year') }}"
                                placeholder="{{ __('graduate_create.example_year') }}"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('graduate_create.graduation_year') }} <span class="text-red-500">{{ __('graduate_create.required') }}</span>
                            </label>
                            <input type="text" name="graduation_year" required value="{{ old('graduation_year') }}"
                                placeholder="{{ __('graduate_create.example_year') }}"
                                class="w-full px-4 py-3 border border-graxy-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('graduation_year') border-red-400 @enderror">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('graduate_create.degree') }}</label>
                            <select name="degree"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                                <option value="">{{ __('graduate_create.select') }}</option>
                                <option value="bachelor" {{ old('degree') === 'bachelor' ? 'selected' : '' }}>{{ __('graduate_create.bachelor') }}</option>
                                <option value="master" {{ old('degree') === 'master' ? 'selected' : '' }}>{{ __('graduate_create.master') }}</option>
                                <option value="phd" {{ old('degree') === 'phd' ? 'selected' : '' }}>{{ __('graduate_create.phd') }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Employment Information -->
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-b pb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        {{ __('graduate_create.employment_info') }}
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('graduate_create.currently_employed') }} <span class="text-red-500">{{ __('graduate_create.required') }}</span>
                            </label>
                            <select name="is_employed" id="is_employed" required
                                class="w-full px-4 py-3 border border-gra]y-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white @error('is_employed') border-red-400 @enderror">
                                <option value="">{{ __('graduate_create.select') }}</option>
                                <option value="yes" {{ old('is_employed') === 'yes' ? 'selected' : '' }}>{{ __('graduate_create.yes_employed') }}</option>
                                <option value="no" {{ old('is_employed') === 'no' ? 'selected' : '' }}>{{ __('graduate_create.no_not_employed') }}</option>
                            </select>
                        </div>
                    </div>

                    <!-- Not Employed: reason checkboxes -->
                    <div id="not_employed_reason"
                        class="{{ old('is_employed') === 'no' ? '' : 'hidden' }} mb-6 p-5 bg-gray-50 rounded-xl border border-gray-200">
                        <label class="block text-sm font-medium text-gray-700 mb-3">
                            {{ __('graduate_create.current_status') }} <span class="text-red-500">{{ __('graduate_create.required') }}</span>
                        </label>
                        <div class="flex flex-wrap gap-6">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" name="job_status[]" value="{{ __('graduate_create.unemployed') }}"
                                    {{ is_array(old('job_status')) && in_array(__('graduate_create.unemployed'), old('job_status')) ? 'checked' : '' }}
                                    class="w-5 h-5 rounded border-gray-300 text-primary focus:ring-primary/30 cursor-pointer">
                                <span
                                    class="text-sm font-medium text-gray-700 group-hover:text-primary transition-colors select-none">
                                    {{ __('graduate_create.unemployed') }}
                                </span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" name="job_status[]" value="{{ __('graduate_create.continuing_education') }}"
                                    {{ is_array(old('job_status')) && in_array(__('graduate_create.continuing_education'), old('job_status')) ? 'checked' : '' }}
                                    class="w-5 h-5 rounded border-gray-300 text-primary focus:ring-primary/30 cursor-pointer">
                                <span
                                    class="text-sm font-medium text-gray-700 group-hover:text-primary transition-colors select-none">
                                    {{ __('graduate_create.continuing_education') }}
                                </span>
                            </label>
                        </div>
                    </div>

                    <!-- Job Details (hidden unless employed) -->
                    <div id="job_details"
                        class="grid grid-cols-1 md:grid-cols-3 gap-6 {{ old('is_employed') === 'yes' ? '' : 'hidden' }}">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('graduate_create.company_name') }}</label>
                            <input type="text" name="company_name" value="{{ old('company_name') }}"
                                placeholder="{{ __('graduate_create.company_name') }}"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('graduate_create.job_title') }}</label>
                            <input type="text" name="job_title" value="{{ old('job_title') }}"
                                placeholder="{{ __('graduate_create.job_title') }}"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('graduate_create.work_location') }}</label>
                            <input type="text" name="work_location" value="{{ old('work_location') }}"
                                placeholder="{{ __('graduate_create.province_city') }}"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                    </div>
                </div>

            </div>

            <!-- Action Buttons -->
            <div class="mt-8 flex items-center justify-end gap-4">
                <a href="{{ route('graduates.index') }}"
                    class="px-6 py-3 border border-gray-200 rounded-xl text-gray-600 hover:bg-gray-50 transition-colors flex items-center gap-2">
                    <span>{{ __('graduate_create.cancel') }}</span>
                </a>
                <button type="submit"
                    class="px-8 py-3 bg-blue-900 text-white rounded-xl hover:bg-primary-dark transition-colors flex items-center gap-2 shadow-sm">
                    <span>{{ __('graduate_create.submit') }}</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
@endsection

@push('page_script')
    <script>
        // ── Image Upload Preview ──────────────────────────────────────────────────
        const imageInput = document.getElementById('profile_image');
        const imagePreview = document.getElementById('imagePreview');
        const removeImageBtn = document.getElementById('removeImage');
        let currentImageFile = null;

        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            
            if (file) {
                // Validate file type
                if (!file.type.startsWith('image/')) {
                    alert('{{ __('graduate_invalid_image_type') }}');
                    this.value = '';
                    return;
                }
                
                // Validate file size (max 2MB)
                if (file.size > 2 * 1024 * 1024) {
                    alert('{{ __('graduate_image_too_large') }}');
                    this.value = '';
                    return;
                }
                
                currentImageFile = file;
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    imagePreview.innerHTML = `<img src="${e.target.result}" alt="Preview" class="w-full h-full object-cover">`;
                    removeImageBtn.classList.remove('hidden');
                };
                
                reader.readAsDataURL(file);
            }
        });

        removeImageBtn.addEventListener('click', function() {
            imageInput.value = '';
            currentImageFile = null;
            imagePreview.innerHTML = `
                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            `;
            removeImageBtn.classList.add('hidden');
        });

        // ── 1. Employment toggle ──────────────────────────────────────────────────
        const isEmployedSelect = document.getElementById('is_employed');
        const jobDetails = document.getElementById('job_details');
        const notEmployedReason = document.getElementById('not_employed_reason');

        isEmployedSelect.addEventListener('change', function() {
            if (this.value === 'yes') {
                jobDetails.classList.remove('hidden');
                notEmployedReason.classList.add('hidden');
                notEmployedReason.querySelectorAll('input[type="checkbox"]')
                    .forEach(cb => cb.checked = false);

            } else if (this.value === 'no') {
                jobDetails.classList.add('hidden');
                jobDetails.querySelectorAll('input').forEach(i => i.value = '');
                notEmployedReason.classList.remove('hidden');

            } else {
                jobDetails.classList.add('hidden');
                notEmployedReason.classList.add('hidden');
                jobDetails.querySelectorAll('input').forEach(i => i.value = '');
                notEmployedReason.querySelectorAll('input[type="checkbox"]')
                    .forEach(cb => cb.checked = false);
            }
        });

        // ── 2. Department filter by faculty ──────────────────────────────────────
        const facultySelect = document.getElementById('faculty_id');
        const departmentSelect = document.getElementById('department_id');
        const allDeptOptions = Array.from(departmentSelect.options).slice(1);

        function filterDepartments(selectedFacultyId) {
            while (departmentSelect.options.length > 1) {
                departmentSelect.remove(1);
            }

            if (!selectedFacultyId) {
                departmentSelect.options[0].text = '{{ __('graduate_create.select_faculty_first') }}';
                return;
            }

            departmentSelect.options[0].text = '{{ __('graduate_create.select_department') }}';

            const matching = allDeptOptions.filter(
                opt => opt.dataset.faculty === selectedFacultyId
            );

            if (matching.length === 0) {
                departmentSelect.options[0].text = '{{ __('graduate_create.no_departments') }}';
                return;
            }

            matching.forEach(opt => departmentSelect.add(opt.cloneNode(true)));
        }

        facultySelect.addEventListener('change', function() {
            departmentSelect.value = '';
            filterDepartments(this.value);
        });

        // Restore state on validation failure
        (function() {
            const oldFaculty = facultySelect.value;
            if (oldFaculty) filterDepartments(oldFaculty);

            const oldDept = '{{ old('department_id') }}';
            if (oldDept) departmentSelect.value = oldDept;
        })();
    </script>
@endpush