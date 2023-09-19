$(document).ready(function () {
    $('.open-sidebar').click(function () {
        $('.mobile-menu').toggle('hidden');
    });

    $('.close-sidebar').click(function () {
        $('.mobile-menu').toggle('hidden');
    });

    $('#user-menu-button').click(function () {
        $('#user-menu').toggle('hidden');
    });
});
