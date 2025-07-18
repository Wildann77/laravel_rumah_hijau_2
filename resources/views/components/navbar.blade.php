<div>
    <nav class="navbar navbar-expand-lg p-3" style="background: linear-gradient(90deg,
 #f4f6eb 100%);">
        <div class="container">
            <a class="navbar-brand text-[#798a47]" href="/">Rumah Hijau</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link activate text-[#798a47]" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-[#798a47]" href="/categories">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-[#798a47]" href="/products">Produk</a>
                    </li>
                </ul>
                <x-cart-icon></x-cart-icon>

                @if (auth()->guard('customer')->check())
                    <div class="dropdown">
                        <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" id="userDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::guard('customer')->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                            <li>
                                <form method="POST" action="{{ route('customer.logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a class="btn btn-outline-light me-2" href="{{ route('customer.login') }}">Login</a>
                    <a class="inline-block px-4 py-2 rounded bg-[#b5c63c] text-white hover:bg-[#a0b033] transition" href="{{ route('customer.register') }}">Register</a>
                @endif
            </div>
        </div>
    </nav>
</div>
