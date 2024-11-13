<nav class="navbar navbar-expand-lg navbar-color">
    <div class="container-fluid">
        @php
            $siteSettings = DB::table('site_settings')->first();
        @endphp
      <a class="navbar-brand text_color" href="{{ route('home') }}">
        <img src="{{ asset($siteSettings->logo) }}" alt="" style="height: 45px; width:45px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
          <li class="nav-item">
            <a class="nav-link active text_color" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link active text_color" href="#">About</a>
          </li> --}}
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle text_color" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            @php
                $products = DB::table('products')->where('status',1)->get();
            @endphp
            <ul class="dropdown-menu">
                @foreach ($products as $product)

                <li><a class="dropdown-item" href="https://businesssolution.com.bd/software-solution/product-details/business-accounting-management-software">{{ $product->name }}</a></li>

                @endforeach

            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active text_color" href="{{ route('blog') }}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text_color" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
        <form action="{{ route('blog.search') }}" method="GET" class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
