<div class="mainmenu pull-left">
    <ul class="nav navbar-nav collapse navbar-collapse">
        <li><a href="index.html" class="active">Home</a></li>
        @foreach ($categoriesLimit as $category)
            <li class="dropdown"><a href="#">{{ $category->name }}<i class="fa fa-angle-down"></i></a>
                @include('home.components.child_menu', ['category' => $category])
            </li>
        @endforeach


        <li><a href="404.html">404</a></li>
        <li><a href="contact-us.html">Contact</a></li>
    </ul>
</div>
