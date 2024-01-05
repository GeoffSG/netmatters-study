function banner() {
    console.log("banner");
    $(".banner").slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        arrows: false,
    });
}

export default banner;