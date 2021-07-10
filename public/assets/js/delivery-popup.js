function Popup(){
  this.data               = {};
  this.element            = '';
 

}

Popup.prototype.init = function() 
{
  
};

Popup.prototype.fetchDataFailure = function(response) {
  popup.popupdata(response.data);
};

Popup.prototype.getPopup = function()
{
    var successCallback = popup.updatePopupFetchDataSuccess;
    var failureCallback = popup.fetchDataFailure;
    app.ajaxRequest('/delivery-manager/popup-data','POST',successCallback,failureCallback,false);
}

Popup.prototype.updatePopupFetchDataSuccess = function(response) 
{

}


Popup.prototype.popupdata    = function(data) {
    if(data.unassigned_order > 0 && data.delay_order == 0)
     {
      $(document).ready(function(){
          $("#myModal").modal();
          $("#modal2").css('display','none');
          document.getElementById('xyz').play();
       });
       setInterval(function () {
          $('#myModal').modal('show');
          $("#modal2").css('display','none');
          document.getElementById('xyz').play();
       }, 20000);
     }
     else if(data.unassigned_order == 0 && data.delay_order > 0)
     {
      $(document).ready(function(){
        $("#myModal").modal();
        $("#modal1").css('display','none');
        document.getElementById('xyz').play();
      });
      setInterval(function () {
          $('#myModal').modal('show');
          $("#modal1").css('display','none');
          document.getElementById('xyz').play();
      }, 20000);
     }
     else if(data.unassigned_order > 0 && data.delay_order > 0)
     {
      $(document).ready(function(){
        $("#myModal").modal();
        document.getElementById('xyz').play();
      });
      setInterval(function () {
          $('#myModal').modal('show');
          document.getElementById('xyz').play();
      }, 20000);
     }
     else
     {
        //
     }
};

var popup = new Popup();



jQuery(function () 
{
  if(notification_popup_flag == true)
  {
      popup.getPopup();
  }
});




