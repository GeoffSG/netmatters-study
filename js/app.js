import stickyHeader from "./components/stickyHeader.js";
import cookieModal from "./components/cookieModal.js";
import sideMenu from "./components/sidemenu.js";
import banner from "./components/banner.js";
import scrollers from "./components/scrollers.js";

function app(){
    stickyHeader($(".header"));
    cookieModal();
    sideMenu();
    banner();
    scrollers();
}

app();