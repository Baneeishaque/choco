function Image(){
	this.data               = {};
	this.element            = '';
  this.listingContainer   = $('#image_content');
  this.pagination         = $('.pagination');
  this.limit              = 10;
  this.page               = 1;
  this.preloaded          = {};
  this.formData           = {};
}

Image.prototype.init = function() 
{

  app.validate();


  
};

Image.prototype.fetchDataFailure = function(response) {
	console.log(response);
};




Image.prototype.getImage = function()
{

    var formData = new FormData(); 
    formData.append('limit', image.limit );
    formData.append('page', image.page );
    formData.append('search', $('#search').val());
    var successCallback = image.imageFetchDataSuccess;
    var failureCallback = image.fetchDataFailure;
    app.ajaxRequest('/admin/get-banner-image-list','POST',formData,successCallback,failureCallback,false);
}

Image.prototype.imageFetchDataSuccess = function(response) 
{
    
    image.listingContainer.html("");
    image.pagination.html("");

     if(response.data.results == undefined  || response.data.results.data.length == 0)
     {
      image.listingContainer.append('<tr><td colspan="4" class="text-center">Banner not found.</td></tr>');
    }
    else
    {
      $.each(response.data.results.data,function(key,image_data)
      {
        
        image.listingContainer.append(
          '<tr id="'+image_data.id+'">'+
          '<td>'+
          image_data.name+
          '</td>'+
          '<td>'+
          image_data.offer_content+
          '</td>'+
          '<td>'+
          '<img src="'+image_data.image+'" style="width:50px;" class="img-fluid" alt="banner image"/>'+
          '</td>'+
         '<td>'+
                   '<div class="btn-group btn-group-sm ">'+
                     '<button type="button" data-id="'+image_data.id+'" class="edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></button>'+
                     '<button type="button" data-id="'+image_data.id+'" class="delete-button btn btn-sm btn-danger" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>'+
                   '</div>'+
          '</td>'+
          
         
      '</tr>')
    });
    
    image.pagination.html(response.data.link);
    }
   

};


Image.prototype.getBannerImage = function(id)
{
    var formData = new FormData(); 
    formData.append('id', id );
    var successCallback = image.singleBannerFetchDataSuccess;
    var failureCallback = image.fetchDataFailure;
    app.ajaxRequest('/admin/get-banner-image','POST',formData,successCallback,failureCallback,false);
}

Image.prototype.singleBannerFetchDataSuccess = function(response) 
{
    $("#id").val(response.data.image.id);
    $("#name").val(response.data.image.name);
    $("#priority").val(response.data.image.priority);
    $("#offer_content").val(response.data.image.offer_content);
    $("#image-view").attr('src',response.data.image.image);
    $("#image-label").html("Choose file");
    $("#create-modal-label").html("Update Banner");
    $(".create-submit-btn").html("Update");
    $("#create-modal").modal("show");
}

Image.prototype.updateBannerImage = function(id)
{
    $(".create-submit-btn").attr("disabled", false).val("Loading");
    var formData =  image.formData;
    formData.append('id', id );
    var successCallback = image.updateBannerImageFetchDataSuccess;
    var failureCallback = image.fetchDataFailure;
    app.ajaxRequest('/admin/update-banner-image','POST',formData,successCallback,failureCallback,false);
}

Image.prototype.updateBannerImageFetchDataSuccess = function(response) 
{
  $(".create-submit-btn").attr("disabled", false).val("Update");
  $("#create-modal-label").html("Update Banner");
  $(".create-submit-btn").html("Update");
  if(response.success == true)
  {
   swal({
         title: 'Success!',
          text: ' Banner updated!',
          imageHeight: 30,
          animation: false
    });
    $("#id").val("");
    $("#name").val("");
    $("#priority").val("");
    $("#offer_content").val("");
    $("#image").val("");
    $("#create-modal").modal("hide");

    image.getImage();
  }
  else
  {
    app.error(response.message)
  }

};

Image.prototype.deleteBannerImage = function(id)
{
    var formData = new FormData(); 
    formData.append('id', id );
    var successCallback = image.deleteBannerImageFetchDataSuccess;
    var failureCallback = image.fetchDataFailure;
    app.ajaxRequest('/admin/delete-banner-image','POST',formData,successCallback,failureCallback,false);
}


Image.prototype.deleteBannerImageFetchDataSuccess = function(response) 
{
  $(".delete-button").attr("disabled", false).val("Delete");
  if(response.success == true)
  {
      image.getImage();
      swal({
         title: 'Success!',
          text: 'Banner Deleted!',
          imageHeight: 30,
          animation: false
      });
  }
  else
  {
      swal({
            title: 'Info!',
            text: response.message,
            type:'info',
            imageHeight: 30,
            animation: false
      });
  }


};

Image.prototype.createBannerImage = function(id)
{
    $(".create-submit-btn").attr("disabled", true).val("Loading");
    var formData =  image.formData
    var successCallback = image.createBannerImageFetchDataSuccess;
    var failureCallback = image.fetchDataFailure;
    app.ajaxRequest('/admin/create-admin-banner-image','POST',formData,successCallback,failureCallback,false);
}

Image.prototype.createBannerImageFetchDataSuccess = function(response) 
{
      $(".create-submit-btn").attr("disabled", false).val("Create");
      $("#create-modal-label").html("Create  Banner");
      $(".create-submit-btn").html("Create");
      if(response.success == true)
      {
         swal({
              title: 'Success!',
              text: ' Image created!',
              imageHeight: 30,
              animation: false,
              type: 'success',
         });
          
          
          $("#name").val("");
          $("#priority").val("");
          $("#offer_content").val("");
          $("#image").val("");
          $("#create-modal").modal("hide");

          image.getImage();

      }
      else
      {
        app.error(response.message)
      }
  
};


var image = new Image();



jQuery(function () 
{
  

    image.init();

    image.listingContainer.html(app.generateLoader(1 ));
    image.getImage();

    $(document).find(".pagination").on("click", "a",function(event){
      event.preventDefault();
      image.page = $(this).attr('href').split('page=')[1];
      image.getImage();
     
    })

     $(document).on('click','.upload-image',function(){
      $("#create-modal-label").html("Create  Banner");
      $(".create-submit-btn").html("Create");
      $("#create-modal").modal("show");

    });

      $(document).on('click','.design-image',function(){
      window.location.href = '/admin/cropper';  
    });
     
    $(document).on("click", ".delete-button ",function(event)
    {
      event.preventDefault();
      var id = $(this).data('id') 
      swal({
        title: 'Are you sure?',
        text: 'The selected Banner will be deleted!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, keep it'
      }).then((result) => {
        if (id) {
          image.deleteBannerImage(id);  
        } else {
          swal(
            'Cancelled',
            'Your data is safe :)',
            'error'
          )
        }
      }) 
    });

    $(".right-action").click(function(){

      $("#id").val("");
      $("#name").val("");
      $("#priority").val("");
      $("#offer_content").val("");
      $("#image-label").html("Choose file");
      $("#create-modal-label").html("Create  Image");
      $(".create-submit-btn").html("Create");
      $("#create-modal").modal("show");

    });
    
    
    $('#create-modal').on('hidden.bs.modal', function () {
     
      $("#id").val("");
      $("#name").val("");
      $("#priority").val("");
      $("#offer_content").val("");
      $("#image-label").html("Choose file");
      $("#create-modal-label").html("Create  Image");
      $(".create-submit-btn").html("Create");
    });


    $("#create-form").submit(function(event){
        event.preventDefault();
        event.stopPropagation();
        image.formData =  new FormData(this);
        var id =  $("#id").val();
        if(id.length == 0 || id == '')
        {
          image.createBannerImage();
        }
        else
        {
          image.updateBannerImage(id);
        }       
    })

    $(document).on("click",".edit-button ",function(event){

      var id = $(this).data('id') 
      image.getBannerImage(id);
    });

    $("#search").change(function(event)
    {
      event.preventDefault();
      image.getImage();
    });

   
});