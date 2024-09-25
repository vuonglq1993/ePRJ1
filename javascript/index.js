$(document).ready(function () {
    var multipleCardCarousel = document.querySelector("#carouselExample");
    if (window.matchMedia("(min-width: 768px)").matches) {
        var carousel = new bootstrap.Carousel(multipleCardCarousel, {
            interval: false,
        });
        var carouselWidth = $(".trending-carousel-inner")[0].scrollWidth;
        var cardWidth = $(".trending-carousel-item").width();
        var scrollPosition = 0;
        console.log("carouselWidth:", carouselWidth);
        console.log("cardWidth:", cardWidth);

        $("#carouselExample .trending-carousel-control-next").on("click", function () {
            if (scrollPosition < carouselWidth - cardWidth * 4) {
                scrollPosition += cardWidth;
                $("#carouselExample .trending-carousel-inner").animate(
                    { scrollLeft: scrollPosition },
                    600
                );
            }
        });

        $("#carouselExample .trending-carousel-control-prev").on("click", function () {
            if (scrollPosition > 0) {
                scrollPosition -= cardWidth;
                $("#carouselExample .trending-carousel-inner").animate(
                    { scrollLeft: scrollPosition },
                    600
                );
            }
        });
    } 
    else {
        $(multipleCardCarousel).addClass("slide");
    }

    var collectionmultipleCardCarousel = document.querySelector("#carouselExampleIndicators");
    if (window.matchMedia("(min-width: 768px)").matches) {
        var carousel = new bootstrap.Carousel(collectionmultipleCardCarousel, {
            interval: false,
        });
        var collectioncarouselWidth = $(".collection-carousel-inner")[0].scrollWidth;
        var collectioncardWidth = $(".collection-carousel-item").width();
        var collectionscrollPosition = 0;
        console.log("collectioncarouselWidth:", collectioncarouselWidth);
        console.log("collectioncardWidth:", collectioncardWidth);

        $("#carouselExampleIndicators .collection-carousel-control-next").on("click", function () {
            if (collectionscrollPosition < collectioncarouselWidth - collectioncardWidth * 4) {
                collectionscrollPosition += collectioncardWidth;
                $("#carouselExampleIndicators .collection-carousel-inner").animate(
                    { scrollLeft: collectionscrollPosition },
                    600
                );
            }
        });

        $("#carouselExampleIndicators .collection-carousel-control-prev").on("click", function () {
            if (collectionscrollPosition > 0) {
                collectionscrollPosition -= collectioncardWidth;
                $("#carouselExampleIndicators .collection-carousel-inner").animate(
                    { scrollLeft: collectionscrollPosition },
                    600
                );
            }
        });
    } else {
        $(collectionmultipleCardCarousel).addClass("slide");
    }
});


