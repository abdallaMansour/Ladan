<!-- Main Sidebar Container -->
@php
    $setting = \App\Models\Setting::first();
@endphp
<aside class="main-sidebar sidebar-light-orange elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ $setting?->getFirstMediaUrl('light') ?: asset('dashboard_assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ $setting?->name }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ auth()->user()->getFirstMediaUrl() ?: asset('images/default-user.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('profile.edit') }}" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                @if (auth()->user()->type == 'admin')
                    <li class="nav-item">
                        <a href="{{ route('dashboard.main') }}" class="nav-link @yield('active_link_main', '')">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->hasPermission(config('all_permissions.admin')))
                    <li class="nav-item">
                        <a href="{{ route('dashboard.pages.admins') }}" class="nav-link @yield('active_admins', '')">
                            <i class="nav-icon fas fa-user-tie"></i>
                            <p>
                                Admins
                            </p>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->hasPermission(config('all_permissions.role')))
                    <li class="nav-item">
                        <a href="{{ route('dashboard.pages.roles') }}" class="nav-link @yield('active_roles', '')">
                            <i class="nav-icon fas fa-user-edit"></i>
                            <p>
                                Roles
                            </p>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->hasPermission(config('all_permissions.seo')))
                    <li class="nav-item menu">
                        <a href="#" class="nav-link @yield('active_nav_seo', '')">
                            <i class="nav-icon fas fa-search-location"></i>
                            <p>
                                SEO
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @foreach ((new \App\Http\Controllers\Seo\DashboardSeoController())->pages as $page)
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.pages.seos', $page) }}" class="nav-link @yield('active_link_seo_' . $page, '')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>{{ $result = str_replace('_', ' ', $page) }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endif

                @if (auth()->user()->hasPermission(config('all_permissions.contact_us')))
                    <li class="nav-item">
                        <a href="{{ route('dashboard.pages.messages') }}" class="nav-link @yield('active_messages', '')">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Message
                            </p>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->hasPermission(config('all_permissions.ticket')))
                    <li class="nav-item">
                        <a href="{{ route('dashboard.pages.tickets') }}" class="nav-link @yield('active_ticket', '')">
                            <i class="nav-icon fas fa-ticket-alt"></i>
                            <p>
                                Tickets
                            </p>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->hasPermission(config('all_permissions.setting')))
                    <li class="nav-item">
                        <a href="{{ route('dashboard.pages.settings') }}" class="nav-link @yield('active_settings', '')">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Settings
                            </p>
                        </a>
                    </li>
                @endif






                {{-- User bar --}}

                @if (auth()->user()->type == 'user')
                    <li class="nav-item menu">
                        <a href="#" class="nav-link @yield('active_nav_ticket', '')">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Tickets
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('pages.tickets') }}" class="nav-link @yield('active_ticket', '')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Show all</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('pages.tickets.create') }}" class="nav-link @yield('active_create_ticket', '')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Ticket</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
