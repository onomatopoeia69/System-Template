<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">

    {{-- =========================================================
        HEADER
    ========================================================== --}}
    <header class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-10">

        <div>
            <h1 class="text-2xl sm:text-3xl font-semibold tracking-tight text-gray-900">
                Social Links
            </h1>

            <p class="mt-2 text-sm text-gray-500">
                Manage the profiles displayed on your account.
            </p>
        </div>

        {{-- Primary Action --}}
        <button
            type="button"
            onclick="openSocialModal()"
            class="inline-flex items-center justify-center gap-2
                   h-10 px-4 rounded-lg
                   bg-indigo-600 text-white
                   text-sm font-medium
                   hover:bg-indigo-700
                   active:bg-indigo-800
                   transition-colors
                   focus:outline-none focus:ring-2
                   focus:ring-indigo-500/30
                   whitespace-nowrap"
        >
            <i class="fas fa-plus text-xs"></i>
            Add Social Link
        </button>

    </header>


    {{-- =========================================================
        SOCIAL LINKS
    ========================================================== --}}
    <section>

        {{-- Section Header --}}
        <div class="flex items-end justify-between pb-4">

            <div>
                <h2 class="text-sm font-semibold text-gray-900">
                    Connected profiles
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Your linked social media accounts.
                </p>
            </div>

            @if(isset($socials))
                <span class="text-xs text-gray-400">
                    {{ $socials->count() }}
                    {{ Str::plural('profile', $socials->count()) }}
                </span>
            @endif

        </div>


        {{-- =====================================================
            LIST
        ====================================================== --}}
        {{-- @include('users.socials.partials._links_list') --}}

    </section>

</div>


{{-- =============================================================
    ADD SOCIAL LINK MODAL
============================================================= --}}
        @include('users.socials.partials._add_form')

