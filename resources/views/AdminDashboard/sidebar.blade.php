<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper">
            <a href="{{ route('dashboard') }}">
                <img class="img-fluid for-light" src="{{ asset('webceylon.png') }}" alt="webceylon" style="height:50px">
                <img class="img-fluid for-dark" src="{{ asset('webceylon.png') }}" alt="webceylon" style="height:50px">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"></i></div>
        </div>

        <div class="logo-icon-wrapper">
            <a href="{{ route('dashboard') }}">
                <img class="img-fluid" src="{{ asset('backend/assets/images/logo/logo-icon.png') }}" alt="">
            </a>
        </div>

        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="{{ route('dashboard') }}">
                            <img class="img-fluid" src="{{ asset('backend/assets/images/logo/logo-icon.png') }}" alt="">
                        </a>
                        <div class="mobile-back text-end">
                            <span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>


                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="{{ route('dashboard') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('backend/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('backend/assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg>
                            <span class="lan-3">Dashboard</span>
                        </a>
                    </li>


                    <li class="sidebar-list">
                           <a class="sidebar-link sidebar-title" href="#">
                                <svg class="stroke-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                </svg>
                                <span>Projects</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ route('projects.index') }}">Project List</a></li>
                                <li><a href="{{ route('projects.create') }}">Add Projects</a></li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                          <a class="sidebar-link sidebar-title" href="#">
                                <svg class="stroke-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M4 4h16v16H4z" />
                                    <path d="M8 8h8M8 12h6M8 16h4" /> 
                                </svg>
                                <span>Blogs</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ route('blogs.index') }}">Blog List</a></li>
                                <li><a href="{{ route('blogs.create') }}">Add Blogs</a></li>
                            </ul>
                        </li>

                         <li class="sidebar-list">
                           <a class="sidebar-link sidebar-title" href="#">
                                <svg class="stroke-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
                                    <path d="M16 3h-8v4h8V3z" /> 
                                </svg>
                                <span>Careers</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ route('careers.index') }}">Job List</a></li>
                                <li><a href="{{ route('careers.create') }}">Add Job Opening</a></li>
                            </ul>
                        </li>

                         <li class="sidebar-list">
                          <a class="sidebar-link sidebar-title" href="#">
                                <svg class="stroke-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M22 4H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zM2 6h20v2l-10 6-10-6V6z" />
                                </svg>
                                <span>Inquiries</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ route('inquiries.index') }}">Message List</a></li>
                            </ul>
                        </li>


                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->

<style>
    .logo-wrapper img {
        height: 70px; /* Adjust height as needed */
        width: auto; /* Maintain aspect ratio */
        max-width: 150px; /* Set max width if necessary */
    }

    .logo-wrapper img.for-dark {
        height: 70px; /* Ensure dark mode logo has the same height */
        width: auto;
        max-width: 150px;
    }
</style>
