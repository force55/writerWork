export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    console.log('123');
    $('.slick-carousel').slick({
      centerMode: true,
      centerPadding: '30px',
      slidesToShow: 3,
      arrows: false,
      dots: false,
      focusOnSelect: true,
    });
  },
};
