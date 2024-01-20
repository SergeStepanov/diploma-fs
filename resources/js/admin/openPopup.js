const popups = Array.from(document.querySelectorAll('.popup'));
const btnOpen = Array.from(document.querySelectorAll('button'));

const btnAddHall = document.querySelector('#add_hall');

// console.log(btnAddHall);
// if (btnAddHall.id === 'add_hall') {
    let el = popups.find(element => element.dataset.open === btnAddHall.id);
    
    // el.classList.add('active');
    // console.log(el)
// }