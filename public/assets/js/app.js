
function app(){
    this.appUrl = $('#app-url').val() + '/';
    this._token = $('#_token').val();
    this.notify = false;
}

Array.prototype.remove = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};

app.prototype.select2 = function() 
{
    $('.select2').select2();
};

app.prototype.showLoader = function(){
    document.querySelector( 
                  "body").style.visibility = "hidden"; 
                document.querySelector( 
                  "#loader").style.visibility = "visible"; 
}


app.prototype.closeLoader = function(){
    document.querySelector( 
      "#loader").style.display = "none"; 
    document.querySelector( 
      "body").style.visibility = "visible"; 
}

app.prototype.numberFormat = function(nStr) {
 
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '₹1' + ',' + '₹2');
    }
    return x1 + x2;

};

app.prototype.generateLoader  = function(cospan) {
   return '<tr style="margin: auto;"><td colspan="'+cospan+'" > <div class="table-loader"></div> </td></tr>';
};

app.prototype.past_dates = function() 
{
    $('.past_dates').daterangepicker({
        opens: 'left',
        startDate   : moment().subtract(6, 'days') ,
        endDate     : moment(),
        maxDate     : moment(),
        locale: {
                  format: 'YYYY-MM-DD'
                }
      }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });
};

app.prototype.fullDates = function() 
{
     $('.full_date').daterangepicker({
        opens: 'left',
        startDate   : moment().subtract(6, 'days') ,
        endDate     : moment().add(1, 'days') ,
        locale: {
                  format: 'YYYY-MM-DD'
                }
      }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });

};


app.prototype.resetAppUrl = function(){
    app.appUrl = $('#app-url').val() + '/';
}

app.prototype.appUrlSet = function(){
    app.appBaseUrl = $('#app-url').val() ;
}

/*number formatting*/
Number.prototype.formatMoney = function(c, d, t){
    var n = this, 
    c = isNaN(c = Math.abs(c)) ? 2 : c, 
    d = d == undefined ? "." : d, 
    t = t == undefined ? "," : t, 
    s = n < 0 ? "-" : "", 
    i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))), 
    j = (j = i.length) > 3 ? j % 3 : 0;
   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
 };

Number.prototype.pad = function(n) {
    return ('0'+this).slice(-2);
}

String.prototype.humanDate = function(c,d,t){
    if(this == null || this == '') return;
    var date = new Date(this);
    return (date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear();
}

app.prototype.DateFormat  = function(inputDate) 
{
    var date = new Date(inputDate);
    if (!isNaN(date.getTime())) 
    {
        var day = date.getDate().toString();
        var month = (date.getMonth() + 1).toString();

        return date.getFullYear() + '-' +  (month[1] ? month : '0' + month[0]) + '-' +
           (day[1] ? day : '0' + day[0]) ;
    }
}

String.prototype.humanDateTime = function(c,d,t){
    if(this == null || this == '') return;
    var date = new Date(this);
    var amOrPm = (date.getHours() < 12) ? "AM" : "PM";
    var hour = (date.getHours() < 12) ? date.getHours() : date.getHours() - 12;           
    return (date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear() + ' ' + hour.pad() + ':' + date.getMinutes().pad() + ' ' + amOrPm;
}

String.prototype.formatRemove = function(c,d,t){
    return this.replace(',','').replace('₹','').replace('.00','');
}

String.prototype.firstLettersCap = function() {
    return this.charAt(0).toUpperCase() + this.slice(1).toLowerCase();
}



 String.prototype.stripSymbols = function(c,d,t){
    return this.replace('0$','').replace('$','').replace(/%/g,'').replace(/,/g,'').replace('x','');
 }

 String.prototype.makeNumber = function(){
    return parseFloat(this).toFixed(2);
 }

 String.prototype.upperCase = function(){
    return this.replace(/\w\S*/g, function(txt){
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    });
 }

Date.prototype.addDays = function(days) {
    var date = new Date(this.valueOf());
    date.setDate(date.getDate() + days);
    return date;
}



app.prototype.ajaxRequest = function(url,requestType,data,successCallback,failureCallback,processData){

    app.resetAppUrl();
    if(url !== undefined && url.indexOf('http') == -1){
        if(url.substring(0,1) != '/')
            url = app.appUrl + url
        else
             url = app.appUrl + url.substring(1);
    }


    $.ajax({
        url : url,
        method : requestType,
        data : data,
        headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
        processData : (processData !== undefined) ? processData : false,
        contentType: false,
        success : function(response)
        {
            if(successCallback != null){
                successCallback(response);
            }
            

        },
        error : function(err){
           
            if(err.status == "401")
            {
                $("#logout-me").trigger('click');
            }
            else if(err != null){
                failureCallback(err);
            }
            
        }

    });
}

app.prototype.displayRequestErrors = function(requestErrors,status){

    $('.validation-err').remove();
    $.each(requestErrors,function(className,msg)
    {
       
        if( $('.' + className.split('.').join('_')).length > 0 ){
            $('.' + className.split('.').join('_')).addClass('error');
            $('.' + className.split('.').join('_')).closest('.form-field').removeClass('has-success').append('<span class="help-block form-error">' + msg[0] + '</span>');
        }else
        {
            $('.' + className).closest('.form-field').removeClass('has-success').append('<span class="help-block form-error">' + msg[0] + '</span>');
        }

        
    });
    
}

app.prototype.removeErrors = function() 
{
    if( $(".form-error").length > 0)
    { 
        $(".form-error").remove(); 
    }
};

app.prototype.cleanValidationMessage = function(element){
    element.closest('.form-field').find('.validation-err').remove();
}



app.prototype.notifyClose = function(){
    try{

        $('body').removeClass('wait-loader');
        $('body').find('.alert-info.animated').remove();

        app.notify.close();
    }catch(err){
        return false;
    }
}

app.prototype.wait = function(msg){
    $('body').addClass('wait-loader');
    msg = ( msg !== undefined ) ? msg : 'Please wait while the process is completing..';

    app.notify = new PNotify( {
            title: 'Success notice', text: msg , type: 'success'
        });
}

app.prototype.success = function(msg){
      app.notify = new PNotify( {
            title: 'Success notice', text: msg , type: 'success'
        });
}

app.prototype.warning = function(msg){
      app.notify = new PNotify( {
            title: 'Warning notice', text: msg , type: 'warning'
        });

}

app.prototype.error = function(msg){
        app.notify = new PNotify( {
            title: 'Error notice', text: msg , type: 'error'
        });
}



app.prototype.greaterThanError = function(value,compareValue,msg){
    if(parseInt(value) > parseInt(compareValue)){
        app.error(msg);
        return true;
    }
    return false;
}

app.prototype.lessThanError = function(value,compareValue,msg){
    if(value < compareValue)
        app.error(msg);
}

app.prototype.makeDisabled = function(){
    $('.make-disabled').prop('disabled',true).val('');
    $('.make-readonly').prop('readonly',true);
}







app.prototype.validate = function(){
    var English = {
        badAlphaNumeric: 'This field is not valid ',
        badAlphaNumericExtra: ' ',
        andSpaces: '  ',
        badInt: 'This field is not valid ',
        requiredField: 'This field is required.',
    };
    $.validate({
            language : English,
            modules : 'location,date,security,file,logic',
            scrollToTopOnError : true,

            
    });

    $.formUtils.addValidator({
        name : 'greaterThanZero',
        validatorFunction : function( value ){
            return parseInt(value) > 0;
        }
    });

    $.formUtils.addValidator({
        name : 'validStateCountry',
        validatorFunction : function( state ){
            if( state == 0 ) return false;
            return true;
        }
    });

    $.formUtils.addValidator({
        name : 'greaterThan48',
        validatorFunction : function(value,$element,config,$language,$form){
            return value > 48
        }
    });

    $.formUtils.addValidator({
        name : 'sixMultiple',
        validatorFunction : function(value,$element,config,$language,$form){
            if(value % 6 > 0) return false;
            return true;
        }
    });

    $.formUtils.addValidator({
        name : 'isMultiple100',
        validatorFunction : function(value,$element,config,$language,$form){
            value = value.stripSymbols();
            return (value%1000 == 0) ? true : false
        }
    });
}

app.prototype.numberMask = function(){
    $('body').find('.only-number').inputmask({
        alias: 'numeric',
        allowMinus: false,
        digits: 2,
        max:1000000, 
        rightAlign : false,
        groupSeparator: ",",
        autoGroup: true,
    }).attr('placeholder','0');
}

app.prototype.decimalMask = function(){
    $('body').find('.decimal').inputmask('decimal', {
        radixPoint: ".",
        groupSeparator: "",
        digits: 2,
        autoGroup: true,
        prefix: '', 
        rightAlign: false,
        digitsOptional: false,
        oncleared: function () { 
            $(this).val(''); 
        }
    })
}

app.prototype.currencyMask = function(){
    $('body').find('.currency').inputmask('decimal', {
        radixPoint: ".",
        groupSeparator: ",",
        digits: 2,
        autoGroup: true,
        prefix: '₹', 
        rightAlign: false,
        digitsOptional: false,
        oncleared: function () { 
            $(this).val(''); 
        },
        onComplete: function(){
            var inputValue = $(this).val();
            if(inputValue == '₹0') $(this).val('');
        }
    }).attr('placeholder','₹0.00');
}

app.prototype.sqftMask = function(){
    $('body').find('.sqft').inputmask('decimal', {
        radixPoint: ".",
        groupSeparator: ",",
        digits: 2,
        autoGroup: true,
        prefix: '', 
        rightAlign: false,
        digitsOptional: false,
        oncleared: function () { 
            $(this).val(''); 
        },
        onComplete: function(){
            var inputValue = $(this).val();
            if(inputValue == '$0') $(this).val('');
        }
    }).attr('placeholder','0.00');
}

app.prototype.percentageMask = function(){
    $('body').find('.percentage').inputmask('decimal', {
        radixPoint: ".",
        groupSeparator: ",",
        digits: 2,
        placeholder: "0",
        autoGroup: true,
        suffix: '%', 
        rightAlign: false,
        digitsOptional: false,
        showMaskOnHover : true,
        oncleared: function () { 
            $(this).val(''); 
        },
    }).blur(function() {
        var inputValue = $(this).val();
        inputValue = inputValue.replace(/[^0-9.-\s]/gi, '');
        if(inputValue == ''){
            $(this).val('');
        }

        if( !$(this).hasClass('gt-100') ){
            if(inputValue > 100.00) 
                $(this).val('100.00%');
        }
    }).click(function() {
        var inputValue = $(this).val();
        inputValue = inputValue.replace(/[^0-9.-\s]/gi, '');
        if(inputValue == '' ||inputValue == '0.00%'){
            $(this).val('');
        }
    });
}

app.prototype.multiplesMask = function(){
    $('body').find('.multiple').inputmask('integer',{
        rightAlign : false,
        suffix : 'x',
        autoGroup : false,
        digits: 2,
        digitsOptional: true,
        radixPoint: ".",
    });
}

app.prototype.otp = function(){
    $("body").find('.otp').inputmask("mask", {
        "mask" : "999999"
    });
}

app.prototype.setPhoneMask = function(){
    $(".phone").inputmask("mask", {
            "mask": "9999-999-999"
    });  
}

app.prototype.setZipCodeMask = function(){
    $("body").find('.zipcode').inputmask("mask", {
        "mask" : "999999"
    });
}
app.prototype.setEmailMask = function(){
    $("body").find('.email').inputmask({
        mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
        greedy: false,
        onBeforePaste: function (pastedValue, opts) {
          pastedValue = pastedValue.toLowerCase();
          return pastedValue.replace("mailto:", "");
        },
        definitions: {
          '*': {
            validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
            casing: "lower"
          }
        }
      });
}

app.prototype.setAllMasks = function(){
   
    app.numberMask();
    app.currencyMask();
    app.sqftMask();
    app.decimalMask();
   
    app.setPhoneMask();
    app.setZipCodeMask();
    app.setEmailMask();
   
}



app.prototype.popOver = function(){
        $('[data-toggle="popover"]').popover();
}




app.prototype.showRandomPassword = function(el){
    var length = 8,
        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    
    $('body').find('.pass-text').val(retVal);
    $('body').find('.copy-pass-btn').removeClass('hide');
}

app.prototype.inactiveReset = function(){
    if($(".lgd-in").length == 0) return;
    if(app.inactiveTimer !== undefined)
        clearTimeout(app.inactiveTimer);
    app.inactiveTimer = setTimeout(app.inactiveLogin, 900000);
};


app.prototype.inactiveLogin = function(){
    if($(".lgd-in").length == 0) return;
    $('#inactiveAlertModal').modal('show'); 
    app.inactiveTimer = setTimeout(function(){
        window.location.href = app.appUrl + 'logout';
    },180000);
}






var app = new app();

$('.custom-file-input').on('change',function(e){
  var fileName      = $(this)[0].files[0].name;
  var nextSibling   = e.target.nextElementSibling
  nextSibling.innerText = fileName
})