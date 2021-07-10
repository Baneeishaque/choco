@section('title') Create Product @endsection @extends('admin-layouts.main') @section('rightbar-content')
<div class="container xcard">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12">
            <div class="card" style="height:auto;">
                <div class="card-header col-lg-12 col-sm-12">{{ __('Add Product Details') }}
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

                    <form method='POST' enctype="multipart/form-data" action="{{ url('updateProduct/'.$product->id) }}">
                        <!--acton insertpdt "routes(web.php)" to the controller-->
                        <input type="hidden" name="id" value="{{$product->id}}">
                     @csrf
                        <!-- Product name -->
                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">{{ __('Product
                                name') }}</label>
                            <div class="col-md-3">
                                <input name='name' value="{{ $product->name}}" id="product_name" type="text" class="form-control  required  autofocus">
                            </div>
                        </div>

                        <!-- Old price -->
                        <div class="form-group row">
                            <label for="old_amount" class="col-md-4 col-form-label text-md-right">{{ __('Old Amount')
                                }}</label>
                            <div class="col-md-3">
                                <input name='old_amount' value="{{ $product->old_amount}}" id="old_amount" type="text" class="form-control autofocus">
                            </div>
                        </div>
                        <!-- Recent price -->
                        <div class="form-group row">
                            <label for="recent_amount" class="col-md-4 col-form-label text-md-right">{{ __('Recent
                                Amount') }}</label>
                            <div class="col-md-3">
                                <input name='recent_amount' value="{{ $product->recent_amount }}" type="text" class="form-control  required  autofocus">
                            </div>
                        </div>
                        <!-- Categories -->
                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Categories')
                                }}</label>
                            <div class="col-md-3">
                                <select name="category" id="category">
                                    <option value="">select category</option>
                                    <option @if($product->category == "sweets") selected = "selected"  @endif value="sweets">sweets</option>
                                </select>
                            </div>
                        </div>
                        <!-- weight -->
                        <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('Weight') }}</label>
                            <div class="col-md-3">
                                <input name='weight' value="{{ $product->weight }}" type="text" class="form-control    autofocus">
                            </div>
                        </div>
                        <!-- Box Size -->
                        <div class="form-group row">
                            <label for="box" class="col-md-4 col-form-label text-md-right">{{ __('Box Size') }}</label>
                            <div class="col-md-3">
                                <input name='box' value="{{ $product->box }}"type="text" class="form-control    autofocus">
                            </div>
                        </div>
                        <!-- description -->
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description')
                                }}</label>
                            <div class="col-md-4">
                                <textarea name="description"  rows="4" cols="25" class="form-control  autofocus">{{$product->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image_upload" class="col-md-4 col-form-label text-md-right">{{ __('choose
                                image') }}</label>
                            <div class="col-md-6">

                                <input name='image[]' id="image" type="file" class="form-control   ">
                                <div id="newfield"></div>
                                <input name="add" type="button" id="addbtn" value="addmore">
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
$(document).ready(function () {
    $("#addbtn").click(function(){
        $("#newfield").append('<input type="file" name="image[]" class="form-control" required>');
    });
});
@endsection