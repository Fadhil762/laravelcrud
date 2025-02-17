@extends('products.layout')

@section('content')
    <!-- header for the create product field -->
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add new product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('products.index')}}">Back</a>
            </div>
        </div>
    </div>
    <!-- end of header for create product field -->

    <!-- error catching when adding a product -->
    @if($errors->any())
    <div class="alert alert-danger">
        <strong>Looks like there's something wrong with your input</strong><br>
        <ul>
            @foreach($errors as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- create a new product input field -->
    <form action="{{route('products.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Enter product name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea name="detail" class="form-control" cols="30" rows="10" placeholder="Enter product detail">
                    </textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <!-- end of create a new product input field -->
@endsection
