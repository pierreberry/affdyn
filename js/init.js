$(document).ready(function () {
  $('.tabs').tabs();
  $('.tap-target').tapTarget();
  $('.bouton').on('click', function () {
    $('.tap-target').tapTarget('open')
  })
  $(".sidenav").sidenav();
  $(".dropdown-trigger").dropdown({
    hover: true,
    alignment: "left"
  });
  $(".parallax").parallax();
  $('.collapsible').collapsible();
  $(".modal").modal();
  $(".client_carousel").carousel({
    shift: 25,
    padding: 0,
    dist: 10,
    numVisible: 9,
  });
  $(".client_carousel_test").carousel({
    shift: 25,
    padding: 0,
    dist: 10,
    numVisible: 9,
  });
  $(".client_carousel_test_test").carousel({
    shift: 25,
    padding: 0,
    dist: 10,
    numVisible: 9,
  });
  setInterval(function () {
    $(".client_carousel").carousel("next");
  }, 2000);
  setInterval(function () {
    $(".client_carousel_test").carousel("prev");
  }, 2000);
  setInterval(function () {
    $(".client_carousel_test_test").carousel("next");
  }, 2000);
  $(".scrollspy").scrollSpy();
  $(".tooltipped").tooltip();
  $('select').formSelect();
  M.updateTextFields();
});

$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function (event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500, function () {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

$(function () {
  var img = $(".banniere_activite");
  var card = $(".mescards");
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 1) {
      img.removeClass('banniere_activite').addClass("banniere_activite_bas");
      card.removeClass('mescards').addClass("mescardsbas");
    } else {
      img.removeClass("banniere_activite_bas").addClass('banniere_activite');
      card.removeClass('mescardsbas').addClass("mescards");
    }
  });
});

$(function () {
  $('.btn').click(function (event) {
    if ($('#selection :selected').hasClass('non')) {

      M.toast({ html: 'Veuillez choisir votre civilité' })
      event.preventDefault()
    }
  });
});

$(function () {

  var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

  $('.btn').click(function (e) {

    if (document.getElementById("first_name").value == "") {
      M.toast({ html: 'Veuillez renseigner votre prénom' })
    }
    if (document.getElementById("name").value == "") {
      M.toast({ html: 'Veuillez renseigner votre nom' })
    }
    if (document.getElementById("zip_code").value == "") {
      M.toast({ html: 'Veuillez renseigner votre code postal' })
    }
    if (document.getElementById("mail").value == "") {
      M.toast({ html: 'Veuillez renseigner votre mail' })
    } else if (!regex.test(document.getElementById("mail").value)) {
      M.toast({ html: 'Veuillez renseigner une adresse mail valide' })
      e.preventDefault()
    }

  })
})

$('.disabled_menu').click(function (e) {

  M.toast({ html: 'Bientôt en ligne !' })
  e.preventDefault()
})

$(window).on("load", function () {
  $(".loader-wrapper").fadeOut("slow");
});

(function ($) {

  $.fn.fitText = function (kompressor, options) {

    // Setup options
    var compressor = kompressor || 1,
      settings = $.extend({
        'minFontSize': Number.NEGATIVE_INFINITY,
        'maxFontSize': Number.POSITIVE_INFINITY
      }, options);

    return this.each(function () {

      // Store the object
      var $this = $(this);

      // Resizer() resizes items based on the object width divided by the compressor * 10
      var resizer = function () {
        $this.css('font-size', Math.max(Math.min($this.width() / (compressor * 10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
      };

      // Call once to set.
      resizer();

      // Call on resize. Opera debounces their resize by default.
      $(window).on('resize.fittext orientationchange.fittext', resizer);

    });

  };

})(jQuery);

jQuery(".fit_title").fitText(1.2, { minFontSize: '20px', maxFontSize: '70px' });