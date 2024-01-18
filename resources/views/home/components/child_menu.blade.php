@if ($category->categoryChild->count())
    <ul role="menu" class="sub-menu">
        @foreach ($category->categoryChild as $categoryChild)
            <li><a href="shop.html">{{ $categoryChild->name }}</a></li>
            @if ($category->categoryChild->count())
                @include('home.components.child_menu', ['category' => $categoryChild])
            @endif
        @endforeach

    </ul>
@endif
