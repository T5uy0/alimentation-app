<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 fixed w-full top-0 z-20">
    <!-- Top Navigation -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-14">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Nav Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Home') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 transition">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414L10 13.414l-4.707-4.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>

{{-- FUSION LAYOUT + SIDEBAR --}}
<div class="flex pt-14">
    <!-- Sidebar -->
    <aside class="w-56 bg-white h-screen shadow fixed left-0 top-14 p-4 flex flex-col space-y-4">
        <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-blue-600">🏠 Dashboard</a>
        <a href="{{ route('meals.index') }}" class="text-gray-700 hover:text-blue-600">🍔 Meals</a>
        <a href="#" class="text-gray-700 hover:text-blue-600">📊 Analytics</a>
        <a href="#" class="text-gray-700 hover:text-blue-600">⚙️ Settings</a>
    </aside>

    <!-- Main Content -->
    <main class="ml-56 p-6 w-full">
        @yield('content')
    </main>
</div>
