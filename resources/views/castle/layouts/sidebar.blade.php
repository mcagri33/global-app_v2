<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('assets/castle/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Global</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Panel</div>
            </a>
            <ul>
                <li> <a href="{{route('castle.dashboard')}}"><i class="bi bi-circle"></i>Dashboard</a>
                </li>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">User Management</div>
            </a>
            <ul>
                <li> <a href="{{route('castle.user.index')}}"><i class="bi bi-circle"></i>Users</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Language Management</div>
            </a>
            <ul>
                <li> <a href="{{route('castle.language.index')}}"><i class="bi bi-circle"></i>Language List</a>
                </li>
                <li> <a href="{{route('castle.language.add')}}"><i class="bi bi-circle"></i>Language Add</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">General Settings</div>
            </a>
            <ul>
                <li> <a href="{{route('castle.setting.info')}}"><i class="bi bi-circle"></i>Web Site İnfo</a>
                </li>
                <li> <a href="{{route('castle.setting.social')}}"><i class="bi bi-circle"></i>Social Media</a>
                </li>
                <li> <a href="{{route('castle.setting.smtp')}}"><i class="bi bi-circle"></i>Smtp Settings</a>
                </li>
                <li> <a href="#"><i class="bi bi-circle"></i>Maniantece Mode</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Modüller</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Menü Yönetimi</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bi bi-circle"></i>Menus</a>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Blog</div>
            </a>
            <ul>
                <li> <a href="{{route('castle.bcategory.index')}}"><i class="bi bi-circle"></i>Categories</a>
                </li>
                <li> <a href="{{route('castle.bpost.index')}}"><i class="bi bi-circle"></i>Posts</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Servisler</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bi bi-circle"></i>Categories</a>
                </li>
                <li> <a href="#"><i class="bi bi-circle"></i>Services</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Slider</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bi bi-circle"></i>Slider List</a>
                </li>
                <li> <a href="#"><i class="bi bi-circle"></i>Slider Add</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Pages</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bi bi-circle"></i>Page List</a>
                </li>
                <li> <a href="#"><i class="bi bi-circle"></i>Page Add</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">My Team</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bi bi-circle"></i>Team List</a>
                </li>
                <li> <a href="#"><i class="bi bi-circle"></i>Team Add</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Projects</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bi bi-circle"></i>Project List</a>
                </li>
                <li> <a href="#"><i class="bi bi-circle"></i>Project Add</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Partner</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bi bi-circle"></i>Partner List</a>
                </li>
                <li> <a href="#"><i class="bi bi-circle"></i>Partner Add</a>
                </li>
            </ul>
        </li>

    </ul>
    <!--end navigation-->
</aside>
