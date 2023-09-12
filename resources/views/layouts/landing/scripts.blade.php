<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<script src="./assets/js/swiper.min.js"></script>
<script type="text/javascript" src="./assets/js/child-theme.min.js"></script>

<script>window.lazyLoadOptions = [{
    elements_selector: "img[data-lazy-src],.rocket-lazyload",
    data_src: "lazy-src",
    data_srcset: "lazy-srcset",
    data_sizes: "lazy-sizes",
    class_loading: "lazyloading",
    class_loaded: "lazyloaded",
    threshold: 300,
    callback_loaded: function (element) {
      if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
        if (element.classList.contains("lazyloaded")) {
          if (typeof window.jQuery != "undefined") {
            if (jQuery.fn.fitVids) {
              jQuery(element).parent().fitVids()
            }
          }
        }
      }
    }
  }, {
    elements_selector: ".rocket-lazyload",
    data_src: "lazy-src",
    data_srcset: "lazy-srcset",
    data_sizes: "lazy-sizes",
    class_loading: "lazyloading",
    class_loaded: "lazyloaded",
    threshold: 300,
  }];
  window.addEventListener('LazyLoad::Initialized', function (e) {
    var lazyLoadInstance = e.detail.instance;
    if (window.MutationObserver) {
      var observer = new MutationObserver(function (mutations) {
        var image_count = 0;
        var iframe_count = 0;
        var rocketlazy_count = 0;
        mutations.forEach(function (mutation) {
          for (var i = 0; i < mutation.addedNodes.length; i++) {
            if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
              continue
            }
            if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
              continue
            }
            images = mutation.addedNodes[i].getElementsByTagName('img');
            is_image = mutation.addedNodes[i].tagName == "IMG";
            iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
            is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
            rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
            image_count += images.length;
            iframe_count += iframes.length;
            rocketlazy_count += rocket_lazy.length;
            if (is_image) {
              image_count += 1
            }
            if (is_iframe) {
              iframe_count += 1
            }
          }
        });
        if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
          lazyLoadInstance.update()
        }
      });
      var b = document.getElementsByTagName("body")[0];
      var config = {childList: !0, subtree: !0};
      observer.observe(b, config)
    }
  }, !1)
</script>
<script data-no-minify="1" async=""
        src="./Hyro _ Conversational AI for Enterprise_files/lazyload.min.js.download"></script>

<div id="sb-root-1693753882591">
  <style>
    #sbstyle {
      --custom-color-start: #4548c4;
      --custom-color-start-rgb: 69, 72, 196;
      --custom-color-start-rgb-inverted: 255, 255, 255;
      --custom-color-stop: #ef4068;
      --custom-color-stop-rgb: 239, 64, 104;
      --custom-color-gradient: linear-gradient(38.12deg, #4548c4 4.57%, #ef4068 102.26%);
      --custom-bgColor: #161453;
      --custom-bgColor-rgb: 22, 20, 83;
      --custom-bgColor-rgb-inverted: 255, 255, 255;
    }
  </style>
</div>

<script>
  function toggleMobileNav() {
    const navWrapper = document.getElementById('wrapper-navbar')
    if (navWrapper.classList.contains('is-open--mobile')) {
      navWrapper.classList.remove('is-open--mobile')
    } else {
      navWrapper.classList.add('is-open--mobile')
    }
  }
</script>
