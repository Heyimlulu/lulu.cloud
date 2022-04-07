$(() => {
    $(document).ready(function () {
        $('#fullpage').fullpage({
            // menu: '#menu',
            // lockAnchors: false,
            // showActiveTooltip: false,

            // Navigation arrows vertical 
            navigation: true,
            navigationPosition: 'right',
            navigationTooltips: ['Home', 'About Me', 'Portfolio', 'Contact'],

            // anchors
            // anchors: ['home', 'about me', 'portfolio', 'contact'],
        });
    });
})