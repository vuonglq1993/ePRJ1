function toggleLike(element){
    event.preventDefault();
    var i = element.querySelector("i");
    if (i.classList.contains("bi-heart")) {
        i.classList.remove("bi-heart");
        i.classList.add("bi-heart-fill");
    } else {
        i.classList.remove("bi-heart-fill");
        i.classList.add("bi-heart");
    }
}
