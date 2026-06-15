 <aside class="w-64 bg-[#0f1729] text-white fixed right-0 top-0 bottom-0 overflow-y-auto z-50 flex flex-col">

     <!-- Logo -->
     <div class="flex items-center gap-3 px-6 py-5 border-b border-white/10">
         <div class="w-10 h-10 bg-[#34a898] rounded-xl flex items-center justify-center">
             <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
             </svg>
         </div>
         <div>
             <h1 class="text-lg font-bold">سامانه فارغان</h1>
             <p class="text-xs text-gray-400">دانشگاه ملی</p>
         </div>
     </div>

     <!-- Navigation -->
     <nav class="flex-1 px-4 py-4 space-y-6">

         <!-- Main -->
         <div>
             <p class="text-xs text-[#3aa093] font-semibold mb-3 px-3">اصلی</p>
             <a href="{{ route('home') }}"
                 class="flex items-center gap-3 px-3 py-2.5 hover:bg-[#34a89875] bg-[#34a898] rounded-lg text-white text-sm font-medium">
                 <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                 </svg>
                 داشبورد
             </a>
         </div>

         <!-- Alumni Management -->
         <div>
             <p class="text-xs text-[#3aa093]  font-semibold mb-3 px-3">مدیریت فارغان</p>
             <div class="space-y-1">
                 <a href="{{ route('graduates.index') }}"
                     class="hover:bg-[#34a89875] flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebarHover hover:text-white text-sm transition-colors">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                     </svg>
                     لیست فارغان
                 </a>
                 <a href="{{ route('graduates.create') }}"
                     class="flex hover:bg-[#34a89875] items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebarHover hover:text-white text-sm transition-colors">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                     </svg>
                     ثبت فارغ جدید
                 </a>
                 {{-- <a href="#"
                     class="flex items-center hover:bg-[#34a89875] gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebarHover hover:text-white text-sm transition-colors">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0" />
                     </svg>
                     پروفایل فارغان
                 </a> --}}
             </div>
         </div>

         <!-- University Structure -->
         <div>
             <p class="text-xs text-[#3aa093]  font-semibold mb-3 px-3">ساختار پوهنخی ها</p>
             <div class="space-y-1">
                 <a href="{{ route('facultes.index') }}"
                     class="flex hover:bg-[#34a89875] items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebarHover hover:text-white text-sm transition-colors">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                     </svg>
                     مدیریت پوهنخی ها
                 </a>
                 <a href="{{ route('departments.index') }}"
                     class="flex hover:bg-[#34a89875] items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebarHover hover:text-white text-sm transition-colors">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                     </svg>
                     مدیریت دپارتمنت‌ها
                 </a>
             </div>
         </div>

         <!-- System -->
         <div>
             <p class="text-xs  text-[#3aa093] font-semibold mb-3 px-3">سیستم</p>
             <div class="space-y-1">
                 <a href="{{ route('users.index') }}"
                     class="flex hover:bg-[#34a89875] items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebarHover hover:text-white text-sm transition-colors">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                     </svg>
                     مدیریت کاربران
                 </a>
                 <a href="{{ route('roles.index') }}"
                     class="flex hover:bg-[#34a89875] items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebarHover hover:text-white text-sm transition-colors">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                     </svg>
                     نقش‌ها و دسترسی‌ها
                 </a>
                 <a href="{{ route('assign-role.index') }}"
                     class="flex hover:bg-[#34a89875] items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebarHover hover:text-white text-sm transition-colors">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                     </svg>ازافه کردن نقش به کاربران
                                     </a>
                 <a href="{{ route('setting') }}"
                     class="flex hover:bg-[#34a89875] items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebarHover hover:text-white text-sm transition-colors">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                     </svg>
                     تنظیمات سیستم
                 </a>
             </div>
         </div>
     </nav>

 
 </aside>
