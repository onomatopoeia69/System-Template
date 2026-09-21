<div>
            @if($socials->isEmpty())

            {{-- Empty State --}}
            <div class="py-16 text-center">

                <p class="text-sm font-medium text-gray-900">
                    No social profiles connected
                </p>

                <p class="mt-1.5 text-sm text-gray-500">
                    Add your first social profile to get started.
                </p>

                <button
                    type="button"
                    onclick="openSocialModal()"
                    class="mt-5 text-sm font-medium text-indigo-600
                           hover:text-indigo-700 transition-colors"
                >
                    Add your first profile
                </button>

            </div>

        @else

            <div class="divide-y divide-gray-100">

                @foreach($socials as $social)

                    <div
                        class="group flex items-center gap-4
                               py-5 first:pt-5
                               transition-colors"
                    >

                        {{-- Platform --}}
                        <div class="w-10 h-10 shrink-0
                                    flex items-center justify-center
                                    rounded-lg bg-gray-50
                                    text-gray-600">

                            @if($social->platform === 'linkedin')

                                <i class="fab fa-linkedin-in"></i>

                            @elseif($social->platform === 'github')

                                <i class="fab fa-github"></i>

                            @elseif($social->platform === 'twitter')

                                <i class="fab fa-x-twitter"></i>

                            @else

                                <i class="fas fa-link"></i>

                            @endif

                        </div>


                        {{-- Information --}}
                        <div class="min-w-0 flex-1">

                            <div class="flex items-center gap-2">

                                <p class="text-sm font-medium text-gray-900">
                                    {{ ucfirst($social->platform) }}
                                </p>

                                <span
                                    class="hidden sm:inline-flex
                                           text-[11px] font-medium
                                           text-gray-400"
                                >
                                    Connected
                                </span>

                            </div>

                            <a
                                href="{{ $social->url }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="block mt-1 text-sm text-gray-500
                                       truncate
                                       hover:text-gray-900
                                       transition-colors"
                            >
                                {{ $social->url }}
                            </a>

                        </div>


                        {{-- Actions --}}
                        <div
                            class="flex items-center gap-1 shrink-0
                                   opacity-100 sm:opacity-0
                                   sm:group-hover:opacity-100
                                   sm:focus-within:opacity-100
                                   transition-opacity"
                        >

                            {{-- Edit --}}
                            <a
                                href="{{ route('socials.edit', $social->id) }}"
                                class="inline-flex items-center justify-center
                                       h-8 px-3 rounded-md
                                       text-xs font-medium
                                       text-gray-500
                                       hover:text-gray-900
                                       hover:bg-gray-50
                                       transition-colors
                                       focus:outline-none
                                       focus:ring-2
                                       focus:ring-gray-900/10"
                            >
                                Edit
                            </a>


                            {{-- More --}}
                            <div class="relative">

                                <button
                                    type="button"
                                    onclick="toggleSocialMenu({{ $social->id }})"
                                    class="w-8 h-8
                                           inline-flex items-center justify-center
                                           rounded-md
                                           text-gray-400
                                           hover:text-gray-900
                                           hover:bg-gray-50
                                           transition-colors
                                           focus:outline-none
                                           focus:ring-2
                                           focus:ring-gray-900/10"
                                    aria-label="More options"
                                >
                                    <i class="fas fa-ellipsis text-xs"></i>
                                </button>


                                {{-- Context Menu --}}
                                <div
                                    id="social-menu-{{ $social->id }}"
                                    class="hidden absolute right-0 top-9 z-20
                                           w-36 py-1
                                           bg-white
                                           border border-gray-100
                                           rounded-lg
                                           shadow-lg"
                                >

                                    <a
                                        href="{{ route('socials.edit', $social->id) }}"
                                        class="block px-3 py-2
                                               text-xs text-gray-700
                                               hover:bg-gray-50"
                                    >
                                        Edit profile
                                    </a>

                                    <form
                                        action="{{ route('socials.destroy', $social->id) }}"
                                        method="POST"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="w-full text-left
                                                   px-3 py-2
                                                   text-xs text-gray-700
                                                   hover:bg-gray-50"
                                        >
                                            Remove profile
                                        </button>
                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @endif
</div>
