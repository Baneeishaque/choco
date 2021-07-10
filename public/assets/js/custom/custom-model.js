/*
-----------------------------
    : Custom - Model js :
-----------------------------
*/
'use strict';
$(document).ready(function() {     
	$('.model-animation-btn').on('click', function(br) {	
		$('.modal .modal-dialog').attr('class', 'modal-dialog  ' + $(this).data("animation") + '  animated');
	});
});