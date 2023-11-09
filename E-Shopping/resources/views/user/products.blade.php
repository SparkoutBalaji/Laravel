@extends('user.frame')
@section('title','Products')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">PRODUCTS</h1>
    </div>
    <div>
        <select id="category-dropdown">
            <option value="all" selected>All Categories</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    @foreach ($products as $product)
        <div>
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <img src="{{ $product->image }}" alt="{{ $product->name }}">
            <p>Price: {{ $product->price }}</p>
            <button class="add-to-cart" data-product="{{ $product->id }}">Add to Cart</button>
        </div>
        @endforeach
</main>
@endsection
