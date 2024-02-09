import stickyHeader from "./components/stickyHeader.js";
import cookieModal from "./components/cookieModal.js";
import sideMenu from "./components/sidemenu.js";
import banner from "./components/banner.js";
import scrollers from "./components/scrollers.js";
import dropdown from "./components/dropdown.js";
import contactUs from "./components/contactUs.js";

function app(){
    stickyHeader($(".header"));
    cookieModal();
    sideMenu();
    scrollers();
    dropdown();
    
    if (window.location.pathname === "/") {
        banner();
    } else if (window.location.pathname === "/contact-us.php") {
        contactUs();
    }
}

app();