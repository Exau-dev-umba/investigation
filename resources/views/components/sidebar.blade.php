<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item nav-item menu-is-opening menu-open">
            <a href="{{ route('admin.dashboard') }}"
                class="nav-link {{ Route::is('admin.dashboard') ? 'active bg-orange text-white' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</i></p>
            </a>
        </li>
        @role('admin')
        <!--li class="nav-item">
            <a href="{{ route('admin.user.index') }}"
                class="nav-link {{ Route::is('admin.user.index') ? 'active bg-orange text-white' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>Users
                    <span class="badge bg-orange right">{{ $userCount }}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.role.index') }}"
                class="nav-link {{ Route::is('admin.role.index') ? 'active bg-orange text-white' : '' }}">
                <i class="nav-icon fas fa-user-tag"></i>
                <p>Role
                    <span class="badge bg-orange right">{{ $RoleCount }}</span>
                </p>
            </a>
        </li-->

        <li class="nav-item">
            <a href="{{ route('recommandation.index') }}"
                class="nav-link {{ Route::is('recommandation.index') ? 'active bg-orange text-white' : '' }}">
                <i class="nav-icon fa fa-check-circle"></i>
                <p>Recommandations
                    <span class="badge bg-success text-white right">{{ $recommandationCount }}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.user.index') }}"
                class="nav-link {{ Route::is('admin.user.index') ? 'active bg-orange text-white' : '' }}">
                <i class="nav-icon fa fa-exclamation-circle"></i>
                <p>Sanctions
                    <span class="badge bg-warning text-white right">{{ $sanctionCount }}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.user.index') }}"
                class="nav-link {{ Route::is('admin.user.index') ? 'active bg-orange text-white' : '' }}">
                <i class="nav-icon fa fa-bell"></i>
                <p>Plaintes
                    <span class="badge bg-danger right">{{ $plainteCount }}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.user.index') }}"
                class="nav-link {{ Route::is('admin.user.index') ? 'active bg-orange text-white' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>Utilisateurs
                    <span class="badge bg-orange text-white right">{{ $userCount }}</span>
                </p>
            </a>
        </li>
        <!--<li class="nav-item">
                <a href="{{ route('admin.permission.index') }}"
                    class="nav-link {{ Route::is('admin.permission.index') ? 'active bg-orange text-white' : '' }}">
                    <i class="nav-icon fas fa-hat-cowboy"></i>
                    <p>Permission
                        <span class="badge bg-orange right">{{ $PermissionCount }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.category.index') }}"
                    class="nav-link {{ Route::is('admin.category.index') ? 'active bg-orange text-white' : '' }}">
                    <i class="nav-icon fas fa-list-alt"></i>
                    <p>Category
                        <span class="badge bg-orange right">{{ $CategoryCount }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.subcategory.index') }}"
                    class="nav-link {{ Route::is('admin.subcategory.index') ? 'active bg-orange text-white' : '' }}">
                    <i class="nav-icon fas fa-list"></i>
                    <p>Sub Category
                        <span class="badge bg-orange right">{{ $SubCategoryCount }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.collection.index') }}"
                    class="nav-link {{ Route::is('admin.collection.index') ? 'active bg-orange text-white' : '' }}">
                    <i class="nav-icon fas fa-file-pdf"></i>
                    <p>Collection
                        <span class="badge bg-orange right">{{ $CollectionCount }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.product.index') }}"
                    class="nav-link {{ Route::is('admin.product.index') ? 'active bg-orange text-white' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Products
                        <span class="badge bg-orange right">{{ $ProductCount }}</span>
                    </p>
                </a>
            </li>-->
        @endrole
        <li class="nav-item">
            <a href="{{ route('admin.profile.edit') }}"
                class="nav-link {{ Route::is('admin.profile.edit') ? 'active bg-orange text-white' : '' }}">
                <i class="nav-icon fas fa-id-card"></i>
                <p>Profile</p>
            </a>
        </li>

    </ul>
</nav>
