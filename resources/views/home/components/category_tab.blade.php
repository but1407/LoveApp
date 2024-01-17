@php
    $base_url = config('app.base_url');
@endphp


<div class="category-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            @foreach ($categories as $key => $category)
                <li class="{{ $key == 0 ? 'active' : '' }}"><a href="#category_tab_{{ $category->id }}"
                        data-toggle="tab">{{ $category->name }}</a>
                </li>
            @endforeach

        </ul>
    </div>

    <div class="tab-content">
        @foreach ($categories as $key => $category)
            <div class="tab-pane fade {{ $key == 0 ? 'active in' : '' }}" id="category_tab_{{ $category->id }}">

                @foreach ($category->product as $categoryItem)
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ $base_url . $categoryItem->feature_image_path }}" alt="" />
                                    <h2>${{ $categoryItem->price }}</h2>
                                    <p>{{ $categoryItem->name }}</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

    </div>
</div><!--/category-tab-->
