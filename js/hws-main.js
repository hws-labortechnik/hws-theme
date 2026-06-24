/**
 * HWS Main JavaScript
 * Consolidated from inline scripts in header.php and footer.php.
 * Dependencies: jQuery, AOS, Swiper (enqueued via functions.php)
 */

(function ($) {
  'use strict';

  /* -------------------------------------------------------
   * 1. Mobile Menu Toggle
   * ------------------------------------------------------- */
  var $body     = $('body');
  var $menuSheet = $('#mobileMenuSheet');
  var $toggleBtn = $('#toggleMenu');
  var $closeBtn  = $('#closeMenu');

  function openMenu() {
    $menuSheet.addClass('open');
    $body.addClass('menu-open');
  }

  function closeMenu() {
    $menuSheet.removeClass('open');
    $body.removeClass('menu-open');
  }

  $toggleBtn.on('click', function () {
    if ($body.hasClass('menu-open')) {
      closeMenu();
    } else {
      openMenu();
    }
  });
  $closeBtn.on('click', closeMenu);

  // Close on Escape
  $(document).on('keydown', function (e) {
    if (e.key === 'Escape') closeMenu();
  });

  // Close when clicking a mobile‑menu link
  $('#mobileMenuSheet a').on('click', closeMenu);

  // Close if window resizes past mobile breakpoint
  $(window).on('resize', function () {
    if (window.innerWidth >= 768) closeMenu();
  });

  /* -------------------------------------------------------
   * 2. Navbar Show / Hide on Scroll (threshold‑based)
   * ------------------------------------------------------- */
  var navbar       = document.getElementById('navbar');
  var lastScrollTop = 0;
  var threshold     = 100;

  if (navbar) {
    navbar.classList.add('transition-opacity', 'duration-300');

    window.addEventListener('scroll', function () {
      var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      if (scrollTop > lastScrollTop && scrollTop > threshold) {
        navbar.style.opacity        = '0';
        navbar.style.pointerEvents  = 'none';
      } else {
        navbar.style.opacity        = '1';
        navbar.style.pointerEvents  = 'auto';
      }

      lastScrollTop = scrollTop;
    });
  }

  /* -------------------------------------------------------
   * 3. Language Dropdown Toggle
   * ------------------------------------------------------- */
  $('#langSelect').on('click', function (e) {
    e.stopPropagation();
    $(this).toggleClass(
      'bg-zinc-100 rounded-bl-none rounded-br-none bg-[#F2F3F3]/40 backdrop-blur-md border-zinc-900'
    );
    $('#langDropdown').toggleClass('hidden');
  });

  $(document).on('click', function () {
    $('#langSelect').removeClass('bg-zinc-100 rounded-xl border-zinc-900');
    $('#langDropdown').addClass('hidden');
  });

  /* -------------------------------------------------------
   * 4. Lazy-load background images and videos near viewport
   * ------------------------------------------------------- */
  if ('IntersectionObserver' in window) {
    var lazyBgObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;

          var el = entry.target;
          var url = el.dataset.lazyBg;

          if (url) {
            el.style.backgroundImage = "url('" + url + "')";
            el.classList.add('is-loaded');
          }

          lazyBgObserver.unobserve(el);
        });
      },
      { rootMargin: '300px 0px' }
    );

    document.querySelectorAll('[data-lazy-bg]').forEach(function (el) {
      lazyBgObserver.observe(el);
    });

    var lazyVideoObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;

          var video = entry.target;
          var src = video.dataset.src;

          if (src && !video.querySelector('source')) {
            var source = document.createElement('source');
            source.src = src;
            source.type = 'video/mp4';
            video.appendChild(source);
            video.load();
            video.play().catch(function () {});
          }

          lazyVideoObserver.unobserve(video);
        });
      },
      { rootMargin: '200px 0px' }
    );

    document.querySelectorAll('[data-lazy-video]').forEach(function (el) {
      lazyVideoObserver.observe(el);
    });
  } else {
    document.querySelectorAll('[data-lazy-bg]').forEach(function (el) {
      if (el.dataset.lazyBg) {
        el.style.backgroundImage = "url('" + el.dataset.lazyBg + "')";
        el.classList.add('is-loaded');
      }
    });

    document.querySelectorAll('[data-lazy-video]').forEach(function (video) {
      var src = video.dataset.src;
      if (src && !video.querySelector('source')) {
        var source = document.createElement('source');
        source.src = src;
        source.type = 'video/mp4';
        video.appendChild(source);
        video.load();
        video.play().catch(function () {});
      }
    });
  }

  /* -------------------------------------------------------
   * 5. AOS Initialisation (single call)
   * ------------------------------------------------------- */
  if (typeof AOS !== 'undefined') {
    AOS.init({
      disable: false,
      startEvent: 'DOMContentLoaded',
      initClassName: 'aos-init',
      animatedClassName: 'aos-animate',
      useClassNames: false,
      disableMutationObserver: false,
      debounceDelay: 50,
      throttleDelay: 99,
      offset: 120,
      delay: 0,
      duration: 400,
      easing: 'ease',
      once: true,
      mirror: false,
      anchorPlacement: 'top-bottom',
    });
  }

  /* -------------------------------------------------------
   * 6. History Section Horizontal Scroll Animation
   * ------------------------------------------------------- */
  var historySection = document.getElementById('History');

  if (historySection) {
    var animationFrameId = null;
    var startTime        = null;

    function startAnimation() {
      var maxScroll = historySection.scrollWidth - historySection.clientWidth;
      startTime = performance.now();

      function animateScroll(currentTime) {
        var elapsed  = currentTime - (startTime || currentTime);
        var progress = Math.min(elapsed / 15000, 1);
        historySection.scrollLeft = maxScroll * progress;
        if (progress < 1) {
          animationFrameId = requestAnimationFrame(animateScroll);
        }
      }
      animationFrameId = requestAnimationFrame(animateScroll);
    }

    function stopAnimation() {
      if (animationFrameId) {
        cancelAnimationFrame(animationFrameId);
        animationFrameId = null;
      }
    }

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            startAnimation();
          } else {
            stopAnimation();
          }
        });
      },
      { threshold: 0.5 }
    );

    observer.observe(historySection);
  }
})(jQuery);
