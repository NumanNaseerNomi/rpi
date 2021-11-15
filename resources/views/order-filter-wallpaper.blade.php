@extends('layouts.app')

@section('content')


<section class="order-filter-section my-12">
    <h1 class="text-xl lg:text-2xl font-semibold text-gray-900">
        <span>{{$product->title}}</span>
    </h1>
    <order-filter-wallpaper
        :ruleof120="{{ json_encode($product->rule_of_120) }}"
        :variants="{{ json_encode($variants) }}"
        :ptitle="{{ json_encode($product->title) }}"
        :pid="{{ json_encode($product->id) }}"
        :pricingtype="{{ json_encode($product->pricing_type) }}"
        :user="{{ json_encode(Auth::user()) }}"
        :width="{{ json_encode($product->width) }}"
        :height="{{ json_encode($product->height) }}"
        :slug="{{ json_encode($product->slug) }}"
        :menu="{{ json_encode($menu) }}"
        :category="{{ json_encode($category) }}"
        :images="{{ json_encode($product->getMedia('product-gallery')) }}"
        ordertype="{{$orderType}}"
        ></order-filter-wallpaper>
</section>



@endsection
