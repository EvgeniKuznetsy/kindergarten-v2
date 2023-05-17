
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-header">Admin panel</li>
        <li class="nav-item">
            <a href="{{route('admin')}}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Главная
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.news.index')}}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Новости
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.parents.index')}}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Для родителей
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.educators_groups.index')}}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Группы
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li><li class="nav-item">
            <a href="{{route('admin.title_photo_gallery.index')}}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Галерея
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('main.index')}}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Главная(Пользователя)
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li>

    </ul>
</nav>
