function scrollers() {
    $(document).ready(()=>{
        $(".slideshow").owlCarousel({
            items: 8,
            loop: true,
            mouseDrag: false,
            touchDrag: false,
            dots: false,
            autoplay: true,
            nav: false,
            autoWidth: true,
            margin: 50,
        });
    });
}

export default scrollers;