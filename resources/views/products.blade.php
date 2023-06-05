@extends ('layout')
    @section('content')
    <div class="home-div-imagem">
        <div class="home-image-content">
            <h1>Venha conhecer os produtos!</h1>
            <h2>Temos novidades todos os dias.</h2>
            <h3>Para todos os gostos, e para todas as pessoas...</h3>
            <p class="products-link"><a href="#home-produtos">Clique aqui para conferir!</a></p>
        </div>
    </div>
    <div id="home-produtos">
        <?php foreach ($products as $product) : ?>
            <div class="box-product">
                <div class="product-image-container">
                    <img class="product-image custom-image" src="{{$product->image1}}" alt="Imagem indisponível">
                </div>
                <div class="product-details">
                    {{$product->title}}
                </div>
                <div class="product-price">
                    R$ {{$product->price}}
                </div>
                <div class="buy-button">
                    <a href="{{ route('product', ['product' => $product]) }}" class="buy-button-link">Comprar</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
            
    @endsection