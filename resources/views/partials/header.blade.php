<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('product.index')  }}">Shopping-Cart</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class='nav-link' href="{{route('product.shoppingCart')}}">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Shopping cart
                    <span class="badge badge-info">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    {{ Auth::check() ? Auth::user()->email : 'User management' }}
                    <span class="caret"></span>
                </a>

                <div class="dropdown-menu" aria-labelledby="themes">
                    @if(Auth::check())
                        <a class="dropdown-item"  href="/user/auth/profile">
                            Personal
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('user.logout')  }}">
                            Logout
                        </a>
                    @else
                        <a class="dropdown-item" href="{{ route('user.signup')  }}">
                            Sign up
                        </a>
                        <a class="dropdown-item" href="{{ route('user.signin')  }}">
                            Sign in
                        </a>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</nav>
