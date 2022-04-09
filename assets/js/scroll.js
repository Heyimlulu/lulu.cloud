$(document).ready(function () {
    // Get all sections that have an ID defined
    let sections = $('section[id]');

    // Add an event listener listening for scroll
    $('body').scroll(function (e) {
        // Get current scroll position
        let scrollPosition = $(window).scrollTop();

        // Now we loop through sections to get height, top and ID values for each
        sections.each(function (i, section) {
            // Get the height of the section
            let sectionHeight = $(section).outerHeight();

            // Get the top position of the section
            let sectionTop = $(section).offset().top - 250;

            // Get the ID of the section
            let sectionID = $(section).attr('id');

            // If our current scroll position enters the space where current section on screen is, add .active class to corresponding navigation link, else remove it
            if (scrollPosition >= sectionTop && scrollPosition <= sectionTop + sectionHeight) {
                $('a[href="#' + sectionID + '"]').addClass('active');
            } else {
                $('a[href="#' + sectionID + '"]').removeClass('active');
            }
        });
    });
});