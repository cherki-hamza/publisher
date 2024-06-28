<nav style="background-color: #4B49AC;" class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{-- {{ route('admin') }} --}}" class="nav-link">PR OverTheTop</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" id="btntheme" role="button">
                <i id="icontheme" class="fas fa-sun"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('index') }}" target="_bkank" role="button">
                <i class="fas fa-globe"></i>
            </a>
        </li>
        <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#"

                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <div class="avatar avatar-xl">
                    <img style="width: 35px" class="rounded-circle shadow border-primary mr-3"
                        src="{{ (auth()->check()) ? auth()->user()->GetPicture() : ''  }}"
                        alt="{{ (auth()->check()) ? auth()->user()->name : '' }}">
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right my-4 py-0" aria-labelledby="navbarDropdownUser" style="width: 193px;left: inherit;right: 39px;">
                <div class="bg-white rounded-soft py-2">
                    @if ( (auth()->check()))

                   @if ( auth()->user()->role == 'super-admin')
                    <a class="dropdown-item has-icon loading-trigger" href="">
                        <i class="fa fa-cog mr-2"></i>Application Settings
                     </a>
                     @endif
                     @endif

                    <a class="dropdown-item has-icon loading-trigger" href="{{ route('user_profile') }}"><svg style="width: 25px"
                            class="svg-inline--fa fa-user-cog fa-w-20 mr-2" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="user-cog" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M610.5 373.3c2.6-14.1 2.6-28.5 0-42.6l25.8-14.9c3-1.7 4.3-5.2 3.3-8.5-6.7-21.6-18.2-41.2-33.2-57.4-2.3-2.5-6-3.1-9-1.4l-25.8 14.9c-10.9-9.3-23.4-16.5-36.9-21.3v-29.8c0-3.4-2.4-6.4-5.7-7.1-22.3-5-45-4.8-66.2 0-3.3.7-5.7 3.7-5.7 7.1v29.8c-13.5 4.8-26 12-36.9 21.3l-25.8-14.9c-2.9-1.7-6.7-1.1-9 1.4-15 16.2-26.5 35.8-33.2 57.4-1 3.3.4 6.8 3.3 8.5l25.8 14.9c-2.6 14.1-2.6 28.5 0 42.6l-25.8 14.9c-3 1.7-4.3 5.2-3.3 8.5 6.7 21.6 18.2 41.1 33.2 57.4 2.3 2.5 6 3.1 9 1.4l25.8-14.9c10.9 9.3 23.4 16.5 36.9 21.3v29.8c0 3.4 2.4 6.4 5.7 7.1 22.3 5 45 4.8 66.2 0 3.3-.7 5.7-3.7 5.7-7.1v-29.8c13.5-4.8 26-12 36.9-21.3l25.8 14.9c2.9 1.7 6.7 1.1 9-1.4 15-16.2 26.5-35.8 33.2-57.4 1-3.3-.4-6.8-3.3-8.5l-25.8-14.9zM496 400.5c-26.8 0-48.5-21.8-48.5-48.5s21.8-48.5 48.5-48.5 48.5 21.8 48.5 48.5-21.7 48.5-48.5 48.5zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm201.2 226.5c-2.3-1.2-4.6-2.6-6.8-3.9l-7.9 4.6c-6 3.4-12.8 5.3-19.6 5.3-10.9 0-21.4-4.6-28.9-12.6-18.3-19.8-32.3-43.9-40.2-69.6-5.5-17.7 1.9-36.4 17.9-45.7l7.9-4.6c-.1-2.6-.1-5.2 0-7.8l-7.9-4.6c-16-9.2-23.4-28-17.9-45.7.9-2.9 2.2-5.8 3.2-8.7-3.8-.3-7.5-1.2-11.4-1.2h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c10.1 0 19.5-3.2 27.2-8.5-1.2-3.8-2-7.7-2-11.8v-9.2z">
                            </path>
                        </svg><!-- <i class="fas fa-user-cog mr-2"></i> Font Awesome fontawesome.com -->Profile
                    </a>

                    <a class="dropdown-item has-icon loading-trigger" href="{{ route('settings') }}">
                        @if ( (auth()->check()))
                        <i class="fa fa-cog mr-2"></i>{{ (auth()->user()->role == 'super-admin')? 'Super-Admin' : 'User' }} Settings
                        @endif
                     </a>

                    <a class="dropdown-item has-icon loading-trigger" href="{{ route('publisher_balance') }}"><svg style="width: 25px"
                            class="svg-inline--fa fa-wallet fa-w-16 mr-2" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="wallet" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M461.2 128H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h384c8.84 0 16-7.16 16-16 0-26.51-21.49-48-48-48H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h397.2c28.02 0 50.8-21.53 50.8-48V176c0-26.47-22.78-48-50.8-48zM416 336c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z">
                            </path>
                        </svg><!-- <i class="fas fa-wallet mr-2"></i> Font Awesome fontawesome.com -->Balance</a>

                        {{-- @if (auth()->user()->role == 'client')
                        <form action="{{ route('switch_to_publicher_or_client') }} " method="POST">
                            @csrf
                            @method('PUT')
                            <button class="dropdown-item has-icon shadow-none loading-trigger" style="outline: none !important; box-shadow: none;width:62px;">
                                <i class="mr-2" data-fa-i2svg="">
                                <svg style="10px" class="svg-inline--fa fa-toggle-on" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="toggle-on" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M384 64H192C86 64 0 150 0 256s86 192 192 192h192c106 0 192-86 192-192S490 64 384 64zm0 320c-70.8 0-128-57.3-128-128 0-70.8 57.3-128 128-128 70.8 0 128 57.3 128 128 0 70.8-57.3 128-128 128z"></path>
                                </svg></i>Switch To Buyer
                            </button>
                        </form>
                        @endif --}}


                    <div class="dropdown-divider"></div>

                    @if ( (auth()->check()))
                    @if (auth()->user()->role == 'super-admin')
                    <a class="dropdown-item has-icon" href="">
                       <svg style="width: 25px"
                            class="svg-inline--fa fa-comment-dots fa-w-16 mr-2" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="comment-dots" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32zM128 272c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z">
                            </path>
                        </svg><!-- <i class="fas fa-comment-dots mr-2"></i> Font Awesome fontawesome.com -->Messages</a>
                     @endif
                     @endif


                    <a style="width: 120px;height: 35px;" class="dropdown-item has-icon text-danger loading-triggerr" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <svg style="width: 25px" class="svg-inline--fa fa-sign-out-alt fa-w-16 mr-2" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="sign-out-alt" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z">
                                </path>
                            </svg></i> {{ __('Logout') }} &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                            </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>


                </div>
            </div>
        </li>
        {{-- <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="{{ auth()->user()->GetPicture() }}" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li class="user-header">
                    <img src="{{ auth()->user()->GetPicture() }}" class="img-circle elevation-2" alt="User Image">
                    <p>
                        {{ Auth::user()->name }} - {{ implode(",", Auth::user()->getRoleNames()->toArray()) }}
                        <small>Last updated {{ date('d-m-Y H:i:s', strtotime(Auth::user()->updated_at)) }}</small>
                    </p>
                </li>
                <li class="user-footer">
                    <a href="{{ route('profiles.index') }}" class="btn btn-default">Profile</a>
                    <a href="#" data-toggle="modal" data-target="#modal-logout" data-backdrop="static" data-keyboard="false" class="btn btn-danger float-right">Logout</a>
                </li>
            </ul>
        </li> --}}
    </ul>
</nav>
