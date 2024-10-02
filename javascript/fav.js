function toggleLike(element){
    const productId = element.getAttribute('data-product-id');

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'functions/save_like.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            console.log(xhr.responseText);
            const HeartIcon = element.querySelector("i");
            if (HeartIcon.classList.contains("bi-heart")) {
                HeartIcon.classList.remove("bi-heart");
                HeartIcon.classList.add("bi-heart-fill");
            } else {
                HeartIcon.classList.remove("bi-heart-fill");
                HeartIcon.classList.add("bi-heart");
            }
        } else if (xhr.readyState === 4) {
            console.error("Error with AJAX request. Status: " + xhr.status);
        }
    };
    xhr.send(`product_id=${productId}`);
    
}

function noActionLink() {
    document.querySelectorAll('a.no-action').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
        });
    });
}
