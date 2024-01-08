import cookieController from "../controllers/cookieController.js";

function cookieModal() {
  const modal = $("#cookie-modal");
  const cController = cookieController();

  $("document").ready(() => {
    //  Display cookie modal if policy cookie does not exist.
    if(!cController.getCookie("policy"))
      showModal();
  });

  $(".btn-cookie").on("click", (e) =>{
    e.preventDefault();
    showModal();
  });

  $("#cookie-accept").on("click", (e) => {
    e.preventDefault();
    //  Store accepted policy as a cookie
    cController.setCookie("policy", "true", 28);
    hideModal();
  });

  /**
   * Shows Cookie Modal
   */
  function showModal() {
    if(!$("body").hasClass("overflow-hidden"))
      $("body").addClass("overflow-hidden");
    if(!modal.hasClass("active"))
      modal.addClass("active");
  }

  /**
   * Hides Cookie Modal
   */
  function hideModal() {
    if($("body").hasClass("overflow-hidden"))
      $("body").removeClass("overflow-hidden");
    if(modal.hasClass("active"))
      modal.removeClass("active");
  }
}

export default cookieModal;
