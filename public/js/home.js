let menu = document.querySelector('.menu')
let sidebar = document.querySelector('.sidebar')
let mainContent = document.querySelector('.nav-list')
let displayArea = document.querySelector('.display-area')

menu.onclick = function() {
    sidebar.classList.toggle('sidebar-open')
    mainContent.classList.toggle('nav-list-open')
    displayArea.classList.toggle('display-area-shrink')
}
