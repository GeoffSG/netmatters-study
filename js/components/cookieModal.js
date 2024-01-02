function cookieModal() {
  $(".btn-cookie").on("click", (e) =>{
    e.preventDefault();
    $(".cookie-modal").show();
  });
  $("#cookie-accept").on("click", (e) => {
    e.preventDefault();
    $(".cookie-modal").hide();
  });
}

export default cookieModal;
