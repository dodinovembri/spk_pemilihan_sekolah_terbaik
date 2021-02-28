$(document).ready(function() {
    $('#ranking').DataTable( {
    	"ordering": false,
        "order": [[ 2, "desc" ]],
        "paging": false
    } );
} );