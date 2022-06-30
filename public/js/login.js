$(document).ready(() => {
    $('.login-form-toggle').click((e) => {
        e.preventDefault();
        $('#container-login').toggleClass('hidden');
        $('#container-register').toggleClass('hidden');
    })
});