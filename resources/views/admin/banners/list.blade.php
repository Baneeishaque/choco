@section('title') 
Banners List 
@endsection 
@extends('admin-layouts.main')
@section('style')

<link href="/assets/css/image-uploader.css" rel="stylesheet" type="text/css">

@endsection 
@section('rightbar-action') 
<button class="btn btn-success upload-image"><i class="feather icon-plus mr-1"></i>Upload</button>
 <!-- <button class="btn btn-primary-rgba design-image"><i class="feather icon-image mr-2"></i>Design Image</button> -->

@endsection 

 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">                
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
            <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title mb-0">All Banners</h5>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                 <li class="list-inline-item">
                                      <div class="form-group mb-0 amount-spent-select">
                                        <input type="text" id="search" class="form-control" placeholder="Search">
                                    </div>
                                </li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Banner Name</th>
                                    <th>Content</th>
                                    <th>Banner Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="image_content">
                            </tbody>
                        </table>
                    </div>
                </div>
                         

                </div>
                 <div class="card-footer pagination ml-3">
                 </div>
            </div>
        </div>
        <!-- End col -->
      
    </div>
    <!-- End row -->
</div>

@include('admin.banners.create')         

<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Tabledit js -->
<script src="/assets/js/image-uploader.js"></script>

<script src="/assets/js/admin/banners.js?v=<?php echo rand() ?> "></script>

@endsection 