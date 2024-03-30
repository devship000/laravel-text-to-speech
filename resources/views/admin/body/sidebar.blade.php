<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="dashboard.html" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Users</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Users</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.type') }}" class="nav-link">All Users</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.type') }}" class="nav-link">Add Users</a>
                        </li>


                    </ul>
                </div>
            </li>



<li class="nav-item nav-category">Commission</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false"
                    aria-controls="uiComponents">
                    <i class="link-icon" data-feather="dollar-sign"></i>
                    <span class="link-title">Commission</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="uiComponents">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/ui-components/accordion.html" class="nav-link">Commission Add</a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/ui-components/accordion.html" class="nav-link">Commission All</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#property" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Quote Profit </span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="property">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="" class="nav-link">All Property</a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">Add Property</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item nav-category">Announcement</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false"
                    aria-controls="uiComponents">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Announcement</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="uiComponents">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/ui-components/accordion.html" class="nav-link">Accordion</a>
                        </li>
                    </ul>
                </div>
            </li>
           

<li class="nav-item nav-category">Setting</li>
            <li class="nav-item">
                <a href="{{ route('site.settings.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Setting</span>
                </a>
            </li>




            <li class="nav-item nav-category">Logout</li>
            <li class="nav-item">
                <a href="{{ route('admin.logout') }}" class="nav-link">
                    <i class="link-icon" data-feather="log-out"></i>
                    <span class="link-title">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
