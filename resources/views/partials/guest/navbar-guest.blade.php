    {{-- navbar --}}
<div class="w-full h-screen bg-[url('/img/bg-violet.png')] bg-cover bg-center">
    <nav class="p-3 sticky top-0 z-50">
        <div class="container mx-auto flex items-center justify-between">
            
            {{-- logo --}}
            <div class="flex items-center space-x-4">
                <img src="/img/logo.png" alt="Logo" class="h-12 w-12">
                <h1 class="text-2xl sm:text-3xl font-bold text-white">Ordering and Billing</h1>
            </div>

            {{-- Mobile menu button --}}
            <button id="menu-toggle" class="text-white md:hidden focus:outline-none">
                <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            {{-- nav bar --}}
            <ul id="nav-links" class="hidden md:flex space-x-8 text-white font-bold text-base">
                <li><a href="#" class="hover:text-violet-300">Home</a></li>
                <li><a href="#" class="hover:text-violet-300">Shop</a></li>
                <li><a href="#" class="hover:text-violet-300">About</a></li>
                <li><a href="#" class="hover:text-violet-300">Blog</a></li>
                <li><a href="#" class="hover:text-violet-300">Contact</a></li>
                <li>
                    <a href="#" class="flex items-center text-white hover:text-violet-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14l1 9H4l1-9zM9 21h6a2 2 0 002-2H7a2 2 0 002 2z" />
                        </svg>
                    </a>
                </li>


                {{-- livewire auth login component --}}
                <livewire:auth.login />
            </ul>
        </div>
    </nav>
