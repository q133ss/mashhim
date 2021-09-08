<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script> -->
<script src="https://yandex.st/jquery/2.1.1/jquery.min.js"></script>
<script>
$(document).ready(function($) {
    $('.popup-open').click(function() {
        $('.popup-fade').fadeIn();
        return false;
    }); 
    
    $('.popup-close').click(function() {
        $(this).parents('.popup-fade').fadeOut();
        return false;
    });     
 
    $(document).keydown(function(e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.popup-fade').fadeOut();
        }
    });
    
    $('.popup-fade').click(function(e) {
        if ($(e.target).closest('.popup').length == 0) {
            $(this).fadeOut();                  
        }
    });






});


 $('.mobile-menu-btn').click(function() {
        $('.popup-menu').fadeIn();
        return false;
    }); 
    
    $('.popup-close').click(function() {
        $(this).parents('.popup-menu').fadeOut();
        return false;
    });     
 
    $(document).keydown(function(e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.popup-menu').fadeOut();
        }
    });
    
    $('.popup-menu').click(function(e) {
        if ($(e.target).closest('.popup').length == 0) {
            $(this).fadeOut();                  
        }
    });

</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
  var $slider = $('.slider');
  var $progressBar = $('.progress');
  var $progressBarLabel = $( '.slider__label' );
  
  $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
    var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
    
    $progressBar
      .css('background-size', calc + '% 100%')
      .attr('aria-valuenow', calc );
    
    $progressBarLabel.text( calc + '% completed' );
  });
  
  $slider.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 400
  });  
});

var $status = $('.pagingInfo');
var $slickElement = $('.slider');

$slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
  // no dots -> no slides
  if(!slick.$dots){
    return;
  }
  
  //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
  var i = (currentSlide ? currentSlide : 0) + 1;
  // use dots to get some count information
  $status.text(i + '/' + (slick.$dots[0].children.length));
});

$slickElement.slick({
  infinite: false,
  slidesToShow: 4,
  autoplay: false,
  dots: true
});

</script>


<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".next-slide",
          prevEl: ".prev-slide",
        },
      });
    </script>

    <script>
      var swiper = new Swiper(".sliderSince", {
        navigation: {
          nextEl: ".since-next-slide",
          prevEl: ".since-prev-slide",
        },
      });


      //Stiky menu
      // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
    </script>

    <script>
      var swiper = new Swiper(".swProject", {
        pagination: {
          el: ".swiper-pagination",
          type: "progressbar",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

     <script>
      var swiper = new Swiper(".swProject", {
        pagination: {
          el: ".swc",
          type: "fraction",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

<?php wp_footer(); ?>

</body>
</html>