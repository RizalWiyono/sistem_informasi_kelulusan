$(document).ready(function() {
    $('#data_payment').DataTable( {
        sDom: 'Brtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "aaSorting": false,
        "bInfo": false,
        "bAutoWidth": false,
    } );
    $("#download_csv_wrapper").css("display", "none");
} );

