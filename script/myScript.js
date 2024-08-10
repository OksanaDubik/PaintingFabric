//аимация текста
function observerTop() {
    let getTop = document.querySelector(".top .container");
    let observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
                return;
            }

            if (entry.isIntersecting) {
                entry.target.classList.add('top-animation');

            }
        });
    })
    observer.observe(getTop)
}

setTimeout(observerTop, 500)



// стрелка вверх

let getHeader = document.querySelector('#up')

let clientHeight =  document.documentElement.clientHeight

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > clientHeight || document.documentElement.scrollTop > clientHeight) {

        getHeader.style.display = "block";
    } else {
        getHeader.style.display = "none";
    }
}
getHeader.addEventListener('click', topFunction)
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
topFunction()

//анимация стрелки над формой
setTimeout(function () {
    document.querySelector(".bi").classList.add('slide-bottom')
}, 5000)








