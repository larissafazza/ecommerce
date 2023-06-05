@extends ('layout')
    @section('content')

        <link rel="stylesheet" href="styles/app.css">
        <div class="product-box">
            <div class="product-data">
            <div class="slider">
                <div class="slider-container">
                    <div class="slide">
                    <img src="imagem1.jpg" alt="Imagem 1">
                    </div>
                    <div class="slide">
                    <img src="imagem2.jpg" alt="Imagem 2">
                    </div>
                    <div class="slide">
                    <img src="imagem3.jpg" alt="Imagem 3">
                    </div>
                </div>
                <button class="prev-btn">Anterior</button>
                <button class="next-btn">Próximo</button>
            </div>
            </div>
            <div class="product-data-2">
                <h1>{{$product->title}}</h1>
                <h2>{{$product->description}}</h2>
                <h3>R${{$product->price}}</h3>

                <h2>Categoria: {{$product->category}}</h2>
                <h2>Vendedor: {{$product->seller_id}}</h2>
                <div>
                    <button type="button" class="buy-button">Comprar</button>
                </div>
            </div>
        </div>
    
   
    @endsection

<script>

</script>