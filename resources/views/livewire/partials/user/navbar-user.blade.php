
    <header class="bg-white shadow-md sticky top-0 z-50">

    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-violet-700">ShopMate</h1>

  <nav class="space-x-8 text-xl flex items-center">

    <div id="home">
    <a href="{{route('users.dashboard')}}" class="{{ request()->is('home') ? 'font-bold text-violet-700' : 'text-gray-600 hover:text-violet-700' }}">
        <i class="bi bi-house-door-fill"></i>
    </a>
    </div>

    <a id="orders" href="/orders" class="{{ request()->is('orders') ? 'font-bold text-violet-700' : 'text-gray-600 hover:text-violet-700' }}">
        <i class="bi bi-bag-fill"></i>
    </a>
    <a id="cart" href="/cart" class="{{ request()->is('cart') ? 'font-bold text-violet-700' : 'text-gray-600 hover:text-violet-700' }}">
        <i class="bi bi-cart-fill"></i>
    </a>


<div class="relative inline-block text-left text-base">

    <button id="notificationBtn" class="text-gray-600 hover:text-violet-700">
      <i class="bi bi-bell-fill text-xl"></i>
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

</div>


<div class="relative inline-block text-left text-base">

  <!-- Trigger -->
  <button id="dropdownButton" class="text-gray-600 hover:text-violet-700">
    <i class="bi bi-person-circle text-xl"></i>
  </button>

  <!-- Dropdown Menu -->
  <div id="dropdownMenu"
       class="hidden absolute right-0 mt-2 w-60 bg-white border border-gray-200 rounded-lg shadow-lg z-50 text-sm">

    <!-- Header -->
    <div class="px-4 py-2 font-semibold text-gray-700 border-b">
      Account Menu
    </div>

    <!-- Menu Items -->
    <a id="profile" href="/account"
       class="block px-4 py-2 text-gray-600 hover:bg-violet-50 hover:text-violet-700 border-b">
      <i class="bi bi-person me-2"></i> Profile
    </a>

    <a id="settings" href="/settings"
       class="block px-4 py-2 text-gray-600 hover:bg-violet-50 hover:text-violet-700 border-b">
      <i class="bi bi-gear me-2"></i> Settings
    </a>

    <form method="POST" action="/logout">
      @csrf
      <button id="logout" type="submit"
              class="w-full text-left px-4 py-2 text-gray-600 hover:bg-violet-50 hover:text-violet-700">
        <i class="bi bi-box-arrow-right me-2"></i> Logout
      </button>
    </form>
  </div>
</div>


</nav>
    </div>
  </header>
