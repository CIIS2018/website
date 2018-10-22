$(document).ready(function () {
    var studentTable = $('#studentTable').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
    });
    console.log('asdsa')

    studentTable.buttons().container()
        .appendTo('#studentTable_wrapper .col-md-6:eq(0)');




})