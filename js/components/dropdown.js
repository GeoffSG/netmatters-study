function dropdown() {
    $('.drop-down-button').on('click', function() {
        console.log('click');
        if($('.drop-down-content').hasClass('active')) {
            $('.drop-down-content').slideUp();
            $('.drop-down-content').removeClass('active');
        } else {
            $('.drop-down-content').slideDown();
            $('.drop-down-content').addClass('active');
        }
    });

}

export default dropdown;