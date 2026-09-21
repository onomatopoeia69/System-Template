<div
    id="socialModal"
    class="fixed inset-0 z-50 hidden"
    aria-hidden="true"
>

    {{-- Backdrop --}}
    <div
        id="socialModalBackdrop"
        onclick="closeSocialModal()"
        class="absolute inset-0
               bg-black/30
               backdrop-blur-sm
               opacity-0
               transition-opacity duration-200"
    ></div>


    {{-- Modal Wrapper --}}
    <div
        class="relative z-10
               flex min-h-full
               items-end sm:items-center
               justify-center
               p-0 sm:p-6"
    >

        {{-- Modal --}}
        <div
            id="socialModalPanel"
            class="w-full sm:max-w-md
                   bg-white
                   rounded-t-2xl sm:rounded-xl
                   shadow-2xl
                   transform translate-y-full sm:translate-y-0
                   sm:scale-95
                   opacity-0
                   transition-all duration-200"
        >

            {{-- Modal Header --}}
            <div class="px-6 pt-6 pb-5">

                <div class="flex items-start justify-between gap-4">

                    <div>
                        <h2 class="text-lg font-semibold tracking-tight text-gray-900">
                            Add social link
                        </h2>

                        <p class="mt-1 text-sm text-gray-500">
                            Connect a social profile to your account.
                        </p>
                    </div>

                    <button
                        type="button"
                        onclick="closeSocialModal()"
                        class="w-8 h-8 shrink-0
                               flex items-center justify-center
                               rounded-md
                               text-gray-400
                               hover:text-gray-900
                               hover:bg-gray-50
                               transition-colors"
                        aria-label="Close"
                    >
                        <i class="fas fa-times text-sm"></i>
                    </button>

                </div>

            </div>


            {{-- Form --}}
            <form
                action=""
                method="POST"
            >
                @csrf

                <div class="px-6 pb-6 space-y-5">

                    {{-- Platform --}}
                    <div>

                        <label
                            for="platform"
                            class="block text-sm font-medium text-gray-700 mb-2"
                        >
                            Platform
                        </label>

                        <select
                            name="platform"
                            id="platform"
                            required
                            class="w-full h-11 px-3
                                   rounded-lg
                                   border border-gray-200
                                   bg-white
                                   text-sm text-gray-900
                                   focus:outline-none
                                   focus:border-indigo-500
                                   focus:ring-2
                                   focus:ring-indigo-500/10
                                   transition"
                        >
                            <option value="">Select a platform</option>
                            <option value="linkedin">LinkedIn</option>
                            <option value="github">GitHub</option>
                            <option value="twitter">Twitter / X</option>
                        </select>

                    </div>


                    {{-- URL --}}
                    <div>

                        <label
                            for="url"
                            class="block text-sm font-medium text-gray-700 mb-2"
                        >
                            Profile URL
                        </label>

                        <input
                            type="url"
                            name="url"
                            id="url"
                            required
                            placeholder="https://linkedin.com/username"
                            value="{{ old('url') }}"
                            class="w-full h-11 px-3
                                   rounded-lg
                                   border border-gray-200
                                   bg-white
                                   text-sm text-gray-900
                                   placeholder:text-gray-400
                                   focus:outline-none
                                   focus:border-indigo-500
                                   focus:ring-2
                                   focus:ring-indigo-500/10
                                   transition"
                        />

                    </div>

                </div>


                {{-- Actions --}}
                <div
                    class="flex items-center justify-end gap-3
                           px-6 py-4
                           border-t border-gray-100"
                >

                    <button
                        type="button"
                        onclick="closeSocialModal()"
                        class="h-10 px-4
                               text-sm font-medium
                               text-gray-600
                               hover:text-gray-900
                               transition-colors"
                    >
                        Cancel
                    </button>

                    <button
                        type="submit"
                        class="h-10 px-4
                               rounded-lg
                               bg-indigo-600
                               text-white
                               text-sm font-medium
                               hover:bg-indigo-700
                               active:bg-indigo-800
                               transition-colors
                               focus:outline-none
                               focus:ring-2
                               focus:ring-indigo-500/30"
                    >
                        Save Link
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


{{-- =============================================================
    JAVASCRIPT
============================================================= --}}
<script>

    function openSocialModal() {

        const modal = document.getElementById('socialModal');
        const backdrop = document.getElementById('socialModalBackdrop');
        const panel = document.getElementById('socialModalPanel');

        modal.classList.remove('hidden');

        document.body.classList.add('overflow-hidden');

        requestAnimationFrame(() => {

            backdrop.classList.remove('opacity-0');

            panel.classList.remove(
                'translate-y-full',
                'sm:scale-95',
                'opacity-0'
            );

        });
    }


    function closeSocialModal() {

        const modal = document.getElementById('socialModal');
        const backdrop = document.getElementById('socialModalBackdrop');
        const panel = document.getElementById('socialModalPanel');

        backdrop.classList.add('opacity-0');

        panel.classList.add(
            'translate-y-full',
            'sm:scale-95',
            'opacity-0'
        );

        setTimeout(() => {

            modal.classList.add('hidden');

            document.body.classList.remove('overflow-hidden');

        }, 200);
    }


    function toggleSocialMenu(id) {

        const menu = document.getElementById('social-menu-' + id);

        document.querySelectorAll('[id^="social-menu-"]').forEach(item => {

            if (item !== menu) {
                item.classList.add('hidden');
            }

        });

        menu.classList.toggle('hidden');
    }


    // Close menus when clicking elsewhere
    document.addEventListener('click', function(event) {

        if (!event.target.closest('.relative')) {

            document.querySelectorAll('[id^="social-menu-"]').forEach(menu => {
                menu.classList.add('hidden');
            });

        }

    });


    // ESC closes modal
    document.addEventListener('keydown', function(event) {

        if (event.key === 'Escape') {
            closeSocialModal();
        }

    });

</script>
