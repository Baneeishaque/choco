/*
---------------------------------------
    : Custom - Form Datepicker js :
---------------------------------------
*/
"use strict";
$(document).ready(function() {
	$('#work_hors_from').click(function(){
		$('#datetimepicker1').datetimepicker('show');
	});
	$('#work_hors_to').click(function(){
		$('#datetimepicker2').datetimepicker('show');
	});
	$('#delivery_time_confirmation').click(function(){
		$('#total_delivery_time').datetimepicker('show');
	});
	$('#fromDate').click(function(){
		$('#datepicker1').datepicker('show');
	});
	$('#toDate').click(function(){
		$('#datepicker2').datepicker('show');
	});
	$('#datetimepicker1').datetimepicker({
		format: 'hh:mm a'
	});
	$('#datetimepicker2').datetimepicker({
		format: 'hh:mm a'
	});

	$('#total_delivery_time').datetimepicker({
		format: 'HH:mm'
	});
	$('.datepicker1').datepicker({
		language: 'en',
	    dateFormat: 'yyyy-mm-dd',
	});
	$('.datepicker2').datepicker({
		language: 'en',
	    dateFormat: 'yyyy-mm-dd',
	});
    /* --- Form - Datepicker -- */
    $('#default-date').datepicker({
		language: 'en',
		autoClose: true,
		datepicker: false,
	    dateFormat: 'dd/mm/yyyy',
	});
    $('#autoclose-date').datepicker({
	    language: 'en',
	    autoClose: true,
	    dateFormat: 'dd/mm/yyyy',
	});
    $('#month-view-date').datepicker({
	    language: 'en',
	    minView: 'months',
	    view: 'months',	    
	    dateFormat: 'MM yyyy'
	});
    $('#time-format').datepicker({
    	language: 'en',	    
	    timeFormat: 'hh:ii aa',
	    timepicker: true,
	    dateTimeSeparator: ' - '
	});
    $('#multi-date').datepicker({
	    language: 'en',
	    dateFormat: 'dd/mm/yyyy',
	    multipleDates: 3,  
	});
    $('#range-date').datepicker({
	    language: 'en',
	    dateFormat: 'dd/mm/yyyy',
	    range: true,
	    multipleDatesSeparator: ' - ',
	});
    $('#min-max-date').datepicker({
	    language: 'en',
	    dateFormat: 'dd/mm/yyyy',
	    minDate: new Date(),
	    position: 'top left',
	});
    var disabledDays = [0, 6];
	$('#disable-day-date').datepicker({
	    language: 'en',
	    dateFormat: 'dd/mm/yyyy',
	    position: 'top left',
	    onRenderCell: function (date, cellType) {
	        if (cellType == 'day') {
	            var day = date.getDay(),
	                isDisabled = disabledDays.indexOf(day) != -1;

	            return {
	                disabled: isDisabled
	            }
	        }
	    }
	});	
});