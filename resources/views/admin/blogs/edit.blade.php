@section('title') Edit Blog @endsection @extends('admin-layouts.main') @section('rightbar-content')
<div class="container xcard">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12">
            <div class="card" style="height:auto;">
                <div class="card-header col-lg-12 col-sm-12">
                    <div class="row col-lg-1 col-sm-2"><a href="/adminindex"><i class="fa fa-arrow-left fa-2x"
                                aria-hidden="true"></a></i>
                    </div>
                </div>

                @foreach ($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
                </ul>
                @endforeach

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif

                    <form method='POST' enctype="multipart/form-data" action="{{ url('updateBlog/'.$blog->id) }}">
                        <!--acton insertpdt "routes(web.php)" to the controller-->
                        <input type="hidden" name="id"> @csrf
                        <!-- Blog Title -->
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                            <div class="col-md-3">
                                <textarea name="title" id="" cols="50" rows="1">{{$blog->title}}</textarea>
                            </div>
                        </div>
                        {{-- Blog Description --}}
                        <div class="form-group row">
                            
                            <label for="description" >{{ __('Description') }}</label>
                            <textarea name="description" id="description" cols="30" rows="10">{{$blog->description}}</textarea>
                            
                        </div>
                       
                        <div class="form-group row">
                            <label for="image_upload" class="col-md-4 col-form-label text-md-right">{{ __('choose
                                image') }}</label>
                            <div class="col-md-6">
                                <input name='image' id="image" type="file" class="form-control required  ">
                            </div>
                        </div>
                        <!-- submit -->
                        <div class="form-group row ">
                            <div class="col-md-6  offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('SUBMIT') }}
                                </button>
                            </div>
                        </div>

                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('pagescripts')
    CKEDITOR.replace( 'description' );
@endsection
