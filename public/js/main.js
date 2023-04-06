const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    parallax: true,
    lazy: true,
    autoplay:true,
    effect: "creative",
    speed: 900,
    creativeEffect: {
      prev: {
        shadow: true,
        translate: [0, 0, -400],
      },
      next: {
        translate: ["100%", 0, 0],
      },
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    on: {
      autoplayTimeLeft(s, time, progress) {
        progressCircle.style.setProperty("--progress", 1 - progress);
        progressContent.textContent = `${Math.ceil(time / 1000)}s`;
      }
    }
  });

  $(document).on('click', '.aboutus-navbar-item', function(){
    var target = $(this).attr('data-name');
    console.log(target);
    $('.aboutus-navbar-item.active').removeClass('active');
    $('.aboutus-nav-data').removeClass('active');
    $(this).addClass('active');
    $('.'+ target).addClass('active');
  });

$(document).ready(function(){
  var a = 0;
  $(window).scroll(function(){
    if(a == 0 && $(window).scrollTop() > 3108){
      let count = document.querySelectorAll(".count")
      let arr = Array.from(count)
      
      arr.map(function(item){
        let startnumber = 0
      
        function counterup(){
        startnumber++
        item.innerHTML= startnumber
         
        if(startnumber == item.dataset.number){
            clearInterval(stop)
        }
      }
      
      let stop =setInterval(function(){
        counterup()
      },5)
      
      })
      a = 1;
    }
  });
});