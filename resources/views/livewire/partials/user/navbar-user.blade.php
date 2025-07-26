
    <header class="bg-white shadow-md sticky top-0 z-50">

    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-violet-700">ShopMate</h1>

  <nav class="space-x-8 text-xl flex items-center">
    <a href="/home" class="{{ request()->is('home') ? 'font-bold text-violet-700' : 'text-gray-600 hover:text-violet-700' }}">
        <i class="bi bi-house-door-fill"></i>
    </a>

    <a href="/orders" class="{{ request()->is('orders') ? 'font-bold text-violet-700' : 'text-gray-600 hover:text-violet-700' }}">
        <i class="bi bi-bag-fill"></i>
    </a>
    <a href="/cart" class="{{ request()->is('cart') ? 'font-bold text-violet-700' : 'text-gray-600 hover:text-violet-700' }}">
        <i class="bi bi-cart-fill"></i>
    </a>
    <a href="/notifications" class="{{ request()->is('notifications') ? 'font-bold text-violet-700' : 'text-gray-600 hover:text-violet-700' }}">
        <i class="bi bi-bell-fill"></i>
    </a>

  <div class="relative inline-block text-left text-base">

    <button id="dropdownButton" class="text-gray-600 hover:text-violet-700">  
      <i class="bi bi-person-circle text-xl"></i>
    </button>

    
    <div id="dropdownMenu"
         class="hidden absolute right-0 mt-2 w-44 bg-white border border-gray-200 rounded-lg shadow-lg z-50 text-l">
      <a href="/account"
         class="block px-4 py-2 text-gray-700 hover:bg-violet-50 hover:text-violet-700">
        <i class="bi bi-person me-2"></i> Account
      </a>
      <a href="/settings"
         class="block px-4 py-2 text-gray-700 hover:bg-violet-50 hover:text-violet-700">
        <i class="bi bi-gear me-2"></i> Settings
      </a>
      <form method="POST" action="/logout">
        @csrf
        <button type="submit"
                class="w-full text-left px-4 py-2 text-gray-700 hover:bg-violet-50 hover:text-violet-700">
          <i class="bi bi-box-arrow-right me-2"></i> Logout
        </button>
      </form>
    </div>
  </div>

</nav>
    </div>
  </header>
