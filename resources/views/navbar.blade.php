<nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color:#353531;">

    <h2 class="p-2 " style="font-size:23px; font-weight:400; color: #ec4e20;    ">HUIT MAKEUP</h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-end justify-content-end">
            <li class="nav-item">
                <a class="nav-link  {{ 'dashboard' == request()->path() ? 'active' : '' }}"
                    href="{{ '/dashboard' }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{ 'recent-post' == request()->path() ? 'active' : '' }}"
                    href="{{ '/recent-post' }}">All Posts</a>
            </li>

            @role('admin')
                <span class="nav-line"></span>
                {{-- <li class="nav-item">
                    <a class="nav-link  {{ 'contact' == request()->path() ? 'active' : '' }}"
                        href="{{ '/contact' }}">Contacts</a>
                </li> --}}
                <span class="nav-line"></span>

                <span class="nav-line"></span>

                <div class="dropdown">
                    <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton" id="select3">
                      
                        <li class="nav-item">
                            <a style="margin-left: 20px"
                                class="nav-link {{ 'log' == request()->path() ? 'active' : '' }}"
                                href="{{ '/log' }}">Logs</a>
                        </li>
                        <span class="nav-line"></span>
                        <li class="nav-item">
                            <a style="margin-left: 20px"
                                class="nav-link {{ 'admin/roles' == request()->path() ? 'active' : '' }}"
                                href="{{ route('admin.roles.index') }}">Roles</a>
                        </li>
                        <span class="nav-line"></span>
                        <li class="nav-item">
                            <a style="margin-left: 20px"
                                class="nav-link {{ 'admin/permissions' == request()->path() ? 'active' : '' }}"
                                href="{{ route('admin.permissions.index') }}">Permissions</a>
                        </li>
                        <li class="nav-item">
                            <a style="margin-left: 20px"
                                class="nav-link {{ 'admin/users' == request()->path() ? 'active' : '' }}"
                                href="{{ route('admin.users.index') }}">Users</a>
                        </li>
                        <li class="nav-item">
                            <a style="margin-left: 20px"
                                class="nav-link {{ 'admin/users' == request()->path() ? 'active' : '' }}"
                                href="{{ '/my-post' }}">My Posts</a>
                        </li>

                    </div>

                </div>
            @endrole
            <li class="nav-item">
                <a class="nav-link" href="{{ '/logout' }}">Sign out</a>
            </li>
    </div>
</nav>

<style>
    .navbar-collapse .navbar-nav .nav-item .nav-link {
        color: #ec4e20;
    }
    .dropdown a {
        
        color   : #ec4e20;
     }
    #profile-name a {
        text-decoration: none;
        color: rgb(225, 222, 222);
    }

    #profile-name a:hover {
        background-color: rgba(255, 255, 255, 0);

    }

    .navbar-nav a {
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 5px;
        width: 120px;
        margin: 5px;
        text-align: center;
    }

    #select {
        color: dimgray;
    }


    #select2 li:hover {
        background-color: black;
    }
</style>
