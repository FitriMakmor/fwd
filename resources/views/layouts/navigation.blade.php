<nav class="navbar navbar-expand-md navbar-light bg-blue sticky-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <x-application-logo width="36" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{-- {{ __('Dashboard') }} --}}
                    <span class="text-blue">PPB Insurance Planner</span>
                </x-nav-link>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">

                <!-- Settings Dropdown -->
                @auth


                    <div class="text-blue pr-3">
                        {{ Auth::user()->name }}

                    </div>
                    {{-- <x-dropdown id="settingsDropdown">
                        <x-slot name="trigger">
                            {{ Auth::user()->name }}
                        </x-slot>

                        <!-- Authentication -->

                        <x-slot name="content">
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown> --}}
                    <form class="pl-1 d-flex align-items-center" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div>
                            <a href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();">{{ __('Log Out') }}</a>
                        </div>
                    </form>

                @endauth
            </ul>
        </div>
    </div>
</nav>
