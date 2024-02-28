<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav_product" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people-fill"></i><span>PRODUCT</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav_product" class="nav-content collapse " data-bs-parent="#sidebar-nav_product">
                <li>
                    <a href="{{route('product_create')}}">
                        <i class="bi bi-circle"></i><span>Add Product</span>
                    </a>
                    <a href="{{route('product_index')}}">
                        <i class="bi bi-circle"></i><span>All Product</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav_category" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people-fill"></i><span>CATEGORY</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav_category" class="nav-content collapse " data-bs-parent="#sidebar-nav_category">
                <li>
                    <a href="{{route('category_create')}}">
                        <i class="bi bi-circle"></i><span>Add Category</span>
                    </a>
                    <a href="{{route('category_index')}}">
                        <i class="bi bi-circle"></i><span>All Categories</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->


    </ul>

</aside>
