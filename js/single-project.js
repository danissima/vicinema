$('.single-project__show-desc').on('click', () => {
    $('.single-project__desc').toggle('slide', {direction: 'left'}, 600);
    $('.show-arrow').toggleClass('flip')
})