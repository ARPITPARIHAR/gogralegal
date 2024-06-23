<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">

        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu"></i>
            </a>
<<<<<<< HEAD
            <a href="{{ route('home') }}">
                <img class="img-fluid" src="{{businessSetting(1)->admin_logo}}" width="150" alt="Theme-Logo">
=======
            <a href="index-1.htm">
                <img class="img-fluid" src="{{ asset('backend/assets/images/logo.png') }}" alt="Theme-Logo">
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
            </a>
            <a class="mobile-options">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>

        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li class="header-search">
                    <div class="main-search morphsearch-search">
                        <div class="input-group">
                            <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()">
                        <i class="feather icon-maximize full-screen"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="header-notification">
                    <div class="dropdown-primary dropdown">
<<<<<<< HEAD
                        @php
                            $total_notifications=App\Models\Notification::where('view',0)->count();
                        @endphp
                        <div class="dropdown-toggle" @if($total_notifications>0) data-toggle="dropdown" @endif>
                            <i class="feather icon-bell"></i>
                            <span class="badge bg-c-pink">{{ $total_notifications }}</span>
=======
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-bell"></i>
                            <span class="badge bg-c-pink">5</span>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
                        </div>
                        <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <h6>Notifications</h6>
                                <label class="label label-danger">New</label>
                            </li>
<<<<<<< HEAD
                            @foreach (App\Models\Notification::where('view',0)->take(10)->latest()->get() as $notification)
=======
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
                            <li>
                                <div class="media">
                                    <img class="d-flex align-self-center img-radius" src="{{ asset('backend/assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
<<<<<<< HEAD
                                        <h5 class="notification-user">{{ $notification->user->name }}</h5>
                                        <p class="notification-msg">{{ $notification->title }}</p>
                                        <span class="notification-time">{{ date('d-m-Y h:iA',strtotime($notification->created_at)) }}</span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
=======
                                        <h5 class="notification-user">John Doe</h5>
                                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span class="notification-time">30 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="d-flex align-self-center img-radius" src="{{ asset('backend/assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="notification-user">Joseph William</h5>
                                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span class="notification-time">30 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="d-flex align-self-center img-radius" src="{{ asset('backend/assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="notification-user">Sara Soudein</h5>
                                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span class="notification-time">30 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-message-square"></i>
                            <span class="badge bg-c-green">3</span>
                        </div>
                    </div>
                </li>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('backend/assets/images/avatar-4.jpg') }}" class="img-radius" alt="User-Profile-Image">
<<<<<<< HEAD
                            <span>{{ auth()->user()->name ?? 'Admin' }}</span>
=======
                            <span>John Doe</span>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
<<<<<<< HEAD
                                <a href="{{ route('admin.business-setting') }}">
=======
                                <a href="#!">
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
                                    <i class="feather icon-settings"></i> Settings
                                </a>
                            </li>
                            <li>
<<<<<<< HEAD
                                <a href="{{ route('admin.profile') }}">
=======
                                <a href="#">
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
                                    <i class="feather icon-user"></i> Profile
                                </a>
                            </li>
                            <li>
<<<<<<< HEAD
=======
                                <a href="#">
                                    <i class="feather icon-mail"></i> My Messages
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="feather icon-lock"></i> Lock Screen
                                </a>
                            </li>
                            <li>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
                                <a href="{{ route('logout') }}">
                                    <i class="feather icon-log-out"></i> Logout
                                </a>
                            </li>
                        </ul>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
