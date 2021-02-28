$(document).ready(function() {
	// $('#ranking').DataTable({
	// 	"order": [1, 'desc']
	// })
	
    var t = $('#ranking').DataTable( {
        "order": [ 3, 'desc' ]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
	table.clear();
} );