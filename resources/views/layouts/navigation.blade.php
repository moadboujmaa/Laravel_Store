<nav x-data="{ open: false }" class="bg-white shadow-md">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="/">
                        <img src={{ asset('images/logo.png') }} alt="logo" class=" w-60">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('store.index')" :active="request()->routeIs('store.index')">
                        {{-- @svg('tni-home') --}}
                        <img src={{ asset('icons/home.png') }} alt="home" class="w-[14px]">
                        {{ __('Market') }}
                    </x-nav-link>
                    <x-nav-link :href="route('store.categories')" :active="request()->routeIs('store.categories')">
                        <img src={{ asset('icons/categories.png') }} alt="categories" class="w-[18px]">
                        {{ __('Categories') }}
                    </x-nav-link>
                    <x-nav-link :href="route('store.products')" :active="request()->routeIs('store.products')">
                        <img src={{ asset('icons/price-tag.png') }} alt="products" class="w-4">
                        {{ __('Products') }}
                    </x-nav-link>
                    @role('admin')
                    <x-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                        <img src={{ asset('icons/admin.png') }} alt="admin" class="w-5">
                        {{ __('Admin') }}
                    </x-nav-link>
                    @endrole
                </div>
            </div>
            <div class="">
                @auth
                    <div class="relative flex items-center h-full gap-5">
                        <div class="flex items-center justify-center bg-orange-400 rounded-full cursor-pointer w-11 h-11" id="openMenu">
                            <img src={{ auth()->user()->avatar }} class='w-10 rounded-full'  alt="profile pic">
                        </div>
                        <div 
                            class="absolute hidden overflow-hidden text-orange-400 bg-white border-2 border-orange-300 rounded-sm right-14 top-3 w-36" 
                            id="menu"
                        >
                            <a href="{{ route('profile.edit') }}">
                                <button class="flex items-center justify-start w-full gap-4 px-3 py-2 pr-6 font-semibold hover:bg-orange-400 hover:text-white" >
                                    <p>Profile</p>
                                </button>
                            </a>
                            <a href={{ route('store.cart') }}>
                                <button class="flex items-center justify-start w-full gap-4 px-3 py-2 pr-6 font-semibold hover:bg-orange-400 hover:text-white">
                                    <p>Cart</p>
                                </button>
                            </a>
                            <form method="POST" action="{{ route('logout') }}" >
                                @csrf
                                <button type="submit" class="flex items-center justify-start w-full gap-4 px-3 py-2 pr-6 font-semibold hover:bg-orange-400 hover:text-white">
                                    <p>Logout</p>
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="flex items-center h-full gap-3">
                        <a href="{{ route('login') }}"
                            class="second-btn"
                        >
                            Login
                        </a>
                        <a 
                            href="{{ route('register') }}"
                            class="btn"
                        >
                            Register
                        </a>
                    </div>
                @endauth
            </div>

</nav>
