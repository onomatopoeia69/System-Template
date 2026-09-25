<div>
     <div class="bg-white border border-slate-200 rounded-xl">

        {{-- Card Header --}}
        <div class="px-6 py-5 border-b border-slate-200">

            <div class="flex flex-col lg:flex-row lg:items-center
                        lg:justify-between gap-4">

                <div>
                    <div class="flex items-center gap-2">

                        <div class="flex items-center justify-center
                                    w-8 h-8 rounded-lg bg-indigo-50">

                            <i data-lucide="baby"
                               class="w-4 h-4 text-indigo-600"></i>

                        </div>

                        <h2 class="text-base font-semibold text-slate-900">
                            Children
                        </h2>

                    </div>

                    <p class="mt-1 text-sm text-slate-500">
                        Manage child profiles and their NFC tags.
                    </p>
                </div>


                {{-- Search + Filter --}}
                <div class="flex items-center gap-3">

                    <div class="relative">

                        <i data-lucide="search"
                           class="absolute left-3 top-1/2
                                  -translate-y-1/2
                                  w-4 h-4 text-slate-400"></i>

                        <input
                            type="text"
                            placeholder="Search children..."
                            class="w-64 rounded-lg border border-slate-200
                                   bg-white py-2.5 pl-9 pr-3
                                   text-sm text-slate-700
                                   placeholder:text-slate-400
                                   focus:border-indigo-500
                                   focus:ring-2 focus:ring-indigo-100
                                   outline-none"
                        >

                    </div>


                    <select
                        class="rounded-lg border border-slate-200
                               bg-white px-3 py-2.5
                               text-sm text-slate-600
                               focus:border-indigo-500
                               focus:ring-2 focus:ring-indigo-100
                               outline-none"
                    >
                        <option>All Status</option>
                        <option>Normal</option>
                        <option>Lost Mode</option>
                    </select>

                </div>

            </div>

        </div>


        {{-- Children List --}}
        <div class="divide-y divide-slate-100">


            {{-- Child 1 --}}
            <div class="px-6 py-5 hover:bg-slate-50 transition">

                <div class="flex flex-col lg:flex-row
                            lg:items-center gap-5">

                    {{-- Photo --}}
                    <div class="shrink-0">

                        <div class="w-14 h-14 rounded-full
                                    bg-indigo-100 overflow-hidden
                                    flex items-center justify-center">

                            <i data-lucide="user"
                               class="w-6 h-6 text-indigo-500"></i>

                        </div>

                    </div>


                    {{-- Child Information --}}
                    <div class="flex-1 min-w-0">

                        <div class="flex items-center gap-2">

                            <h3 class="text-sm font-semibold
                                       text-slate-900">
                                Juan Dela Cruz
                            </h3>

                            <span
                                class="inline-flex items-center gap-1
                                       rounded-full bg-emerald-50
                                       px-2 py-1 text-xs
                                       font-medium text-emerald-600"
                            >
                                <span class="w-1.5 h-1.5 rounded-full
                                             bg-emerald-500"></span>
                                Active
                            </span>

                        </div>

                        <p class="mt-1 text-sm text-slate-500">
                            8 years old · Male
                        </p>

                        <div class="flex flex-wrap items-center gap-4
                                    mt-3 text-xs text-slate-500">

                            <span class="inline-flex items-center gap-1.5">
                                <i data-lucide="radio"
                                   class="w-3.5 h-3.5"></i>
                                NFC Tag Active
                            </span>

                            <span class="inline-flex items-center gap-1.5">
                                <i data-lucide="scan-line"
                                   class="w-3.5 h-3.5"></i>
                                Last scan: Today, 1:20 PM
                            </span>

                        </div>

                    </div>


                    {{-- Lost Mode --}}
                    <div class="lg:w-32">

                        <p class="text-xs text-slate-400 mb-1">
                            Lost Mode
                        </p>

                        <span
                            class="inline-flex items-center gap-1.5
                                   rounded-full bg-slate-100
                                   px-2.5 py-1
                                   text-xs font-medium text-slate-600"
                        >
                            <span class="w-1.5 h-1.5 rounded-full
                                         bg-slate-400"></span>
                            Off
                        </span>

                    </div>


                    {{-- Actions --}}
                    <div class="flex items-center gap-2">

                        <button
                            class="inline-flex items-center gap-1.5
                                   rounded-lg border border-slate-200
                                   bg-white px-3 py-2
                                   text-xs font-medium text-slate-600
                                   hover:bg-slate-50 transition"
                        >
                            <i data-lucide="eye"
                               class="w-3.5 h-3.5"></i>
                            View
                        </button>

                        <button
                            class="inline-flex items-center justify-center
                                   w-9 h-9 rounded-lg
                                   border border-slate-200
                                   text-slate-500
                                   hover:bg-slate-50 transition"
                        >
                            <i data-lucide="more-horizontal"
                               class="w-4 h-4"></i>
                        </button>

                    </div>

                </div>

            </div>


            {{-- Child 2 --}}
            <div class="px-6 py-5 hover:bg-slate-50 transition">

                <div class="flex flex-col lg:flex-row
                            lg:items-center gap-5">

                    <div class="shrink-0">

                        <div class="w-14 h-14 rounded-full
                                    bg-pink-100 overflow-hidden
                                    flex items-center justify-center">

                            <i data-lucide="user"
                               class="w-6 h-6 text-pink-500"></i>

                        </div>

                    </div>


                    <div class="flex-1 min-w-0">

                        <div class="flex items-center gap-2">

                            <h3 class="text-sm font-semibold
                                       text-slate-900">
                                Maria Santos
                            </h3>

                            <span
                                class="inline-flex items-center gap-1
                                       rounded-full bg-emerald-50
                                       px-2 py-1 text-xs
                                       font-medium text-emerald-600"
                            >
                                <span class="w-1.5 h-1.5 rounded-full
                                             bg-emerald-500"></span>
                                Active
                            </span>

                        </div>

                        <p class="mt-1 text-sm text-slate-500">
                            10 years old · Female
                        </p>

                        <div class="flex flex-wrap items-center gap-4
                                    mt-3 text-xs text-slate-500">

                            <span class="inline-flex items-center gap-1.5">
                                <i data-lucide="radio"
                                   class="w-3.5 h-3.5"></i>
                                NFC Tag Active
                            </span>

                            <span class="inline-flex items-center gap-1.5">
                                <i data-lucide="scan-line"
                                   class="w-3.5 h-3.5"></i>
                                Last scan: Today, 2:15 PM
                            </span>

                        </div>

                    </div>


                    {{-- Lost Mode --}}
                    <div class="lg:w-32">

                        <p class="text-xs text-slate-400 mb-1">
                            Lost Mode
                        </p>

                        <span
                            class="inline-flex items-center gap-1.5
                                   rounded-full bg-red-50
                                   px-2.5 py-1
                                   text-xs font-medium text-red-600"
                        >
                            <span class="w-1.5 h-1.5 rounded-full
                                         bg-red-500"></span>
                            Active
                        </span>

                    </div>


                    <div class="flex items-center gap-2">

                        <button
                            class="inline-flex items-center gap-1.5
                                   rounded-lg border border-slate-200
                                   bg-white px-3 py-2
                                   text-xs font-medium text-slate-600
                                   hover:bg-slate-50 transition"
                        >
                            <i data-lucide="eye"
                               class="w-3.5 h-3.5"></i>
                            View
                        </button>

                        <button
                            class="inline-flex items-center justify-center
                                   w-9 h-9 rounded-lg
                                   border border-slate-200
                                   text-slate-500
                                   hover:bg-slate-50 transition"
                        >
                            <i data-lucide="more-horizontal"
                               class="w-4 h-4"></i>
                        </button>

                    </div>

                </div>

            </div>


            {{-- Empty state example --}}
            {{-- 
            <div class="px-6 py-16 text-center">

                <div class="mx-auto flex items-center justify-center
                            w-12 h-12 rounded-xl bg-slate-100">

                    <i data-lucide="baby"
                       class="w-6 h-6 text-slate-400"></i>

                </div>

                <h3 class="mt-4 text-sm font-semibold text-slate-900">
                    No children yet
                </h3>

                <p class="mt-1 text-sm text-slate-500">
                    Add a child to start using Child Lost Mode.
                </p>

                <button
                    class="mt-5 inline-flex items-center gap-2
                           rounded-lg bg-indigo-600
                           px-4 py-2.5 text-sm font-medium text-white"
                >
                    <i data-lucide="plus" class="w-4 h-4"></i>
                    Add Child
                </button>

            </div>
            --}}

        </div>


        {{-- Footer --}}
        <div class="flex items-center justify-between
                    px-6 py-4 border-t border-slate-200">

            <p class="text-xs text-slate-500">
                Showing 2 of 2 children
            </p>

            <div class="flex items-center gap-1">

                <button
                    class="flex items-center justify-center
                           w-8 h-8 rounded-lg
                           border border-slate-200
                           text-slate-400"
                    disabled
                >
                    <i data-lucide="chevron-left"
                       class="w-4 h-4"></i>
                </button>

                <button
                    class="flex items-center justify-center
                           w-8 h-8 rounded-lg
                           bg-indigo-600 text-white
                           text-xs font-medium"
                >
                    1
                </button>

                <button
                    class="flex items-center justify-center
                           w-8 h-8 rounded-lg
                           border border-slate-200
                           text-slate-500
                           hover:bg-slate-50"
                >
                    <i data-lucide="chevron-right"
                       class="w-4 h-4"></i>
                </button>

            </div>

            </div>  

   </div>
</div>
