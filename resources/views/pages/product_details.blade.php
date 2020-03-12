@extends('layouts.main')
@section('content')

<!-- ##### Single Product Details Area Start ##### -->
<section class="single_product_details_area d-flex align-items-center">

    <!-- Single Product Thumb -->
    <div class="single_product_thumb clearfix">
        <div >
            <img src="/frontend/img/products/{{$product->image}}" alt="">
        </div>
    </div>

    <!-- Single Product Description -->
    <div class="single_product_desc clearfix">
        {{-- <span>mango</span> --}}
        <a href="cart.html">
            <h2>{{$product->name}}</h2>
        </a>
        <p class="product-price"><!--<span class="old-price">400000đ</span> --> {{$product->price_out}}</p>
        <p class="product-desc">{{$product->description}}</p>

        <!-- Form -->
        <form class="cart-form clearfix" method="post">
            {{-- <!-- Select Box -->
            <div class="select-box d-flex mt-50 mb-30">
                <select name="select" id="productSize" class="mr-5">
                    <option value="value">Size: XL</option>
                    <option value="value">Size: X</option>
                    <option value="value">Size: M</option>
                    <option value="value">Size: S</option>
                </select>
                <select name="select" id="productColor">
                    <option value="value">Color: Black</option>
                    <option value="value">Color: White</option>
                    <option value="value">Color: Red</option>
                    <option value="value">Color: Purple</option>
                </select>
            </div> --}}
            <!-- Cart & Favourite Box -->
            <div class="cart-fav-box d-flex align-items-center">
                <!-- Cart -->
                <a href="{{route('add_to_cart',$product->id)}}"><button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button></a>
                <!-- Favourite -->
                <div class="product-favourite ml-4">
                    <a href="#" class="favme fa fa-heart"></a>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- ##### Single Product Details Area End ##### -->


@endsection