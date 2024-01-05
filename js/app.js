import stickyHeader from "./components/stickyHeader.js";
import cookieModal from "./components/cookieModal.js";
import sideMenu from "./components/sidemenu.js";
import banner from "./components/banner.js";

function app(){
    stickyHeader($(".header"));
    cookieModal();
    sideMenu();
    banner();
}

app();