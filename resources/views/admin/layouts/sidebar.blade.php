<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('admin.dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('create.category')}}">
                        <i class="bi bi-circle"></i><span>Add Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('category')}}">
                        <i class="bi bi-circle"></i><span>Category list</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('create.product')}}">
                        <i class="bi bi-circle"></i><span>Add Product</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('products')}}">
                        <i class="bi bi-circle"></i><span>Product List</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Home Setting</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('Home.Page.Section.List')}}">
                        <i class="bi bi-circle"></i><span>Section List</span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('Order.Index')}}">
                <i class="bi bi-grid"></i>
                <span>Orders</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#setting" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Business Setting</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="setting" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('Shipping.Charges')}}">
                        <i class="bi bi-circle"></i><span>Shipping Charges</span>
                    </a>
                </li>

            </ul>
        </li>


        <!-- End Charts Nav -->

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">--}}
{{--                <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>--}}
{{--            </a>--}}
{{--            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">--}}
{{--                <li>--}}
{{--                    <a href="icons-bootstrap.html">--}}
{{--                        <i class="bi bi-circle"></i><span>Bootstrap Icons</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="icons-remix.html">--}}
{{--                        <i class="bi bi-circle"></i><span>Remix Icons</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="icons-boxicons.html">--}}
{{--                        <i class="bi bi-circle"></i><span>Boxicons</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li><!-- End Icons Nav -->--}}


{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="users-profile.html">--}}
{{--                <i class="bi bi-person"></i>--}}
{{--                <span>Profile</span>--}}
{{--            </a>--}}
{{--        </li><!-- End Profile Page Nav -->--}}

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="pages-faq.html">--}}
{{--                <i class="bi bi-question-circle"></i>--}}
{{--                <span>F.A.Q</span>--}}
{{--            </a>--}}
{{--        </li><!-- End F.A.Q Page Nav -->--}}

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="pages-contact.html">--}}
{{--                <i class="bi bi-envelope"></i>--}}
{{--                <span>Contact</span>--}}
{{--            </a>--}}
{{--        </li><!-- End Contact Page Nav -->--}}

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="pages-register.html">--}}
{{--                <i class="bi bi-card-list"></i>--}}
{{--                <span>Register</span>--}}
{{--            </a>--}}
{{--        </li><!-- End Register Page Nav -->--}}

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="pages-login.html">--}}
{{--                <i class="bi bi-box-arrow-in-right"></i>--}}
{{--                <span>Login</span>--}}
{{--            </a>--}}
{{--        </li><!-- End Login Page Nav -->--}}

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="pages-error-404.html">--}}
{{--                <i class="bi bi-dash-circle"></i>--}}
{{--                <span>Error 404</span>--}}
{{--            </a>--}}
{{--        </li><!-- End Error 404 Page Nav -->--}}

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="pages-blank.html">--}}
{{--                <i class="bi bi-file-earmark"></i>--}}
{{--                <span>Blank</span>--}}
{{--            </a>--}}
{{--        </li><!-- End Blank Page Nav -->--}}

    </ul>

</aside><!-- End Sidebar-->

