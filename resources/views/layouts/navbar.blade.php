@if(Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><img
                            src="https://www.pngkey.com/png/detail/107-1073573_maze-bank-gta-v-maze-bank-logo.png"
                            alt="Maze Bank" style="height: 50px"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('about') }}">Schemes</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('form') }}">Forms</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('services') }}">Services</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('dashboard') }}">
                                    <img src="{{asset('/storage/' . Auth::user()->account->image_path)}}" alt="profile image"
                                         style="height:30px;
                                                border-radius: 50%;
                                                margin-left: 50px">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        @else
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><img
                            src="https://www.pngkey.com/png/detail/107-1073573_maze-bank-gta-v-maze-bank-logo.png"
                            alt="Maze Bank" style="height: 50px"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('about') }}">Schemes</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('form') }}">Forms</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('services') }}">Services</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('login') }}">Login</a>
                            </li>
                            @if(Route::has('register'))
                                <li class="nav-item"><a class="nav-link"
                                    href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        @endauth
    </div>
@endif


{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="index.html"><img
                src="https://www.pngkey.com/png/detail/107-1073573_maze-bank-gta-v-maze-bank-logo.png"
                alt="Maze Bank - Gta V Maze Bank Logo@pngkey.com" style="height: 50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('form') }}">Forms</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>
                {{-- <li class="nav-item"><a class="nav-link" href="{{route('user-profile') }}">Profile</a>
                </li>


            </ul>
        </div>
    </div>
</nav> --}}
