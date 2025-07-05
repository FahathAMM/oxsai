@props([
    'products' => $products,
])



<section class="flat-spacing-4">
    <div class="container">
        <div class="heading-section text-center wow fadeInUp">
            <h3 class="heading">Popular Products</h3>
        </div>

        <div class="tf-grid-layout tf-col-2 lg-col-3 xl-col-5">

            @foreach ($products as $item)
                <div class="card-product wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="card-product-wrapper">
                        <a href="{{ url('product/' . $item->id) }}" class="product-img">
                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ $item->mainImage->image }}"
                                src="{{ $item->mainImage->image }}" alt="image-product">
                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ $item->mainImage->image }}"
                                src="{{ $item->mainImage->image }}" alt="image-product">
                        </a>

                        <div class="list-btn-main">
                            <a href="{{ url('product/' . $item->id) }}" class="btn-main-product">View Product</a>
                        </div>
                    </div>
                    <div class="card-product-info">
                        <a href="product-detail.html" class="title link">
                            {{ $item->name ?? '' }}
                        </a>
                        <span class="price">
                            {{ Str::limit($item->short_desc ?? defualtProductDesc(), 80, '...') }}
                        </span>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
