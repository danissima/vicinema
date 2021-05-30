let catalogNavItems = document.querySelectorAll('.catalog__nav-item');
let catalogItems = document.querySelectorAll('.catalog__items');

catalogNavItems.forEach((item, i) => {
    item.addEventListener('click', (e) => {
        switchCatalog(e.target);
    })
})

function switchCatalog(listItem) {
    catalogNavItems.forEach(item => item.classList.remove('catalog__nav-item_active'))
    listItem.classList.add('catalog__nav-item_active')

    catalogItems.forEach(item => {
        item.classList.remove('catalog__items_active')
        if (item.id == listItem.hash.split('#')[1]) item.classList.add('catalog__items_active')
    })
}
console.log(catalogItems);