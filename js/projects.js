let catalogNavItems = document.querySelectorAll('.catalog__nav-item');
let catalogItems = document.querySelectorAll('.catalog__items');

catalogNavItems[0].classList.add('catalog__nav-item_active')
catalogItems[0].classList.add('catalog__items_active')

catalogNavItems.forEach((item, i) => {
    item.addEventListener('click', (e) => {
        catalogNavItems.forEach(item => item.classList.remove('catalog__nav-item_active'))
        item.classList.add('catalog__nav-item_active')
        catalogItems.forEach(item => {
            item.classList.remove('catalog__items_active')
        })
        catalogItems[i].classList.add('catalog__items_active')
    })
})
