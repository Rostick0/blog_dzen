function throttle(func, ms) {

    let locked = false

    return function () {

        if (locked) return

        const context = this
        const args = arguments

        locked = true

        setTimeout(() => {

            func.apply(context, args)
            locked = false

        }, ms)

    }
}

function debounce(func, ms) {
    return function (args) {
        let previousCall = this.lastCall;
        this.lastCall = Date.now();
        if (previousCall && ((this.lastCall - previousCall) <= ms)) {
            clearTimeout(this.lastCallTimer);
        }
        this.lastCallTimer = setTimeout(() => func(args), ms);
    }
}

function removeDisabledButton(input, button) {
    if (!input) {
        return;
    }

    if (!button) {
        return;
    }

    input.oninput = throttle(() => {
        if (input.value.length >= 5) {
            button.disabled = false;
        } else {
            button.disabled = true;
        }
    }, 100)
}





// banner

const bannerInput = document.querySelector('.banner__input');
const bannerButton = document.querySelector('.banner__button');
const commentsTopTextarea = document.querySelector('.comments__top_textarea');
const commentsTopButton = document.querySelector('.comments__top_button');

removeDisabledButton(commentsTopTextarea, commentsTopButton);
removeDisabledButton(bannerInput, bannerButton);




// slider

const postSlider = document.querySelector('.post__slider');
const postSliderArrowLeft = document.querySelector('.post__slider_arrow');
const postSliderArrowRight = document.querySelector('.post__slider_arrow_right');
const postSliderImg = document.querySelectorAll('.post__slider_img');
const postSliderLists = document.querySelector('.post__slider_lists');
let translateXCounter = -100;

// render switch items

for (let i = 0; i < postSliderImg.length; i++) {
    postSliderLists.insertAdjacentHTML('afterbegin', '<li class="post__slider_list"></li>');
}

const postSliderList = document.querySelectorAll('.post__slider_list');

function slider(slides) {
    let counterSlide = translateXCounter

    slides.forEach(elem => {
        elem.style = `transform: translateX(${counterSlide += 100}%);`
    })

    let counterSlideItem = translateXCounter / -100 - 1;

    postSliderList.forEach((elem, index) => {
        if (elem.classList.contains('_active')) {
            elem.classList.remove('_active');
        }

        if (index === counterSlideItem) {
            elem.classList.add('_active');
        }
    })
}

if (postSliderList && postSliderArrowLeft && postSliderArrowRight) {

    postSliderList.forEach((elem, index) => {
        elem.addEventListener('click', e => {
            translateXCounter = -100 * (index + 1);

            slider(postSliderImg);
        })
    });

    postSliderArrowLeft.addEventListener('click', e => {
        if (translateXCounter >= -100) {
            return;
        }

        translateXCounter += 100

        slider(postSliderImg);
    });

    postSliderArrowRight.addEventListener('click', e => {
        if (postSliderImg.length * -100 >= translateXCounter) {
            return;
        }

        translateXCounter -= 100;

        slider(postSliderImg);
    });

    slider(postSliderImg);

}




// burger-menu

const headerFixedActive = document.querySelector('.header-fixed__active');
const asideClose = document.querySelector('.aside__close');
const aside = document.querySelector('.aside');

if (headerFixedActive && asideClose && aside) {
    aside.addEventListener('click', e => {
        if (e.target.classList[0] == 'aside') {
            removeMenu();
        }
    });

    headerFixedActive.addEventListener('click', e => activeMenu());

    asideClose.addEventListener('click', e => removeMenu());
}

function activeMenu() {
    aside.style.transform = 'translateX(0)';
    aside.style.animation = 'blackout 1s forwards';
}

function removeMenu() {
    aside.style.transform = 'translateX(-100%)';
    aside.style.animation = '';
}

(function () {
    window.addEventListener("DOMContentLoaded", function () {
        [].forEach.call(document.querySelectorAll('input[type="tel"]'), function (input) {
            let keyCode;
            function mask(event) {
                event.keyCode && (keyCode = event.keyCode);
                let pos = this.selectionStart;

                if (pos < 3) event.preventDefault();

                let matrix = "+7 (___) ___ ____",
                    i = 0,
                    def = matrix.replace(/\D/g, ""),
                    val = this.value.replace(/\D/g, ""),
                    new_value = matrix.replace(/[_\d]/g, function (a) {
                        return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                    });

                i = new_value.indexOf("_");
                if (i != -1) {
                    i < 5 && (i = 3);
                    new_value = new_value.slice(0, i)
                }

                let reg = matrix.substr(0, this.value.length).replace(/_+/g,
                    function (a) {
                        return "\\d{1," + a.length + "}"
                    }).replace(/[+()]/g, "\\$&");

                reg = new RegExp("^" + reg + "$");

                if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
            }

            if (!input.value) {
                input.value = "+7 ";
            }

            input.addEventListener("input", mask, false);
            input.addEventListener("keydown", mask, false)
        });
    });
})();