/**
 *  Utility functions
 */
function utils() {
    /**
     * Returns max height value for a nodelist
     * @param {NodeList} nodeList The node list to calculate max height of
     */
    const calcMaxHeight = function (items) {
        let maxHeight = 0;

        items.forEach(item => {
            const h = item.clientHeight;
            maxHeight = h > maxHeight ? h : maxHeight;
        });
        return maxHeight;
    }

    /**
     * Removes Classes from NodeList
     * @param {NodeList} nodeList The node list to remove classes from
     * @param {Array} cssClasses Array of CSS classes to be removed
     */
    function removeClasses(nodeList, cssClasses) {
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].classList.remove(...cssClasses);
        }
    }

    /**
     * Adds Classes from NodeList
     * @param {NodeList} nodeList The node list to add classes to
     * @param {Array} cssClasses Array of CSS classes to be added
     */
    function addClasses(nodeList, cssClasses) {
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].classList.add(...cssClasses);
        }
    }

    /**
     * Behaves the same as setInterval except uses requestAnimationFrame() where possible for better performance
     * @param {function} fn The callback function
     * @param {int} delay The delay in milliseconds
     */
    /**
     * Behaves the same as clearInterval except uses cancelRequestAnimationFrame() where possible for better performance
     * @param {int|object} handle The callback function
     */

    return {
        calcMaxHeight,
        removeClasses,
        addClasses
    }
}


/**
 *  Main Slider function
 */
function heroSlider() {
    const slider = {
        hero: document.querySelector('#hero-slider'),
        main: document.querySelector('#slides-main'),
        aux: document.querySelector('#slides-aux'),
        current: document.querySelector('#slider-nav .current'),
        btnsPlay: document.querySelectorAll('.starSlide'),
        handle: null,
        idle: true,
        activeIndex: -1,
        starPlay: true,
    };

    const setHeight = function (holder, items) {
        const h = utils().calcMaxHeight(items);
        holder.style.height = `${h}px`;
    }

    const leadingZero = function () {
        return arguments[1] < 10 ? '0' + arguments[1] : arguments[1];
    }

    const setCurrent = function () {
        slider.current.innerText = leadingZero `${slider.activeIndex + 1}`;
    }

    const changeSlide = function (direction) {
        slider.idle = false;
        slider.hero.classList.remove('prev', 'next');

        if (direction == 'next') {
            slider.activeIndex = (slider.activeIndex + 1) % slider.total;
            slider.hero.classList.add('next');
        } else {
            slider.activeIndex = (slider.activeIndex - 1 + slider.total) % slider.total;
            slider.hero.classList.add('prev');
        }

        //reset classes
        utils().removeClasses(slider.items, ['prev', 'active']);

        //set prev  
        const prevItems = [...slider.items]
            .filter(item => {
                let prevIndex;
                if (slider.hero.classList.contains('prev')) {
                    prevIndex = slider.activeIndex == slider.total - 1 ? 0 : slider.activeIndex + 1;
                } else {
                    prevIndex = slider.activeIndex == 0 ? slider.total - 1 : slider.activeIndex - 1;
                }

                return item.dataset.index == prevIndex;
            });

        //set active
        const activeItems = [...slider.items]
            .filter(item => {
                return item.dataset.index == slider.activeIndex;
            });

        utils().addClasses(prevItems, ['prev']);
        utils().addClasses(activeItems, ['active']);
        setCurrent();

        const activeImageItem = slider.main.querySelector('.active');
        activeImageItem.addEventListener('transitionend', waitForIdle, {
            once: true
        });
    }

    const waitForIdle = function () {
        slider.idle = true;
    }

    const wheelControl = function () {
        slider.hero.addEventListener('wheel', e => {
            if (slider.idle && slider.activeIndex != 2) {
                const direction = e.deltaY > 0 ? 'next' : 'prev';
                changeSlide(direction);
            }
        });
    }

    const play_slide = function (initial) {
        slider.items = slider.hero.querySelectorAll('[data-index]');
        slider.total = slider.items.length / 2;

        
        initial && changeSlide('next');

        slider.btnsPlay.forEach((btn, index) => {
            btn.addEventListener('click', (e)=> {
                if (slider.idle) {
                    const direction = 'next';
                    changeSlide(direction);
                }
            });
        });
    }

    const loaded = function () {
        slider.hero.classList.add('loaded');
    }

    const touchControl = function () {
        const touchStart = function (e) {
            if(!slider.starPlay)
                return;
            slider.ts = parseInt(e.changedTouches[0].clientX);
            window.scrollTop = 0;
        }

        const touchMove = function (e) {
            slider.tm = parseInt(e.changedTouches[0].clientX);
            const delta = slider.tm - slider.ts;
            window.scrollTop = 0;

            if (slider.idle && slider.activeIndex != 2) {
                const direction = delta < 0 ? 'next' : 'prev';
                changeSlide(direction);
            }
        }

        slider.hero.addEventListener('touchstart', touchStart);
        slider.hero.addEventListener('touchmove', touchMove);
    }

    const start = function () {
        play_slide(slider.starPlay);
        wheelControl();
        window.innerWidth <= 1024 && touchControl();
        slider.aux.addEventListener('transitionend', loaded, {
            once: true
        });
    }

    const loadingAnimation = function () {
        slider.hero.classList.add('ready');
        slider.current.addEventListener('transitionend', start, {
            once: true
        });
    }

    const init = function () {
        setHeight(slider.aux, slider.aux.querySelectorAll('.slide-footer'));
        loadingAnimation();
    }

    const resize = function () {
        setHeight(slider.aux, slider.aux.querySelectorAll('.slide-footer'));
    }

    return {
        init,
        resize,
        changeSlide,
    }
}

window.addEventListener('load', heroSlider().init);
window.addEventListener("resize", heroSlider().resize);

// Splides NFTs
var options = {
    type: 'loop',
    drag: true,
    arrows: false,
    autoplay: true,
    pagination: false,
    perMove: 1,
    perPage: 1,
    autoScroll: {
      speed: 3,
    },
  }

var splides_nfts_1 = new Splide('#nfts-splide_1', options);
splides_nfts_1.mount();

// Social Networks
var socials_element = document.querySelector('#socialsPinned');
var socialClosed_element = document.querySelector('#closeSocials');
var socials_show = false;
var social_blocked = false;

socialNetworks_hidden();

socialClosed_element.addEventListener('click', (e) => 
{
  e.preventDefault();
  e.stopPropagation();

  
  social_blocked = socials_show;

  (socials_show ? socialNetworks_hidden(): socialNetworks_show())
});

function socialNetworks_show()
{
  socials_show = true;
  socials_element.style.transform = ("translateX(0px)");
  check_status_social();
}

function socialNetworks_hidden()
{
  let width_element = socials_element.clientWidth;
  let width_button_toggle = socialClosed_element.clientWidth;
  socials_show = false;
  socials_element.style.transform = ("translateX("+(width_element-width_button_toggle)+"px)");
  check_status_social();
}

function check_status_social()
{
  (socials_show ? (socialClosed_element.style.background = "#25415775", socialClosed_element.style.color = "#fff"):(socialClosed_element.style.background = "#F2CB05", socialClosed_element.style.color = "#000"));
}