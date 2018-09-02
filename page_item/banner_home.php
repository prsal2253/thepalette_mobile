
         <!-- banner 輪播 -->
         <section class="top_banner">
                <div class="top_banner_mobile">
                        <div class="top_banner_slider">
                            <ul>
                            <li class="prev_slide">
                                    <div class="top_banner_image" style="background-image:url(../images/banner/banner01.jpg)">
                                    <div class="ps-content">
                                            <h2>Red<br/>Orange<br/>Pink</h2>
                                            <p>Better Living Throug Color</p>
                                    </div>
                                    <div class="ps-number"></div>
                                    <div class="ps-slidewrapper"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="top_banner_image" style="background-image:url(../images/banner/banner02.jpg)">
                                        <div class="ps-content" style="background-color: #6f8c7e">
                                                <h2>Blue<br/>Green<br/>Yellow</h2>
                                                <p style="">Better Living Throug Color</p>
                                        </div>
                                        <div class="ps-number" style="background-color: #e5aa33 "></div>
                                        <div class="ps-slidewrapper" style="background-color: #254159"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="top_banner_image" style="background-image:url(../images/banner/banner03.jpg)">
                                        <div class="ps-content" style="background-color:gray">
                                                <h2>Black<br/>White<br/>Gray</h2>
                                                <p>Better Living Throug Color</p>
                                        </div>
                                        <div class="ps-number" style="background-color: #f0f0f0"></div>
                                        <div class="ps-slidewrapper" style="background-color: #000"></div>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
        </section>
        
        <script type="text/javascript">
(function () {

function init(item) {
    var items = item.querySelectorAll('li'),
        current = 0,
        autoUpdate = true,
        timeTrans = 4000;

    //create nav
    var nav = document.createElement('nav');
    nav.className = 'nav_arrows';

    // create button prev
    var prevbtn = document.createElement('button');
    prevbtn.className = 'prev';
    prevbtn.setAttribute('aria-label', 'Prev');

    //create button next
    var nextbtn = document.createElement('button');
    nextbtn.className = 'next';
    nextbtn.setAttribute('aria-label', 'Next');

    //create counter
    var counter = document.createElement('div');
    counter.className = 'top_banner_counter';
    counter.innerHTML = "<span>1</span><span>" + items.length + "</span>";

    if (items.length > 1) {
        nav.appendChild(prevbtn);
        nav.appendChild(counter);
        nav.appendChild(nextbtn);
        item.appendChild(nav);
    }

    items[current].className = "current";
    if (items.length > 1) items[items.length - 1].className = "prev_slide";

    var navigate = function (dir) {
        items[current].className = "";

        if (dir === 'right') {
            current = current < items.length - 1 ? current + 1 : 0;
        } else {
            current = current > 0 ? current - 1 : items.length - 1;
        }

        var nextCurrent = current < items.length - 1 ? current + 1 : 0,
            prevCurrent = current > 0 ? current - 1 : items.length - 1;

        items[current].className = "current";
        items[prevCurrent].className = "prev_slide";
        items[nextCurrent].className = "";

        //update counter
        counter.firstChild.textContent = current + 1;
    }

    item.addEventListener('mouseenter', function () {
        autoUpdate = false;
    });

    item.addEventListener('mouseleave', function () {
        autoUpdate = true;
    });

    setInterval(function () {
        if (autoUpdate) navigate('right');
    }, timeTrans);

    prevbtn.addEventListener('click', function () {
        navigate('left');
    });

    nextbtn.addEventListener('click', function () {
        navigate('right');
    });

    //keyboard navigation
    document.addEventListener('keydown', function (ev) {
        var keyCode = ev.keyCode || ev.which;
        switch (keyCode) {
            case 37:
                navigate('left');
                break;
            case 39:
                navigate('right');
                break;
        }
    });

    // swipe navigation
    // from http://stackoverflow.com/a/23230280
    item.addEventListener('touchstart', handleTouchStart, false);
    item.addEventListener('touchmove', handleTouchMove, false);
    var xDown = null;
    var yDown = null;
    function handleTouchStart(evt) {
        xDown = evt.touches[0].clientX;
        yDown = evt.touches[0].clientY;
    };
    function handleTouchMove(evt) {
        if (!xDown || !yDown) {
            return;
        }

        var xUp = evt.touches[0].clientX;
        var yUp = evt.touches[0].clientY;

        var xDiff = xDown - xUp;
        var yDiff = yDown - yUp;

        if (Math.abs(xDiff) > Math.abs(yDiff)) {/*most significant*/
            if (xDiff > 0) {
                /* left swipe */
                navigate('right');
            } else {
                navigate('left');
            }
        }
        /* reset values */
        xDown = null;
        yDown = null;
    };
}

[].slice.call(document.querySelectorAll('.top_banner_slider')).forEach(function (item) {
    init(item);
});
})();
</script>