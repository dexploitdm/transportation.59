document.addEventListener('DOMContentLoaded', function(){
    const open = document.querySelector('.header-open-menu'),
        close = document.querySelector('.drawer-top-close'),
        body = document.querySelector('body');

    open.addEventListener('click', (event) => {
        body.classList.add('open')
    });
    close.addEventListener('click', (event) => {
        body.classList.remove('open')
    });

    //Дочерний список в drawer menu
    const drawer = document.querySelector('.drawer'),
          parent = drawer.querySelector('.menu-item-has-children');
    parent.addEventListener('click', (event) => {
        const childList = parent.querySelector('.sub-menu')
        childList.classList.contains('open') ? childList.classList.remove("open") : childList.classList.add("open");
    });
});