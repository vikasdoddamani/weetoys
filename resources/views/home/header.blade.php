
<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container" >
      <a class="navbar-brand" href="{{url('/')}}">
        <span>
          WeeToys
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""></span>
      </button>

      <div class="collapse navbar-collapse"  id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('shop?category=vehicle') }}">Vehicle</a>
                <a class="dropdown-item" href="{{ url('shop?category=kitchen-appliances') }}">Kitchen Appliances</a>
                <a class="dropdown-item" href="{{ url('shop?category=home-appliances') }}">Home Appliances</a>
                <a class="dropdown-item" href="{{ url('shop?category=accessories') }}">Accessories</a>
            </div>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                By Age
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="shop.html?category=vehicle">2 - 3 year</a>
                <a class="dropdown-item" href="shop.html?category=kitchen-appliances">3 - 5 year</a>
                <a class="dropdown-item" href="shop.html?category=home-appliances">5 - 6 year</a>
                <a class="dropdown-item" href="shop.html?category=accessories">6 - 10 year</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Event's Toys
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="shop.html?category=vehicle">Jeep</a>
                <a class="dropdown-item" href="shop.html?category=kitchen-appliances">Tractor</a>
                <a class="dropdown-item" href="shop.html?category=home-appliances">Ace</a>
                <a class="dropdown-item" href="shop.html?category=accessories">Formula - one</a>
            </div>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="testimonial.html">
                Most Popular
            </a>
          </li>

        </ul>
        <div class="user_option">

            @if (Route::has('login'))

            @auth

            <a  href="{{url('mycart')}}">
                <i class="fa fa-shopping-bag" style="color: white;" aria-hidden="true">   {{ $count ?? 0 }}</i></a>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link" style="color: rgb(2, 2, 2);" href="{{asset('usermyorder')}}">My order</a>
                        <form style="padding:10px;" method="POST" action="{{ route('logout') }}">
                            @csrf

                            <input class="btn btn-success" type="submit" value="Logout">
                        </form>
                    </div>
                </li>

            </a>
              {{-- <form class="form-inline ">
                <button class="btn nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form> --}}




            @else
          <a class="icons" href="{{url('/login')}}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>
              Login
            </span>
          </a>

          <a class="icons" href="{{url('/register')}}">
            <i class="fa fa-vcard" aria-hidden="true"></i>
            <span>
              Register
            </span>
          </a>
          @endauth
          @endif

</div>



        </div>
      </div>
    </nav>
  </header>
