function Dashboard()
{
  this.data               = {};
  this.element            = '';
}
/**
 * 
 */
Dashboard.prototype.init = function() 
{
  
};
Dashboard.prototype.fetchDataFailure = function(response) 
{
  console.log(response);
};
Dashboard.prototype.getDashboard = function()
{
    
    var formData = new FormData(); 
    formData.append('option_id',$('#period').val() );
    var successCallback = dashboard.updateDashboardFetchDataSuccess;
    var failureCallback = dashboard.fetchDataFailure;
    app.ajaxRequest('/admin/dashboard','POST',formData,successCallback,failureCallback,false);
}

Dashboard.prototype.updateDashboardFetchDataSuccess = function(response) 
{
     $(".total_revenue").html('₹'+response.data.total_revenue);
     $(".total_orders").html(response.data.total_orders);
     $(".total_products").html(response.data.total_products);
     $(".15_days_total_orders").html(response.data.days_15_total_orders);
     $(".15_days_total_revenue").html(response.data.days_15_total_revenue);
     $(".summary").html(response.data.summary);
     dashboard.setChart(response.data);
     dashboard.setCircleChart(response.data);
     dashboard.slider(response.data);
};
Dashboard.prototype.setChart = function(data) {
  
   /* Apex Stacked Bar Chart */
    var options = {
        chart: {
            height: 260,
            type: 'bar',
            stacked: true,
            toolbar: {
                show: false
            },
            zoom: {
                enabled: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '20%',
            },
        },
        colors: ['#0080ff','#d4d8de'],
        series: [{
            name: 'Orders',
            data: data.last_15_days_orders.total
        }],        
        xaxis: {
            type: 'date',
            categories: data.last_15_days_orders.date,
            axisBorder: {
                show: true, 
                color: 'rgba(0,0,0,0.05)'
            },
            axisTicks: {
                show: true, 
                color: 'rgba(0,0,0,0.05)'
            }
        },
        grid: {
            row: {
                colors: ['transparent', 'transparent'], opacity: .2
            },
            borderColor: 'rgba(0,0,0,0.05)'
        },
        legend: {
            show: false
        },
        fill: {
            opacity: 1
        },
    }
    var chart = new ApexCharts(
        document.querySelector("#apex-stacked-bar-chart"),
        options
    );        
    chart.render();
};

Dashboard.prototype.setCircleChart = function(data) 
{
  if(data.order_by_payment_options.options != undefined)
  {
    var options = {
        chart: {
            type: 'donut',
            width: 240,
        },
        plotOptions: {
            pie: {
                donut: {
                    size: "85%"
                }
            }
        },
        dataLabels: {
            enabled: false
        },
        colors: ['#0080ff','#18d26b','#d4d8de'],
        series:  data.order_by_payment_options.orders,
        labels: data.order_by_payment_options.options,
        legend: {
            show: true,
            position: 'bottom'
        },
        responsive: [{
            breakpoint: 420,
            options: {
                chart: {
                    width: 220,
                },
            },
        }]
    }
    
      $("#payment_chart_div").show();
      var chart = new ApexCharts(
        document.querySelector("#apex-pie-chart"),
        options
      );        
      chart.render();
    }
    else
    {
      $("#payment_chart_div").hide();
    }
};

Dashboard.prototype.slider = function(data) 
{
    
    $(".best-product-slider").empty();
    $.each(data.stores,function(key,store)
    {
        $(".best-product-slider").append(
            '<div class="best-product-slider-item">'+
                '<div class="row">'+
                '<div class="col-4">'+
                    '<img src="'+store.logo+'" class="img-fluid" alt="logo">'+
                '</div>'+
                '<div class="col-8">'+
                    '<h5 class="mt-2 mb-4 font-16">'+store.name+'</h5>'+
                    '<ul class="list-inline mb-0">'+
                        '<li class="list-inline-item pr-3 border-right">'+
                            '<h4 class="mb-0">'+store.order+'</h4>'+
                            '<p class="mb-0">Order</p>'+
                        '</li>'+
                        '<li class="list-inline-item">'+
                            '<h4 class="mb-0">'+store.grand_total+'</h4>'+
                            '<p class="mb-0">Amount</p>'+
                        '</li>'+
                    '</ul>'+
                '</div>'+
            '</div>'+
        '</div>');
    });

  if(data.stores.length == 0)
  {
    $('.best-product-slider').append('<div class="row"><div class="col-12 text-center">No Stores Found</div></div>');
  }
  else
  {
    if(slick_re_initialize == false)
    {
        $( ".best-product-slider" ).promise().done(function() {
            $('.best-product-slider').slick({
            arrows: true,
            dots: false,
            infinite: true,
            adaptiveHeight: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '<i class="feather icon-chevron-left"></i>',
            nextArrow: '<i class="feather icon-chevron-right"></i>'
        });
      });
    }
    else
    {
        $('.best-product-slider').slick('unslick');
        $('.best-product-slider').not('.slick-initialized').slick({
            arrows: true,
            dots: false,
            infinite: true,
            adaptiveHeight: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '<i class="feather icon-chevron-left"></i>',
            nextArrow: '<i class="feather icon-chevron-right"></i>'
        }); 
    }
  } 
};

var dashboard           = new Dashboard();
var slick_re_initialize = false;
jQuery(function () 
{ 
    dashboard.getDashboard();
    $("#period").change(function(event)
    {  
        slick_re_initialize     = true;
        event.preventDefault();
        dashboard.getDashboard();
    })
});


