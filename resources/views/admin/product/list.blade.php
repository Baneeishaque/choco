@if (Route::has('login'))
@section('title') 
Products
@endsection 
@extends('admin-layouts.main')
@section('style')

@endsection 

 @section('rightbar-action') 

<button class="btn btn-primary-rgba right-action" ><i class="feather icon-plus mr-2"></i> <a href="{{ url('product/create') }}">Create</a></button> 
 @endsection 

 
@section('rightbar-content')

    <div class='container'>
        <div class="table-responsive product-table tabcol-md-10" >
            
            <table class="table table-hover  table-dark table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Old Amount</th>
                        <th>Recent Amount</th>
                        <th>Category</th>
                        <th>Weight</th>
                        <th>Box Size</th>
                        <th>Description</th>
                        <th>image</th>
                       
                    </tr>
                </thead>
                <tbody>
                 
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->old_amount }}</td>
                            <td>{{ $product->recent_amount }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->weight }}</td>
                            <td>{{ $product->box }}</td>
                            <td>{{ $product->description }}</td>
                            <td>
                                @foreach($image as $img)
                                    @if($img->product_id == $product->id)
                                    <img src="{{ url('product_images/'.$img->images)}}" width="50px" height="50px">
                                    @endif
                                @endforeach
                            </td>
                            <td><a href={{url('deleteProduct/'.$product->id)}}><i class="fa fa-trash"></i></a>&emsp;<a href="{{ url('editProduct/'.$product->id) }}"><i class="fa fa-edit"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@endif
