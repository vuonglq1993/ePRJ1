function toggleLike(element){
    var i = element.querySelector("i");
    if (i.classList.contains("bi-heart")) {
        i.classList.remove("bi-heart");
        i.classList.add("bi-heart-fill");
    } else {
        i.classList.remove("bi-heart-fill");
        i.classList.add("bi-heart");
    }
}

function noActionLink() {
    document.querySelectorAll('a.no-action').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
        });
    });
}
