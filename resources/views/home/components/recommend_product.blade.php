@php
    $base_url = config('app.base_url');
@endphp

<div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">recommended items</h2>

    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($productRecommends as $key => $productRecommend)
                @if ($key % 3 == 0)
                    <div class="item {{ $key == 0 ? 'active' : '' }}">
                @endif
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{ $base_url . $productRecommend->feature_image_path }}" alt="" />
                                <h2>${{ $productRecommend->price }}</h2>
                                <p>{{ $productRecommend->name }}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i
                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                    @if ($key % 3 == 2)
                </div>
            @endif
        </div>
        @endforeach

    </div>
    <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>
</div><!--/recommended_items-->
