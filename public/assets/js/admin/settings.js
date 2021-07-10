function Settings(){
	this.data               = {};
	this.element            = '';
  this.colspan            = 3;
  this.listingContainer   = $('#settings-content');
  this.pagination         = $('.pagination');
  this.limit              = 20;
  this.page               = 1;
}


Settings.prototype.fetchDataFailure = function(response) {
	console.log(response);
};




Settings.prototype.getSettings = function()
{
    var formData = new FormData(); 
    formData.append('limit', setting.limit );
    formData.append('page', setting.page );
    formData.append("search", $('#search').val() );
    var successCallback = setting.settingFetchDataSuccess;
    var failureCallback = setting.fetchDataFailure;
    app.ajaxRequest('/admin/get-settings-list','POST',formData,successCallback,failureCallback,false);
}

Settings.prototype.settingFetchDataSuccess = function(response) 
{
    
    setting.listingContainer.html("");
    setting.pagination.html("");

     if(response.data.results == undefined  || response.data.results.data.length == 0)
    {
       setting.listingContainer.append('<tr><td colspan="3" class="text-center">Settings not found.</td></tr>');
    }
    else
    {
      $.each(response.data.results.data,function(key,setting_data)
      {
          setting.listingContainer.append(
              '<tr id="'+setting_data.id+'">'+
              
              '<td>'+
              setting_data.key+
              '</td>'+
               '<td>'+
              setting_data.value+
              '</td>'+
             '<td>'+
                   '<div class="btn-group btn-group-sm ">'+
                     '<button type="button" data-id="'+setting_data.id+'" class="edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></button>'+
                  '</div>'+
              '</td>'+
          '</tr>')
        });
        
        setting.pagination.html(response.data.link);
    }
   

};

Settings.prototype.getSingleSetting = function(id)
{
    var formData = new FormData(); 
    formData.append('id', id );
    var successCallback = setting.singleSettingFetchDataSuccess;
    var failureCallback = setting.fetchDataFailure;
    app.ajaxRequest('/admin/get-single-setting','POST',formData,successCallback,failureCallback,false);
}


Settings.prototype.singleSettingFetchDataSuccess = function(response) 
{
   
    if(response.data.setting.input_type == "text")
    {
      $('#input_area').html('<input type="text" class="form-control zipcode" placeholder="Value" id="value" data-validation="required length"data-validation-length="1-20000" data-validation-error-msg="Value is required and it must minimum 1 to 200 charactors."/>');
    }
    else if(response.data.setting.input_type == "textarea")
    {
      $('#input_area').html('<textarea rows="8" class="form-control" id="value" data-validation="required length"data-validation-length="1-20000" data-validation-error-msg="Value is required and it must minimum 1 to 20000 charactors."></textarea>');
    }
    else if(response.data.setting.input_type == "date_time")
    {
      $('#input_area').html('<input type="date" class="form-control zipcode" placeholder="Value" id="value" data-validation="required length"data-validation-length="1-20000" data-validation-error-msg="Value is required and it must minimum 1 to 20000 charactors."/>');
    }
    else if(response.data.setting.input_type == "minutes")
    {
      $('#input_area').html('<input type="number" class="form-control zipcode" placeholder="Value" id="value" data-validation="required length"data-validation-length="1-2" data-validation-error-msg="Value is required and it must be maximum 2 numbers."/>');
    }
    else if(response.data.setting.input_type == "number")
    {
      $('#input_area').html('<input type="number" class="form-control zipcode" placeholder="Value" id="value" data-validation="required length"data-validation-length="1-2" data-validation-error-msg="Value is required and it must be maximum 2 numbers."/>');
    }
    else if(response.data.setting.input_type == "price")
    {
      $('#input_area').html('<input type="number" step=".01" class="form-control currency" placeholder="Value" id="value" data-validation="required length"data-validation-length="1-20000" data-validation-error-msg="Value is required and it must be minimum 1 to 20000 charactors."/>');
    }
    else if(response.data.setting.input_type == "checkbox")
    {
      $('#input_area').html('<input type="number" class="form-control" id="value" data-validation="required length"data-validation-length="1" data-validation-error-msg="Value is required and it must be only one number."/>');
    }
    else
    {
      $('#input_area').html('<input type="text" class="form-control zipcode" placeholder="Value" id="value" data-validation="required length"data-validation-length="1-20000" data-validation-error-msg="Value is required and it must minimum 1 to 200 charactors."/>');
    }
    $("#id").val(response.data.setting.id);
    $("#key").val(response.data.setting.key);
    $("#value").val(response.data.setting.value);
    $("#create-modal-label").html("Update  Setting ["+response.data.setting.key+"]");
    $(".create-submit-btn").html("Update");
    $("#create-modal").modal("show");
}

Settings.prototype.updateSetting = function(id)
{
    $(".create-submit-btn").attr("disabled", false).val("Loading");
    var formData = new FormData(); 
    formData.append('id', $("#id").val() );
    formData.append('key', $("#key").val() );
    formData.append('value', $("#value").val() );
    var successCallback = setting.updateSettingFetchDataSuccess;
    var failureCallback = setting.fetchDataFailure;
    app.ajaxRequest('/admin/update-setting','POST',formData,successCallback,failureCallback,false);
}

Settings.prototype.updateSettingFetchDataSuccess = function(response) 
{
   swal({
         title: 'Success!',
          text: ' Settings updated!',
          imageHeight: 30,
          animation: false
    });

   $(".create-submit-btn").attr("disabled", false).val("Create");
    $("#id").val("");
    $("#key").val("");
    $("#value").val("");
    $("#create-modal-label").html("Update Setting");
    $(".create-submit-btn").html("Update");
    $("#create-modal").modal("hide");
    setting.getSettings();

};


var setting = new Settings();



jQuery(function () 
{
    
    app.validate();
    setting.listingContainer.html(app.generateLoader(setting.colspan ));
    setting.getSettings();

    $(document).find(".pagination").on("click", "a",function(event){
      event.preventDefault();
      setting.page = $(this).attr('href').split('page=')[1];
      setting.getSettings();
     
    })

    
    

    $("#search").change(function(event)
    {
      event.preventDefault();
      setting.getSettings();
    });

    $(document).on("click", ".edit-button ",function(event){

      var id = $(this).data('id') 
      setting.getSingleSetting(id);
    });

    $('#create-modal').on('hidden.bs.modal', function () {
      $("#id").val("");
      $("#key").val("");
      $("#value").val("");
      $("#create-modal-label").html("Edit Setting");
      $(".create-submit-btn").html("Update");
    });

    $("#create-form").submit(function(event){
      event.preventDefault();
      var id =  $("#id").val();
      setting.updateSetting(id);
    
    })

   
});