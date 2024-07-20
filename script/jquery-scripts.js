$(document).ready(function() {
    $('img.no-drag').on('dragstart', function(event) {
        event.preventDefault();
    });
});