@if (Route::has('login'))
@section('title') 
Products
@endsection 
@extends('admin-layouts.main')
@section('style')

@endsection 

 @section('rightbar-action') 

<button class="btn btn-primary-rgba right-action" ><i class="feather icon-plus mr-2"></i> <a href="{{ url('blog/create') }}">Create</a></button> 
 @endsection 

 
@section('rightbar-content')

    <div class='container'>
        <div class="table-responsive product-table tabcol-md-10" >
            
            <table class="table table-hover  table-dark table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <td>Created Date</td>
                        <td>Updated Date</td>
                        <th>image</th>
                       
                    </tr>
                </thead>
                <tbody>
                 
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->description }}</td>
                            <td>{{ $blog->created_at }}</td>
                            <td>{{ $blog->updated_at }}</td>
                            <td><img src="{{ url('blog_images/'.$blog->image)}}" width="50px" height="50px"></td>
                            <td><a href={{url('deleteBlog/'.$blog->id)}}><i class="fa fa-trash"></i></a>&emsp;<a href="{{ url('editBlog/'.$blog->id) }}"><i class="fa fa-edit"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@endif
