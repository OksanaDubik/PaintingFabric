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


//анимация стрелки над формой
setTimeout(function () {
    document.querySelector(".bi").classList.add('slide-bottom')
}, 5000)



//увеличение слайдов
let images = document.querySelectorAll(".d-block")

function handleImage(event) {
    let srcImage = event.target.src
    if(window.innerWidth < 769){
            Object.assign(document.querySelector('.modl').style, {
            display : 'block',
            width: '100vw',
            height: '200vh',
            position: 'relative',
            zIndex: '10',
            backgroundRepeat: 'no-repeat',
            backgroundSize: '150%',
            background: `url("${srcImage}") no-repeat`,
            top: `-100vh`,
            left: `0`
        });
    }else {


    Object.assign(document.querySelector('.modl').style, {
        display : 'block',
        width: '100vw',
        height: '200vh',
        position: 'relative',
        zIndex: '10',
        backgroundRepeat: 'no-repeat',
        backgroundSize: '150%',
        background: `url("${srcImage}") no-repeat`,
        top: `-100vh`,
        left: `20vw`
    });
}
    let getModal = document.querySelector(".modl")
    getModal.addEventListener("click", function () {
        getModal.style.display = "none"
    })

}

images.forEach(image => {
    image.addEventListener("click", handleImage)
})



//удалить сообщение от PHP
let textPhp =  document.querySelector(".textPhp")

setTimeout(function (){
    textPhp.style.display = "none"
}, 2000)







