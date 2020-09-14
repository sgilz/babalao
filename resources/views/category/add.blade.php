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
                    <h4>{{__('category.formTitle')}}</h4>
                </div>
                <div class="card-body controls pl-5 pr-5">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form method="POST" enctype="multipart/form-data" action="{{ route('category.save') }}">
                    @csrf
                        <div class="form-group">
                            <label for="name">{{__('category.name.label')}}</label>
                            <input type="text" class="form-control" name="name" placeholder="{{__('category.name.label')}}">
                        </div>
                        <div class="form-group">
                            <label for="name">{{__('category.image.label')}}</label>
                            <div class="custom-file">
                                <input id="customImage" enctype="multipart/form-data" type="file" name="image" class="custom-file-input">
                                <label class="custom-file-label" for="customImage">{{__('category.image.placeholder')}}</label>
                            </div>
                        </div>
                        <div class="form-group row" id="specs-form-group">
                            <label class="col-12" for="name">{{__('category.specs.label')}}</label>
                            <div class="specs-input-group input-group mb-3 col-md-8">
                                <input type="text" class="form-control" name="specs[]" placeholder="{{__('category.specs.placeholder')}}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary btn-add" type="button"><i class="fas fa-plus" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg float-right">{{__('category.submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('custom-scripts')
<script type="text/javascript" src="{{ URL::asset('js/category/add.js') }}"></script>
@endpush
@endsection