let addMovieBtn = document.querySelector('.add-movie__btn');
let movieTemplate = document.querySelector('.admin-section__movie-template');
let movieShowClass = "admin-section__movie-template_show"

let addClientBtn = document.querySelector('.add-client__btn');
let clientTemplate = document.querySelector('.admin-section__client-template');
let clientShowClass = "admin-section__client-template_show";

addMovieBtn.addEventListener('click', () => { addItem(movieTemplate, movieShowClass) })
addClientBtn.addEventListener('click', () => { addItem(clientTemplate, clientShowClass) })

function addItem(template, showClass) {
  template.classList.add(showClass)
}

