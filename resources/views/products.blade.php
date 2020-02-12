@extends('layout')

@section('title', 'Listado de productos')

@section('content')
    <main class="content">
        <div class="items">
    @forelse($products as $product)
        <div class="item">
            <img src="{{ asset("images/products/{$product->image}") }}" alt="Product image" width="300px" height="200px" class="item-image">

            <div class="item-body">
                <h4>
                    <a href="{{ url('productos/'.$product->slug) }}">
                        {{ $product->title }}
                    </a>
                </h4>

                <p>
                    <a href="{{ url('productos/categoria/'.$product->category->slug) }}">
                        {{ $product->category->title }}
                    </a>
                </p>
            </div>
        </div>
    @empty
        <p>No se encontraron productos
    @endforelse

        </div>

    {{ $products->links() }}

    </main>
@endsection

