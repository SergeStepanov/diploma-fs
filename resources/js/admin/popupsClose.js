const popups = Array.from(document.querySelectorAll('.popup'));

// if (popups) {
//     popups[3].classList.add('active');

// }

popups.map(popup => {
    popup.addEventListener('click', function (evt) {
        // evt.preventDefault();
        let el = evt.target.dataset.close;

        if (el !== 'close') return;
        
        if (el === 'close') {
            popup.classList.remove('active');
        }
        // console.log(el);
    })
})
