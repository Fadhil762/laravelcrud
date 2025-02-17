@extends('products.layout')

@section('content')
    <!--header area for products table -->
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Product Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('products.create')}}">Add Product</a>
            </div>
        </div>
    </div>
    <!-- end header area -->

    <!-- display success message when a product successfully added -->
    @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
    @endif

    <!-- table for products -->
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="200px">Action</th>
        </tr>
        <!-- use for loop to get the data from products table -->
        @foreach ($products as $product)
        <tr>
            <td>{{$i}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->detail}}</td>
            <td>
                <form action="{{route('products.destroy',$product->id)}}" method="post" class="form-control">
                    <a class="btn btn-info" href="{{route('products.show',$product->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{route('products.edit',$product->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <!-- end table for products-->
@endsection
