@extends('layouts.master')

@section('title', __('home.title'))

@section('content')
<div class="row justify-content-md-center">
  <div class="col-10">
    <div class="card text-white p-5" style="background-size: cover; background-image: url(&quot;https://images.unsplash.com/photo-1568781269551-3e3baf5ec909?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80&quot;);">
      <div class="col-xs-5">
        <h4>{{ __('home.banner.start') }} <br>{{ __('home.banner.end') }}</h4>
        <a name="" id="" class="btn btn-dark mt-3" href="#" role="button">{{ __('home.banner.buttonText') }}</a>
      </div>
      <img src="{{ url('storage/home/case.png') }}" class="category-img" alt="" loading="lazy">

    </div>
    <div class="row mt-5">

      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <img class="card-img-top" alt="Card image cap" style="" src="https://www.intel.la/content/dam/products/hero/foreground/processor-box-celeron-1x1.png.rendition.intel.web.550.550.png">
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ __('home.sampleCategory') }}</h5>


          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <img class="card-img-top" alt="Card image cap" src="https://starcomp.in/pub/media/catalog/product/cache/600x600/gigabyte-x570-aorus-ultra-atx-motherboard-(-amd-am4-socket,-for-ryzen-series-cpu,-4-ram-slots,-max-128gb-ram-support-).png">
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ __('home.sampleCategory') }}</h5>


          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <img class="card-img-top" alt="Card image cap" src="https://i.ebayimg.com/images/g/qX0AAOSwPile~PjI/s-l640.png">
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ __('home.sampleCategory') }}</h5>


          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <img class="card-img-top" alt="Card image cap" src="https://sta3-nzxtcorporation.netdna-ssl.com/uploads/product/cover_image_content/840/card_1ab93e87196cf33a.png">
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ __('home.sampleCategory') }}</h5>


          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection