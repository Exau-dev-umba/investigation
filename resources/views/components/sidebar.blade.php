<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item nav-item menu-is-opening menu-open">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Enquêtes ouvertes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Enquêtes encours</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle-o nav-icon"></i>
                        <p>Enquêtes closent</p>
                    </a>
                </li>
            </ul>
        </li>
        @role('admin')
            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}"
                    class="nav-link {{ Route::is('admin.user.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Users
                        <span class="badge bg-orange right">{{ $userCount }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.role.index') }}"
                    class="nav-link {{ Route::is('admin.role.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-tag"></i>
                    <p>Role
                        <span class="badge bg-orange right">{{ $RoleCount }}</span>
                    </p>
                </a>
            </li>
            <!--<li class="nav-item">
                <a href="{{ route('admin.permission.index') }}"
                    class="nav-link {{ Route::is('admin.permission.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-hat-cowboy"></i>
                    <p>Permission
                        <span class="badge bg-orange right">{{ $PermissionCount }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.category.index') }}"
                    class="nav-link {{ Route::is('admin.category.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-list-alt"></i>
                    <p>Category
                        <span class="badge bg-orange right">{{ $CategoryCount }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.subcategory.index') }}"
                    class="nav-link {{ Route::is('admin.subcategory.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-list"></i>
                    <p>Sub Category
                        <span class="badge bg-orange right">{{ $SubCategoryCount }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.collection.index') }}"
                    class="nav-link {{ Route::is('admin.collection.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-file-pdf"></i>
                    <p>Collection
                        <span class="badge bg-orange right">{{ $CollectionCount }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.product.index') }}"
                    class="nav-link {{ Route::is('admin.product.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Products
                        <span class="badge bg-orange right">{{ $ProductCount }}</span>
                    </p>
                </a>
            </li>-->
        @endrole
        <li class="nav-item">
            <a href="{{ route('admin.profile.edit') }}"
                class="nav-link {{ Route::is('admin.profile.edit') ? 'active' : '' }}">
                <i class="nav-icon fas fa-id-card"></i>
                <p>Profile</p>
            </a>
        </li>

    </ul>
</nav>
