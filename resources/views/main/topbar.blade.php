<nav class="navbar navbar-top navbar-expand" id="navbarDefault" style="display:none;">
    <div class="collapse navbar-collapse justify-content-between">
    <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="{{ route('dashboard') }}">
        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center"><img src="{{asset('assets')}}/img/icons/logo.png" alt="phoenix" width="27" />
            <p class="logo-text ms-2 d-none d-sm-block">Tqnia</p>
            </div>
        </div>
        </a>
    </div>
    <div class="search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm rounded-pill search-input fuzzy-search" id="searchBox" type="search" placeholder="Search..." aria-label="Search" />
        <span class="fas fa-search search-box-icon"></span>
        </form>
        <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button></div>
        <div class="dropdown-menu border font-base start-0 py-0 overflow-hidden w-100">
        <div class="scrollbar list pb-3" style="max-height: 30rem;">
            <h6 class="dropdown-header text-1000 fs--2 py-2">4 <span class="text-500">results</span></h6>

            <hr class="text-200 my-0" />
            <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Quick Links</h6><a class="dropdown-item" href="{{ route('topups.index') }}">
            <div class="d-flex align-items-center">
                <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Check</div>
            </div>
            </a>
            {{-- <a class="dropdown-item" href="{{ route('reference.index') }}">
            <div class="d-flex align-items-center">
                <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> References </div>
            </div>
            </a> --}}
            {{-- <a class="dropdown-item" href="{{ route('related.index') }}">
                <div class="d-flex align-items-center">
                    <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Related </div>
                </div>
                </a> --}}
                {{-- <a class="dropdown-item" href="{{ route('merge.index') }}">
                    <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Merge </div>
                    </div>
                    </a> --}}

        </div>
        <div class="text-center">
            <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
        </div>
        </div>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
        <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="sun" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span></a>
        <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
            <div class="card position-relative border-0">
            <div class="card-header p-2">
                <div class="d-flex justify-content-between">
                <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                </div>
            </div>
            <div class="card-body p-0"></div>
            <div class="scrollbar-overlay">
                <div class="overflow-auto" style="height: 27rem;">
                <div class="border-300">
                    <div class="p-3 border-300 notification-card position-relative read border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{asset('assets')}}/img/team/avatar.png" alt="" /></div>
                        <div class="me-3 flex-1">
                            <h4 class="fs--1 text-black">Jessie Samson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>💬</span>Mentioned you in a comment.<span class="ms-2 text-500 fw-bold fs--2">10m</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                        </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                    </div>
                    </div>
                    <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3">
                            <div class="avatar-name rounded-circle"><span>J</span></div>
                        </div>
                        <div class="me-3 flex-1">
                            <h4 class="fs--1 text-black">Jane Foster</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>📅</span>Created an event.<span class="ms-2 text-500 fw-bold fs--2">20m</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                        </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                    </div>
                    </div>
                    <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="{{asset('assets')}}/img/team/avatar.png" alt="" /></div>
                        <div class="me-3 flex-1">
                            <h4 class="fs--1 text-black">Jessie Samson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>👍</span>Liked your comment.<span class="ms-2 text-500 fw-bold fs--2">1h</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                        </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="border-300">
                    <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{asset('assets')}}/img/team/avatar.png" alt="" /></div>
                        <div class="me-3 flex-1">
                            <h4 class="fs--1 text-black">Kiera Anderson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                        </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                    </div>
                    </div>
                    <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{asset('assets')}}/img/team/avatar.png" alt="" /></div>
                        <div class="me-3 flex-1">
                            <h4 class="fs--1 text-black">Herman Carter</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>👤</span>Tagged you in a comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                        </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                    </div>
                    </div>
                    <div class="p-3 border-300 notification-card position-relative read ">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{asset('assets')}}/img/team/avatar.png" alt="" /></div>
                        <div class="me-3 flex-1">
                            <h4 class="fs--1 text-black">Benjamin Button</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>👍</span>Liked your comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                        </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-footer p-0 border-top border-0">
                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="notifications.html">Notification history</a></div>
            </div>
            </div>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
            </svg></a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
            <div class="card bg-white position-relative border-0">
            <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                <div class="row text-center align-items-center gx-0 gy-0">
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets')}}/img/nav-icons/behance.png" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                    </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets')}}/img/nav-icons/google-cloud.png" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                    </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets')}}/img/nav-icons/slack.png" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                    </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets')}}/img/nav-icons/gitlab.png" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                    </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets')}}/img/nav-icons/bitbucket.png" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                    </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets')}}/img/nav-icons/google-drive.png" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                    </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets')}}/img/nav-icons/trello.png" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                    </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets')}}/img/nav-icons/figma.png" alt="" width="20" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                    </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets')}}/img/nav-icons/twitter.png" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                    </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets')}}/img/nav-icons/pinterest.png" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                    </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets')}}/img/nav-icons/ln.png" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                    </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets')}}/img/nav-icons/google-maps.png" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                    </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets')}}/img/nav-icons/google-photos.png" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                    </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets')}}/img/nav-icons/spotify.png" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                    </a></div>
                </div>
            </div>
            </div>
        </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-l ">
            <img class="rounded-circle " src="{{asset('assets')}}/img/team/avatar.png" alt="" />
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
            <div class="card position-relative border-0">
            <div class="card-body p-0">
                <div class="text-center pt-4 pb-3">
                <div class="avatar avatar-xl ">
                    <img class="rounded-circle " src="{{asset('assets')}}/img/team/avatar.png" alt="" />
                </div>
                <h6 class="mt-2 text-black">{{ Auth::user()->name }}</h6>
                </div>
                {{-- <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div> --}}
            </div>
            {{-- <div class="overflow-auto scrollbar" style="height: 10rem;">
                <ul class="nav d-flex flex-column mb-2 pb-1">
                <li class="nav-item"><a class="nav-link px-3" href="profile.html"> <span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                </ul>
            </div> --}}
            <div class="card-footer p-0 border-top">
                {{-- <ul class="nav d-flex flex-column my-3">
                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                </ul> --}}
                <hr />
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="px-3">

                    <button type="submit" class="btn btn-phoenix-secondary d-flex flex-center w-100">
                        {{ __('Log Out') }}
                    </button>
                    </div>
                </form>
                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
            </div>
            </div>
        </div>
        </li>
    </ul>
    </div>
</nav>
