document.addEventListener('DOMContentLoaded', function() {
    var menuItems = document.querySelectorAll('.menuHeaderLi');

    menuItems.forEach(function(item) {
        item.addEventListener('click', function() {
            var href = item.getAttribute('data-href');
            window.location.href = href;
        });
    });
});



