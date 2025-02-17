@extends('products.layout')

@section('content')
    <!-- header section for edit product -->
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                Edit Product
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href={{route('products.index')}}>Back</a>
            </div>
        </div>
    </div>
    <!-- end of header section for edit product -->

    <!-- display error for faulty input -->
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

    <!-- edit field for product -->
        <form action="{{route('products.update',$product->id)}}" method="post">
        @csrf
        @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value={{$product->name}} class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">\
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <textarea name="detail" class="form-control" cols="30" rows="10">{{$product->detail}}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    <!-- end of edit field for product -->
@endsection
