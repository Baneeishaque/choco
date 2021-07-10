/*
---------------------------------------
    : Custom - Table Editable js :
---------------------------------------
*/
"use strict";




$(document).ready(function() {
    /* -- Table - Editable -- */
    $('#data-table').Tabledit({
        columns: {
            identifier: [0, 'id'],                    
            editable: [[1, 'name']]
        }
    });
    
});