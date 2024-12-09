@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add new product</a>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['name'] }} - ${{ $product['price'] }}</li>
        @endforeach
    </ul>
</div>
@endsection

<form method="GET" action="{{ route('products') }}">
    <input type="text" name="search" placeholder="Search by name or description">
    <button type="submit">Search</button>
</form>
