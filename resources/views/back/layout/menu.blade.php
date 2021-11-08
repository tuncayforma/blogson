<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <h1>Panel</h1>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item active ">
                        <a href="" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>Makaleler</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{route('admin.article.index')}}">Makaleler</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('admin.article.create')}}">Makale Ekle</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{route('admin.category.index')}}" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Kategoriler</span>
                        </a>
                    </li>



                    <li class="sidebar-item  ">
                        <a href="{{route('admin.config.index')}}" class='sidebar-link'>
                            <i class="bi bi-grid-1x2-fill"></i>
                            <span>Site Ayarları</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{route('admin.contact.index')}}" class='sidebar-link'>
                            <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                            <span>İletişim</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{route('admin.logout')}}" class='sidebar-link'>
                            <i class="bi bi-cloud-arrow-up-fill"></i>
                            <span>Çıkış Yap</span>
                        </a>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>@yield('back_title')</h3>
        </div>
