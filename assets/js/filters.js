$(document).ready(function () {
    // filter portfolio items by category when clicking on a filter button (li)
    $('.filters li').click(function () {
        $('.filters li').removeClass('active');
        $(this).addClass('active');
        var filter = $(this).attr('data-filter');
        $('.portfolio-items .item').each(function () {
            if ($(this).hasClass(filter.split('.')[1]) || filter == '*') {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});