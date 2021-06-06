$('.works__item').on('click', (e) => {
    let thisItem = e.currentTarget
    let thisItemIndex = $('.works__item').index(thisItem)
    let thisModal = $($('.works__item-modal')[thisItemIndex])
    let thisModalClose = $($('.modal__close')[thisItemIndex])
    let thisOverlay = $($('.modal__overlay')[thisItemIndex])
    thisModal.show({
        effect: 'fade',
        complete() {
            thisModal.css('display', 'flex')
        }
    })
    thisModal.css('display', 'flex')
    thisModalClose.on('click', () => {
        thisModal.hide({
            effect: 'fade',
        })
        $('body').css('overflow', '')
    })
    thisOverlay.on('click', () => {
        thisModal.hide({
            effect: 'fade',
        })
        $('body').css('overflow', '')
    })
    $('body').css('overflow', 'hidden')
})

let names = document.querySelectorAll('.workers__about-wp')

names.forEach((item) => {
    item.style.left = `-${item.offsetWidth - item.offsetWidth * .55}px`
    item.style.top = `${item.offsetWidth - item.offsetWidth * .55}px`
    console.log(item.offsetWidth)
})

console.log(names)