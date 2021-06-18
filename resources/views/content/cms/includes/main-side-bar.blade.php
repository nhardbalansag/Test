<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item
                        {{
                             (Request::route()->getName() === "studentlist" ? 'active' : '')
                        }}
                        "
                    >
                    <a href="#" class="nav-link
                        {{
                             (Request::route()->getName() === "studentlist" ? 'active' : '')
                        }}
                        "
                    >
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Students
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('studentlist') }}" class="nav-link
                                {{
                                    (Request::route()->getName() === "studentlist" ? 'active' : '')
                                }}
                                "
                            >
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item
                        {{
                             (Request::route()->getName() === "createSubject" ? 'active' : '')
                        }}
                        "
                    >
                    <a href="#" class="nav-link
                        {{
                             (Request::route()->getName() === "createSubject" ? 'active' : '')
                        }}
                        "
                    >
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Subject
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('createSubject') }}" class="nav-link
                                {{
                                    (Request::route()->getName() === "createSubject" ? 'active' : '')
                                }}
                                "
                            >
                                <i class="far fa-circle nav-icon"></i>
                                <p>create subject</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
