function stickyHeader(header) {
  let prevScrollY = window.scrollY;

  window.addEventListener("scroll", () => {
    const currentScrollY = window.scrollY;

    //  Check if the user has scrolled up or down.
    if (currentScrollY > prevScrollY) {
      //  Scrolled down
      console.log("scroll down");
      if (header.parent().hasClass("sticky-wrapper")) {
        //  Deactivate/hide header
        if(window.scrollY > header.height())
            header.css("top", -header.height());
        else
            header.unstick();
      }
    } else {
      //  Scrolled up
      console.log("scroll up");
      if (!header.parent().hasClass("sticky-wrapper")) {
        header.sticky();
        header.css("top", -header.height());
      } else {
        header.css("top", 0);
      }
    }
    prevScrollY = window.scrollY;
  });

  //   function slideHeader(from, to) {
  //     let headerTop = from;
  //     const timer = setInterval(() => {
  //       if (from > to) {
  //         console.log("down");
  //         if (headerTop > to) {
  //             headerTop -= 1;
  //         }
  //       } else {
  //         console.log("up");
  //         if (headerTop < to) {
  //             headerTop += 1;
  //         }
  //       }
  //       header.css("top", headerTop+"px");
  //       if (headerTop === to) {
  //         console.log("end timer");
  //         clearInterval(timer);
  //       }
  //     }, 10);
  //   }
}

export default stickyHeader;
