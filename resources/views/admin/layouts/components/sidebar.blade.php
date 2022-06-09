<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('atlantis/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span class="text-capitalize">
                            {{ Auth::user()->name }}
                            <span class="user-level">Active</span>
							<span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="{{ url('/profile') }}">
                                    <span class="link-collapse">Account Setting</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <form action="{{ url('logout') }}" id="logout-form" method="POST">
                                        @csrf
                                    </form>
                                    <span class="link-collapse">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    {{-- <h4 class="text-section">MENU NAVIGATION</h4> --}}
                </li>
                <li class="nav-item {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/admin/dashboard') }}">
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->segment(2) == 'products') ? 'active' : '' }}">
                    <a href="{{ url('/admin/products') }}">
                        <p>Products</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>