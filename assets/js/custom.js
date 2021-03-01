// data table js start
$(document).ready(function() {
    // $('#student-table').DataTable({
    //     "scrollY": 500,
    //     "scrollX": true,
    //     "lengthMenu": [
    //         [5, 10, 25, 50, -1],
    //         [5, 10, 25, 50, "All"]
    //     ],
    //     search: "_INPUT_",
    //     searchPlaceholder: "Search..."
    // });

});

// data table js end
$(document).ready(function() {
    $(".menu-button").click(function() {
        $(this).toggleClass("open");
        $("body").toggleClass("open");
    });
    jQuery(".overlay-close").click(function() {
        jQuery(".menu-button").removeClass("open");
        jQuery("body").removeClass("open");
    });


});

$(document).ready(function() {
    $('.table').DataTable({
      //disable sorting on last column
      "scrollY": 500,
        "scrollX": true,
      "columnDefs": [
        { "orderable": false, "targets": 5 }
      ],
      "oLanguage": {
        "sEmptyTable": "My Custom Message On Empty Table"
    },
      
      dom: 'lBfrtip',
      buttons: [
          'csv'
      ],
      language: {
        //customize pagination prev and next buttons: use arrows instead of words
        'paginate': {
          'previous': '<span class="fa fa-chevron-left"></span>',
          'next': '<span class="fa fa-chevron-right"></span>'
        },
       // customize number of elements to be displayed
        "lengthMenu": 'Display <select>'+
        '<option value="2">2</option>'+
        '<option value="20">20</option>'+
        '<option value="30">30</option>'+
        '<option value="40">40</option>'+
        '<option value="50">50</option>'+
        '<option value="-1">All</option>'+
        '</select> results'
      }
    })  
} );