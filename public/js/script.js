/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/script.js":
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
/***/ (() => {

function throttle(func, ms) {
  var locked = false;
  return function () {
    if (locked) return;
    var context = this;
    var args = arguments;
    locked = true;
    setTimeout(function () {
      func.apply(context, args);
      locked = false;
    }, ms);
  };
}
function debounce(func, ms) {
  return function (args) {
    var previousCall = this.lastCall;
    this.lastCall = Date.now();
    if (previousCall && this.lastCall - previousCall <= ms) {
      clearTimeout(this.lastCallTimer);
    }
    this.lastCallTimer = setTimeout(function () {
      return func(args);
    }, ms);
  };
}
function removeDisabledButton(input, button) {
  if (!input) {
    return;
  }
  if (!button) {
    return;
  }
  input.oninput = throttle(function () {
    if (input.value.length >= 5) {
      button.disabled = false;
    } else {
      button.disabled = true;
    }
  }, 100);
}

// banner

var bannerInput = document.querySelector('.banner__input');
var bannerButton = document.querySelector('.banner__button');
var commentsTopTextarea = document.querySelector('.comments__top_textarea');
var commentsTopButton = document.querySelector('.comments__top_button');
if (commentsTopButton) {
  commentsTopButton.addEventListener('click', function (e) {
    e.preventDefault();
    activeModal();
  });
}
removeDisabledButton(commentsTopTextarea, commentsTopButton);
removeDisabledButton(bannerInput, bannerButton);

// slider

var postSlider = document.querySelector('.post__slider');
var postSliderArrowLeft = document.querySelector('.post__slider_arrow');
var postSliderArrowRight = document.querySelector('.post__slider_arrow_right');
var postSliderImg = document.querySelectorAll('.post__slider_img');
var postSliderLists = document.querySelector('.post__slider_lists');
var translateXCounter = -100;

// render switch items

for (var i = 0; i < postSliderImg.length; i++) {
  postSliderLists.insertAdjacentHTML('afterbegin', '<li class="post__slider_list"></li>');
}
var postSliderList = document.querySelectorAll('.post__slider_list');
function slider(slides) {
  var counterSlide = translateXCounter;
  slides.forEach(function (elem) {
    elem.style = "transform: translateX(".concat(counterSlide += 100, "%);");
  });
  var counterSlideItem = translateXCounter / -100 - 1;
  postSliderList.forEach(function (elem, index) {
    if (elem.classList.contains('_active')) {
      elem.classList.remove('_active');
    }
    if (index === counterSlideItem) {
      elem.classList.add('_active');
    }
  });
}
if (postSliderList && postSliderArrowLeft && postSliderArrowRight) {
  postSliderList.forEach(function (elem, index) {
    elem.addEventListener('click', function (e) {
      translateXCounter = -100 * (index + 1);
      slider(postSliderImg);
    });
  });
  postSliderArrowLeft.addEventListener('click', function (e) {
    if (translateXCounter >= -100) {
      return;
    }
    translateXCounter += 100;
    slider(postSliderImg);
  });
  postSliderArrowRight.addEventListener('click', function (e) {
    if (postSliderImg.length * -100 >= translateXCounter) {
      return;
    }
    translateXCounter -= 100;
    slider(postSliderImg);
  });
  slider(postSliderImg);
}

// modal

var modal = document.querySelector('.modal');
var modalClose = document.querySelector('.modal__close');
if (modal) {
  modal.addEventListener('click', function (e) {
    if (e.target.classList[0] == 'modal') {
      removeModal();
    }
  });
  modalClose.addEventListener('click', function (e) {
    removeModal();
  });
}
function activeModal() {
  modal.style.top = '0';
  modal.style.animation = 'blackout 1.5s forwards';
}
function removeModal() {
  modal.style.animation = '';
  modal.style.background = 'rgba(0, 0, 0, 0)';
  modal.style.top = '-150%';
}

// burger-menu

var headerFixedActive = document.querySelector('.header-fixed__active');
var asideClose = document.querySelector('.aside__close');
var aside = document.querySelector('.aside');
if (headerFixedActive && asideClose && aside) {
  aside.addEventListener('click', function (e) {
    if (e.target.classList[0] == 'aside') {
      removeMenu();
    }
  });
  headerFixedActive.addEventListener('click', function (e) {
    return activeMenu();
  });
  asideClose.addEventListener('click', function (e) {
    return removeMenu();
  });
}
function activeMenu() {
  aside.style.transform = 'translateX(0)';
  aside.style.animation = 'blackout 1s forwards';
}
function removeMenu() {
  aside.style.transform = 'translateX(-100%)';
  aside.style.animation = '';
}

// commments

var commentAnswer = document.querySelectorAll('.comment__answer');
commentAnswer === null || commentAnswer === void 0 ? void 0 : commentAnswer.forEach(function (elem) {
  var buttonReply = elem.querySelector('.comment-user__reply');
  var commentsTextarea = elem.querySelector('.comments__textarea');
  var commentsUserAnswer = elem.querySelector('.comments-user__answer');
  var commentsButtonCancel = elem.querySelector('.comments__button_cancel');
  var commentsButtonReplay = elem.querySelector('.comments__button_replay');
  if (!elem) {
    return;
  }
  buttonReply.addEventListener('click', function () {
    commentsUserAnswer.style.display = 'block';
    commentsButtonCancel.addEventListener('click', function () {
      commentsUserAnswer.style.display = 'none';
    });
    commentsButtonReplay.addEventListener('click', function () {
      activeModal();
    });
    removeDisabledButton(commentsTextarea, commentsButtonReplay);
  });
});
(function () {
  window.addEventListener("DOMContentLoaded", function () {
    [].forEach.call(document.querySelectorAll('input[type="tel"]'), function (input) {
      var keyCode;
      function mask(event) {
        event.keyCode && (keyCode = event.keyCode);
        var pos = this.selectionStart;
        if (pos < 3) event.preventDefault();
        var matrix = "+7 (___) ___ ____",
          i = 0,
          def = matrix.replace(/\D/g, ""),
          val = this.value.replace(/\D/g, ""),
          new_value = matrix.replace(/[_\d]/g, function (a) {
            return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
          });
        i = new_value.indexOf("_");
        if (i != -1) {
          i < 5 && (i = 3);
          new_value = new_value.slice(0, i);
        }
        var reg = matrix.substr(0, this.value.length).replace(/_+/g, function (a) {
          return "\\d{1," + a.length + "}";
        }).replace(/[+()]/g, "\\$&");
        reg = new RegExp("^" + reg + "$");
        if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
      }
      input.value = "+7 ";
      input.addEventListener("input", mask, false);
      input.addEventListener("keydown", mask, false);
    });
  });
})();

/***/ }),

/***/ "./resources/scss/style.scss":
/*!***********************************!*\
  !*** ./resources/scss/style.scss ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/script": 0,
/******/ 			"css/style": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./resources/js/script.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./resources/scss/style.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;