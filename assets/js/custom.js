// data table js start
$(document).ready(function() {
    $('#example').DataTable({
        "scrollY": 500,
        "scrollX": true,
        "lengthMenu": [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, "All"]
        ],
        search: "_INPUT_",
        searchPlaceholder: "Search..."
    });


    // $(".menu-button").click(function() {
    //     $(this).toggleClass("open");
    //     $("body").toggleClass("open");
    // });
    // jQuery(".overlay-close").click(function() {
    //     jQuery(".menu-button").removeClass("open");
    //     jQuery("body").removeClass("open");
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