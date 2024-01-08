function banner() {
    console.log("banner");
    // $(".banner").slick({
    //     autoplay: true,
    //     autoplaySpeed: 5000,
    //     dots: true,
    //     arrows: false,
    // });
    $(".banner").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        dotsEach: true,
        // autoWidth: true,
        autoplay: true,
        center: true,
    });
}

export default banner;