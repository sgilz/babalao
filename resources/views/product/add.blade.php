@extends('layouts.master')
@section('title', $data["title"])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{__('product.formTitle', ['category' => $data['category']->getName()])}}</h4>
                </div>
                <div class="card-body controls pl-5 pr-5">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form method="POST" enctype="multipart/form-data" action="{{ route('product.save', $data['category']->getId() ) }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{__('product.name.label')}}</label>
                            <input type="text" class="form-control" name="name" value="{{ old("name") }}" placeholder="{{__('product.name.placeholder')}}">
                        </div>
                        <div class="form-group">
                            <label for="name">{{__('product.brand.label')}}</label>
                            <input type="text" class="form-control" name="brand" value="{{ old("brand") }}" placeholder="{{__('product.brand.placeholder')}}">
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="name">{{__('product.price.label')}}</label>
                            <div class="input-group mb-3 col-md-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="number" min="1" class="form-control" name="price" value="{{ old("price") }}" placeholder="{{__('product.price.placeholder')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">{{__('product.image.label')}}</label>
                            <div class="custom-file">
                                <input id="customImage" enctype="multipart/form-data" type="file" name="image" value="{{ old("image") }}" class="custom-file-input">
                                <label class="custom-file-label" for="customImage">{{__('product.image.placeholder')}}</label>
                            </div>
                        </div>
                        @foreach($data["category"]->getSpecs() as $key => $spec)
                        <div class="form-group">
                            <label for="specs[ {{ $key }} ]">{{$spec}}</label>
                            <input type="text" class="form-control" name="specs[{{ $key }}][name]" value="{{$spec}}" hidden>
                            <input type="text" class="form-control" name="specs[{{ $key }}][value]" placeholder="{{ $spec }}">
                        </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary btn-lg float-right">{{__('product.submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
