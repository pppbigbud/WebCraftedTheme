// Obtenez l'URL de la page actuelle
var url = window.location.href;

// Obtenez tous les liens du menu
var links = document.querySelectorAll('.menuHeaderUl li');

// Parcourir tous les liens du menu
for (var i = 0; i < links.length; i++) {
    var link = links[i].querySelector('a');

    // Vérifiez si le lien correspond à l'URL actuelle
    if (link.href === url) {
        links[i].classList.add('active');
    }
}


