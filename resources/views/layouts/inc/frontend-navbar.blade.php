<div class="global-navbar">
    <div class="container">
        <div class="row m-1">
            <div class="col-md-3 d-none d-sm-none d-md-inline">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/W3Schools_logo.png"  class="w-100" alt="logo">
            </div>

            <div class="col-md-9">
                <div class="border text-center p-2">
                    <h5>Advertisa Here</h5>
                </div>
            </div>
        </div>
    </div>

</div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="container"> 

            <a href="" class="navbar-brand d-inline d-sm-inline d-md-none">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/W3Schools_logo.png"  style="width: 140px;" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">       
                    <a class="nav-link" aria-current="page" href="{{ url('/color') }}">Home</a>
                    </li>
                    
                    @php
                        $categories = App\Models\Category::where('navbar_status', '0')->where('status', '0')->get();
                    @endphp

                    @foreach ($categories as $cateitem)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('tutorial/' . $cateitem->slug) }}">{{ $cateitem->name }}</a>
                        </li>
                    @endforeach

                    <li>
                    <a class="nav-link btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>   

                </ul>
            </div>
    </div>
    </nav>
</div>

