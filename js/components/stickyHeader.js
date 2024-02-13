function stickyHeader(header) {
  let prevScrollY = window.scrollY;

  window.addEventListener("scroll", () => {
    const currentScrollY = window.scrollY;
    const isScrollingDown = currentScrollY > prevScrollY;

    if (isScrollingDown) {
      if (header.parent().hasClass("sticky-wrapper") && window.scrollY >= header.height()) {
        header.css("top", -header.height());
      } else {
        header.unstick();
      }
    } else {
      if (currentScrollY > header.height()) {
        if (!header.parent().hasClass("sticky-wrapper")) {
          header.sticky({ responsiveWidth: true, topSpacing: header.height() });
          header.css("top", -header.height());
        } else {
          header.css("top", 0);
        }
      }
      if (currentScrollY === 0) {
        header.unstick();
      }
    }

    prevScrollY = currentScrollY;
  });
}

export default stickyHeader;

