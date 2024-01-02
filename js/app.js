import stickyHeader from "./components/stickyHeader.js";
import cookieModal from "./components/cookieModal.js";

function app(){
    stickyHeader($(".header"));
    cookieModal();
}

app();