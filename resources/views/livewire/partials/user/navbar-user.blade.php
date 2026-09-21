
       <header class="h-16 bg-white border-b border-gray-200 shadow-md sticky top-0 z-50 flex items-center justify-between px-8">

    <div class="flex items-center gap-3">


        <button
            id="sidebarToggle"
            type="button"
            class="w-10 h-10 flex items-center justify-center
                   rounded-lg text-gray-600
                   hover:bg-gray-100 transition">

            <i id="sidebarIcon" class="bi bi-list text-xl"></i>

        </button>


  <div id="notificationMenu"
     class="hidden absolute right-0 mt-2 w-80 bg-white border border-gray-200 rounded-lg shadow-lg z-50 text-sm">
  <div class="px-4 py-2 font-semibold text-gray-700 border-b">Notifications</div>
  <div class="max-h-60 overflow-y-auto">
    <a href="#"
       class="block px-4 py-2 text-gray-600 hover:bg-violet-50 hover:text-violet-700 border-b">
      <i class="bi bi-bell-fill text-warning me-2"></i>
      New order placed #12345
      <span class="text-xs text-muted float-end">2m ago</span>
    </a>
    <a href="#"
       class="block px-4 py-2 text-gray-600 hover:bg-violet-50 hover:text-violet-700 border-b">
      <i class="bi bi-envelope-fill text-primary me-2"></i>
      You received a new message
      <span class="text-xs text-muted float-end">5m ago</span>
    </a>
    <a href="#"
       class="block px-4 py-2 text-gray-600 hover:bg-violet-50 hover:text-violet-700">
      <i class="bi bi-exclamation-circle-fill text-danger me-2"></i>
      System error detected
      <span class="text-xs text-muted float-end">10m ago</span>
    </a>
  </div>

  <div class="px-4 py-2 text-center text-sm text-gray-500 hover:text-violet-700 cursor-pointer border-t">
    View all
  </div>
</div>

        <h2 class="font-semibold text-gray-800">
            Dashboard
        </h2>

    </div>


    <div class="flex items-center gap-4">


        <div class="flex items-center gap-2">

            <div class="w-9 h-9 rounded-full bg-violet-600
                        text-white flex items-center justify-center">

                {{ strtoupper(substr(Auth::user()->first_name, 0, 1)) }}

            </div>

            <div class="hidden md:block">

                <p class="text-sm font-semibold">
                    {{ Auth::user()->first_name }}
                </p>

                <p class="text-xs text-gray-500">
                    Admin
                </p>

            </div>

        </div>

    </div>

</header>
