function sideMenu() {
    const mainBody = $(".main");

    $(".btn-side-menu").on("click", (e) => {
        e.stopPropagation();
        if(mainBody.hasClass("opened")) {
            closeMenu();
        } else {            
            openMenu();
        }
    });

    function closeMenu() {
        console.log("close");
        $(".opened").off();
        mainBody.removeClass("opened");
        $("body").css("overflowY", "inherit");
        $(".hamburger").removeClass("is-active");
    }

    function openMenu() {
        console.log("open");
        mainBody.addClass("opened");
        $(".opened").on("click", () => {
            if($(".hamburger").hasClass("is-active"))
                closeMenu();
        });
        $("body").css("overflowY", "hidden");
        $(".hamburger").addClass("is-active");
    }
}

export default sideMenu;