function banner() {
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