<!-- Sidebar -->
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{asset('img/profil0.png')}}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <h4>{{ Auth::user()->name }}</h4>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a href="{{url('/home')}}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">List</h4>
                </li>
                <li class="nav-item">
                    {{-- <a href="{{url('/list')}}"> --}}
                    <a href="{{url('/characters')}}">
                        <i class="fas fa-universal-access"></i>
                        <p>Characters</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/class')}}">
                        <i class="fas fa-flag"></i>
                        <p>Class</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Developer</h4>
                </li>
                <li class="nav-item">
                    <a href="{{url('/about')}}">
                        <i class="fas fa-users"></i>
                        <p>About me</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="mailto:skullhell3@gmail.com?subject=CharPlan&body=" rel="EMAIL" target="_blank">
                        <i class="fas fa-envelope"></i>
                        <p>Suggestion?</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="">
                        <i class="fas fa-plus-circle"></i>
                        <p>Add Me</p>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->