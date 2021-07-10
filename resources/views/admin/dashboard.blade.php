@section('title') 
Dashboard
@endsection 
@extends('admin-layouts.main')
@section('style')
<!-- Apex css -->
<link href="{{ asset('assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet" type="text/css" />
<!-- jvectormap css -->
<link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css" />
<!-- Slick css -->
<link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-action')
    <!-- <select class="form-control"  id="period" name="period" >
        <option value="0">Today</option>
        <option value="1">Yesterday</option>
        <option value="2">Last 7 days</option>
        <option value="3">Last Month</option>
        <option value="4" selected>All Time</option>
    </select> -->
@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">              
    <!-- Start row -->
    
    <div class="row">
        <!-- Start col -->

        <div class="col-lg-12 col-xl-4">
            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-12"  id="payment_chart_div">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0">Sales by Payment Method</h5>
                                </div>
                                <div class="col-3">
                                   <!--  <div class="dropdown">
                                        <button class="btn btn-link l-h-20 p-0 font-18 float-right" type="button" id="widgetCategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetCategory">
                                            <a class="dropdown-item font-13" href="#">Refresh</a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                             <div id="apex-pie-chart" class="my-4"></div>
                        </div>
                        <div class="card-footer py-3 text-center">
                            <div class="row">
                                <div class="col-12 ">
                                    <p class="mb-1">Total Orders</p>
                                    <h4 class="mb-0 total_orders">0</h4>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
                <!-- Start col -->
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <h5 class="card-title mb-0">Total <br/>Revenue</h5>
                                </div>
                                <div class="col-7 text-right">
                                    <h4 class="mb-0 total_revenue">₹0.00 </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->                        
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-12 col-xl-8">
            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0 summary">0</h5>
                                </div>
                                <div class="col-3">
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-0">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <div class="revenue-box border-bottom mb-2">
                                        <h4 class="15_days_total_orders">0</h4>
                                        <p >Total Orders</p>
                                    </div>
                                    <div class="revenue-box">
                                        <h4 class="15_days_total_revenue">₹0.00</h4>
                                        <p >Total Revenue</p>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div id="apex-stacked-bar-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
                <!-- Start col -->
                <!-- <div class="col-lg-6">
                     <div class="row"> -->
                <!-- Start col -->
                <!-- <div class="col-lg-6">
                    <div class="card text-center m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Orders</h5>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="dash-analytic-icon"><i class="feather icon-shopping-bag success-rgba text-success"></i></p>
                            <h4 class="mb-3 total_orders">0</h4>
                           
                        </div>
                    </div>
                </div> -->
                <!-- End col -->
                <!-- Start col -->
                <!-- <div class="col-lg-6">
                    <div class="card text-center m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Products</h5>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="dash-analytic-icon"><i class="feather icon-package primary-rgba text-primary"></i></p>
                            <h4 class="mb-3 total_products">0</h4>
                            
                        </div>
                    </div>
                </div> -->
                <!-- End col -->
               
            <!-- </div>
                </div> -->
                <!-- End col -->
                <!-- Start col -->
                <!-- <div class="col-lg-6">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Most Popular Store</h5>
                        </div>
                        <div class="card-body">
                            <div class="best-product-slider">
                              
                              
                            </div>                                        
                        </div>
                    </div>
                </div> -->
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
        <!-- End col --> 
    </div>
    <!-- End row -->         
</div>  
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Apex js -->
<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/irregular-data-series.js') }}"></script>
<!-- Vector Maps js -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<!-- Dashboard js -->
<script src="{{ asset('assets/js/admin/dashboard.js') }}"></script>
@endsection 