function Popup(){
    this.data               = {};
    this.element            = '';
    this.listingContainer   = $('#notification-list');
    this.userlistingContainer = $('#user-contact-list');
    this.deliveryboylistingContainer = $('#delivery-boy-contact-list');
    this.storelistingContainer = $('#store-contact-list');
  }
  
  Popup.prototype.init = function() 
  {
    
  };
  
  Popup.prototype.fetchDataFailure = function(response) {
    popup.popupdata(response.data);
    popup.notificationData(response.data);
    popup.contactData(response.data);
    popup.countData(response.data);
  };
  
  Popup.prototype.getPopup = function()
  {
      var successCallback = popup.updatePopupFetchDataSuccess;
      var failureCallback = popup.fetchDataFailure;
      app.ajaxRequest('/admin/popup-data','POST',successCallback,failureCallback,false);
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

  Popup.prototype.getCount = function()
  {
      var successCallback = popup.updateCountFetchDataSuccess;
      var failureCallback = popup.fetchDataFailure;
      app.ajaxRequest('/admin/count-notification','POST',successCallback,failureCallback,false);
  }

  Popup.prototype.updateCountFetchDataSuccess = function(response) 
  {

  }
  
  
  Popup.prototype.countData    = function(data) {
       if(data.count > 0)
       {
        $('#count').html(data.count);
       }
       else if(data.count == 0)
       {
        $('#count').css('display','none');
       }
  };

  Popup.prototype.getNotification = function()
  {
      var successCallback = popup.updateNotificationFetchDataSuccess;
      var failureCallback = popup.fetchDataFailure;
      app.ajaxRequest('/admin/cash-request-notification','POST',successCallback,failureCallback,false);
  }

  Popup.prototype.updateNotificationFetchDataSuccess = function(response) 
  {

  }
  
  
  Popup.prototype.notificationData    = function(data) {
       if(data.notification_count > 0)
       {
        $( document ).ready(function() {
            $('#notifications').click(function( event ) {
                $('#notification-list').toggleClass('open');
            });
            $.each(data.results,function(key,cash)
              {
              popup.listingContainer.append(
                '<div><a href="/admin/store-cash-requests"><div class="noty-manager-list-item noty-manager-list-item-error"><div class="activity-item"> <i class="fa fa-money text-success"></i> <div class="activity">'+cash.store.name+' requested a payment of Rs.'+cash.amount+' </div> </div></div></a></div>'
              );
            });
        });
       }
       else if(data.notification_count == 0)
       {
        $('#panel-footer').css('display','none');
        popup.listingContainer.append(
          '<div class="panel-footer" style="background-color:white; text-align:center;">No New Requests.</div>'
        );
       }
  };

  Popup.prototype.getContact = function()
  {
      var successCallback = popup.updateContactFetchDataSuccess;
      var failureCallback = popup.fetchDataFailure;
      app.ajaxRequest('/admin/contact-notification','POST',successCallback,failureCallback,false);
  }

  Popup.prototype.updateContactFetchDataSuccess = function(response) 
  {

  }
  
  
  Popup.prototype.contactData    = function(data) {
       if(data.user_count > 0)
       {
        $( document ).ready(function() {
            $.each(data.user,function(key,user)
              {
              popup.userlistingContainer.append(
                '<div><a href="/admin/contact-us"><div class="noty-manager-list-item noty-manager-list-item-error"><div class="activity-item"> <i class="fa fa-user text-success"></i> <div class="activity">'+user.user.name+' send a new message on subject '+user.subject+' </div> </div></div></a></div>'
              );
            });
        });
       }
       if(data.user_count == 0)
       {
        $('#user-panel-footer').css('display','none');
        popup.userlistingContainer.append(
          '<div class="panel-footer" style="background-color:white; text-align:center;">No New Messages.</div>'
        );
       }
       if(data.delivery_boy_count > 0)
       {
        $( document ).ready(function() {
            $.each(data.delivery_boy,function(key,delivery_boy)
              {
              popup.deliveryboylistingContainer.append(
                '<div><a href="/admin/delivery-contact-us"><div class="noty-manager-list-item noty-manager-list-item-error"><div class="activity-item"> <i class="fa fa-user text-success"></i> <div class="activity">'+delivery_boy.user.name+' send a new message on subject '+delivery_boy.subject+' </div> </div></div></a></div>'
              );
            });
        });
       }
       if(data.delivery_boy_count == 0)
       {
        $('#delivery-panel-footer').css('display','none');
        popup.deliveryboylistingContainer.append(
          '<div class="panel-footer" style="background-color:white; text-align:center;">No New Messages.</div>'
        );
       }
       if(data.store_count > 0)
       {
        $( document ).ready(function() {
            $.each(data.store,function(key,store)
              {
              popup.storelistingContainer.append(
                '<div><a href="/admin/restaurant-contact-us"><div class="noty-manager-list-item noty-manager-list-item-error"><div class="activity-item"> <i class="fa fa-user text-success"></i> <div class="activity">'+store.user.name+' send a new message on subject '+store.subject+' </div> </div></div></a></div>'
              );
            });
        });
       }
       if(data.store_count == 0)
       {
        $('#store-panel-footer').css('display','none');
        popup.storelistingContainer.append(
          '<div class="panel-footer" style="background-color:white; text-align:center;">No New Messages.</div>'
        );
       }
  };
  
  var popup = new Popup();
  
  
  
  jQuery(function () 
  {
    popup.getNotification();
    popup.getContact();
    popup.getCount();
    if(notification_popup_flag == true)
    {
        popup.getPopup();
    }
  });

 
  
  
  