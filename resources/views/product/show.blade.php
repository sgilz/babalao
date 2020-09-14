@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card">
        @include('util.message')
        <div class="row">
            <aside class="col-sm-5 border-right">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                        <div><a href="#"><img style="width: 400px;"
                                              src="https://www.sercoplus.com/11558-large_default/procesador-intel-core-i5-9400f.jpg"></a>
                        </div>
                    </div> <!-- slider-product.// -->
                    <div class="img-small-wrap">
                        <div class="item-gallery"><img style="width: 100px;"
                                                       src="https://www.alternate.es/Intel/Core-i5-9500T-procesador-2-2-GHz-9-MB-Smart-Cache/html/product/1535158">
                        </div>
                        <div class="item-gallery"><img src="https://s9.postimg.org/tupxkvfj3/image.jpg"></div>
                        <div class="item-gallery"><img src="https://s9.postimg.org/tupxkvfj3/image.jpg"></div>
                        <div class="item-gallery"><img src="https://s9.postimg.org/tupxkvfj3/image.jpg"></div>
                    </div> <!-- slider-nav.// -->
                </article> <!-- gallery-wrap .end// -->
            </aside>
            <aside class="col-sm-7">
                <article class="card-body p-5">
                    <h2 class="mb-6">{{ $data['product']->getName() }}</h2>

                    <p class="price-detail-wrap">
	<span class="price h3 text-warning">
		<span class="currency">COP $</span><span class="num">{{ $data['product']->getPrice() }}</span>
	</span>
                        <span>/per unit</span>
                    </p> <!-- price-detail-wrap .// -->
                    <dl class="item-property">
                        <dt>Description</dt>
                        <dd><p>Here goes description consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco </p></dd>
                    </dl>
                    <dl class="param param-feature">
                        <dt>Model#</dt>
                        <dd>12345611</dd>
                    </dl>  <!-- item-property-hor .// -->
                    <dl class="param param-feature">
                        <dt>Color</dt>
                        <dd>Black and white</dd>
                    </dl>  <!-- item-property-hor .// -->
                    <dl class="param param-feature">
                        <dt>Delivery</dt>
                        <dd>Russia, USA, and Europe</dd>
                    </dl>  <!-- item-property-hor .// -->

                    <hr>
                    <form action="{{ route('product.addToCart',['id'=> $data['product']->getId()]) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-5">
                                <dl class="param param-inline">
                                    <dt>Quantity:</dt>
                                    <input type="number" class="form-control" name="quantity" min="0"
                                           style="width: 80px;">
                                </dl>  <!-- item-property .// -->
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->
                        <hr>
                        <button type="submit" class="btn btn-lg btn-outline-success text-uppercase"> <i
                                class="fas fa-shopping-cart"></i> Add to cart </button>
                    </form>
                </article> <!-- card-body.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->
</div>

@endsection
