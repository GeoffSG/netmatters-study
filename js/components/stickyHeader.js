function stickyHeader(header) {
  let prevScrollY = window.scrollY;

  window.addEventListener("scroll", () => {
    const currentScrollY = window.scrollY;

    //  Check if the user has scrolled up or down.
    if (currentScrollY > prevScrollY) {
      //  Scrolled down
      if (header.parent().hasClass("sticky-wrapper")) {
        //  Deactivate/hide header
        if (window.scrollY > header.height())
          header.css("top", -header.height());
        else header.unstick();
      }
    } else {
      //  Scrolled up
      if (!header.parent().hasClass("sticky-wrapper")) {
        header.sticky({ responsiveWidth: true });
        header.css("top", -header.height());
      } else {
        header.css("top", 0);
      }
    }
    prevScrollY = window.scrollY;
  });
}

export default stickyHeader;
