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
                <li> <a href="{{route('castle.dashboard')}}"><i class="bi bi-circle"></i>İstatistik</a>
                </li>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Admin Yönetimi</div>
            </a>
            <ul>
                <li> <a href="{{route('castle.admin.index')}}"><i class="bi bi-circle"></i>Admin Kullanıcı Listesi</a>
                </li>
                <li> <a href="{{route('castle.admin.add')}}"><i class="bi bi-circle"></i>Admin Kullanıcı Ekle</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Dil Yönetimi</div>
            </a>
            <ul>
                <li> <a href="{{route('castle.language.index')}}"><i class="bi bi-circle"></i>Dil Listesi</a>
                </li>
                <li> <a href="{{route('castle.language.add')}}"><i class="bi bi-circle"></i>Dil Ekle</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Genel Ayarlar</div>
            </a>
            <ul>
                <li> <a href="{{route('castle.basicinfo')}}"><i class="bi bi-circle"></i>Site Bilgileri</a>
                </li>
                <li> <a href="{{route('castle.social.index')}}"><i class="bi bi-circle"></i>Sosyal Medya</a>
                </li>
                <li> <a href="{{route('castle.flink.index')}}"><i class="bi bi-circle"></i>Footer Linkler</a>
                </li>
                <li> <a href="#"><i class="bi bi-circle"></i>Bakım Modu</a>
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
                <li> <a href="{{route('castle.menu.index')}}"><i class="bi bi-circle"></i>Menüler</a>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Blog</div>
            </a>
            <ul>
                <li> <a href="{{route('castle.blog_category.index')}}"><i class="bi bi-circle"></i>Kategoriler</a>
                </li>
                <li> <a href="{{route('castle.blog.index')}}"><i class="bi bi-circle"></i>Yazılar</a>
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
                <li> <a href="{{route('castle.service_category.index')}}"><i class="bi bi-circle"></i>Kategoriler</a>
                </li>
                <li> <a href="{{route('castle.service.index')}}"><i class="bi bi-circle"></i>Servisler</a>
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
                <li> <a href="{{route('castle.slider.index')}}"><i class="bi bi-circle"></i>Slider Listesi</a>
                </li>
                <li> <a href="{{route('castle.slider.add')}}"><i class="bi bi-circle"></i>Slider Ekle</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Sayfalar</div>
            </a>
            <ul>
                <li> <a href="{{route('castle.page.index')}}"><i class="bi bi-circle"></i>Sayfa Listesi</a>
                </li>
                <li> <a href="{{route('castle.page.add')}}"><i class="bi bi-circle"></i>Sayfa Ekle</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Takımım</div>
            </a>
            <ul>
                <li> <a href="{{route('castle.team.index')}}"><i class="bi bi-circle"></i>Takım Listesi</a>
                </li>
                <li> <a href="{{route('castle.team.add')}}"><i class="bi bi-circle"></i>Takım Ekle</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Projeler</div>
            </a>
            <ul>
                <li> <a href="{{route('castle.project.index')}}"><i class="bi bi-circle"></i>Proje Listesi</a>
                </li>
                <li> <a href="{{route('castle.project.add')}}"><i class="bi bi-circle"></i>Proje Ekle</a>
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
                <li> <a href="{{route('castle.partner.index')}}"><i class="bi bi-circle"></i>Partner Listesi</a>
                </li>
                <li> <a href="{{route('castle.partner.add')}}"><i class="bi bi-circle"></i>Partner Ekle</a>
                </li>
            </ul>
        </li>

    </ul>
    <!--end navigation-->
</aside>
