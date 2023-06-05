@extends('layout')
@section('content')
<link rel="stylesheet" href="styles/app.css">
<div class="product-box">
    <div class="product-data">
        <div class="carousel">
            <div class="carousel-container">
                <img class="image-carousel" src="{{ $product->image1 }}" alt="Imagem do produto">
            </div>
            <button id="1" class="carousel-prev" onclick="moveRight()">&#8810;</button>
            <button class="carousel-next" onclick="moveLeft()">&#8811;</button>
        </div>
    </div>
    <div class="product-data-2">
        <h1>{{$product->title}}</h1>
        <h2>{{$product->description}}</h2>
        <h3>R${{$product->price}}</h3>
        <h2>Categoria: {{$product->category}}</h2>
        <h2>Vendedor: {{$product->seller_id}}</h2>
        <div>
            <button type="button" class="buy-button btn-card">Comprar</button>
        </div>
    </div>
</div>
@endsection

<script>
function moveRight() {
    const elemento = document.querySelector('.image-carousel');
    let button = document.querySelector('.carousel-prev');
    if (button.id === "1") {
        button.id = '2';
        elemento.src = "{{ $product->image2 }}";
    } else if (button.id === "2") {
        button.id = '3';
        elemento.src = "{{ $product->image3 }}";
    } else {
        button.id = '1';
        elemento.src = "{{ $product->image1 }}";
    }
}
function moveLeft() {
    const elemento = document.querySelector('.image-carousel');
    let button = document.querySelector('.carousel-prev');
    if (button.id === "1") {
        button.id = '3';
        elemento.src = "{{ $product->image3 }}";
    } else if (button.id === "2") {
        button.id = '1';
        elemento.src = "{{ $product->image1 }}";
    } else {
        button.id = '2';
        elemento.src = "{{ $product->image2 }}";
    }
}
</script>
