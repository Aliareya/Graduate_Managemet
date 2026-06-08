 <header class="bg-white border-b border-gray-200 px-6 py-2 sticky top-0 z-50">
     <div class="flex items-center justify-between gap-4">
         <!-- Search Bar -->
         <div class="flex-1 max-w-2xl">
             <div class="relative">
                 <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                     <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                     </svg>
                 </div>
                 <input type="text" placeholder="Search anything..."
                     class="w-full pl-12 pr-12 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                 <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                     <kbd
                         class="hidden sm:inline-block px-2 py-1 text-xs font-semibold text-gray-400 bg-gray-100 border border-gray-200 rounded">⌘K</kbd>
                 </div>
             </div>
         </div>

         <!-- Right Section -->
         <div class="flex items-center gap-4">
             <!-- Notification Bell -->
             <button
                 class="relative p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-xl transition-colors">
                 <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                     </path>
                 </svg>
                 <span class="absolute top-2 right-2 h-2.5 w-2.5 bg-[#34a89875] rounded-full border-2 border-white"></span>
             </button>

             <!-- Settings Icon -->
             <button class="p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-xl transition-colors">
                 <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                     </path>
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                 </svg>
             </button>

             <!-- Divider -->
             <div class="h-8 w-px bg-gray-200"></div>

             <div x-data="{ open: false }" class="relative">

                 <!-- Profile Button -->
                 <button @click="open = !open"
                     class="flex items-center gap-3 p-2 hover:bg-gray-50 rounded-xl transition-all">

                     <div
                         class="h-10 w-10 rounded-full bg-gradient-to-r from-cyan-500 to-[#34a89875] flex items-center justify-center">
                         <span class="text-white font-semibold text-sm">AE</span>
                     </div>

                     <div class="hidden md:block text-left">
                         <p class="text-sm font-semibold text-gray-900">
                             Alireza Ebrahimi
                         </p>
                         <p class="text-xs text-gray-500">
                             Administrator
                         </p>
                     </div>

                     <svg class="h-4 w-4 text-gray-400 transition-transform" :class="{ 'rotate-180': open }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                 </button>

                 <!-- Dropdown -->
                 <div x-show="open" @click.away="open = false" x-transition
                     class="absolute left-0 mt-3 w-72 bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden z-50">

                     <!-- Header -->
                     <div class="p-5 bg-gradient-to-r from-cyan-500 to-[#34a89875]">

                         <div class="flex items-center gap-3">

                             <div class="h-14 w-14 rounded-xl bg-white/20 flex items-center justify-center">
                                 <span class="text-white font-bold text-lg">
                                     AE
                                 </span>
                             </div>

                             <div>
                                 <h4 class="text-white font-bold">
                                     Alireza Ebrahimi
                                 </h4>

                                 <p class="text-cyan-100 text-sm">
                                     System Administrator
                                 </p>
                             </div>

                         </div>

                     </div>

                     <!-- Menu -->
                     <div class="p-2">

                         <a href="#"
                             class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-50 transition">

                             <span>👤</span>
                             <span class="text-gray-700">
                                 My Profile
                             </span>

                         </a>

                         <a href="#"
                             class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-50 transition">

                             <span>⚙️</span>
                             <span class="text-gray-700">
                                 Account Settings
                             </span>

                         </a>

                         <a href="#"
                             class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-50 transition">

                             <span>🔔</span>
                             <span class="text-gray-700">
                                 Notifications
                             </span>

                         </a>

                         <div class="my-2 border-t border-gray-100"></div>

                         <a href="#"
                             class="flex items-center gap-3 px-4 py-3 rounded-xl text-red-600 hover:bg-red-50 transition">

                             <span>🚪</span>
                             <span>
                                 Logout
                             </span>

                         </a>

                     </div>

                 </div>

             </div>
         </div>
     </div>
 </header>
