$(window).load(function() {
  // Animate loader off screen
  
  $(".slide1").addClass("active");
  console.log("image height added");
  $(".se-pre-con").fadeOut("slow");
   setTimeout(function(){ 
    setImageHeight(); 
  }, 1000);


setInterval(function(){ 
    fullpage_api.moveSlideRight();
    console.log("slided");
  }, 6000);
});

if($(window).width() > 768){ 

  //scroll plugin settings 
  new fullpage('.fullpage', {
    licenseKey: '6DDC2A7A-6BD248F9-ACBCB394-2805B093',
    scrollHorizontally: false,
    autoScrolling: "automatic",
    slidesNavigation: true,
    css3: true,
    dragAndMove: true,
    scrollBar: true,
    //normalScrollElements: '.home-top-content, .research-section, .become-a-click-block, .copyrights',
    fitToSection: false,
    lazyLoad: false,
    fadingEffect: true,
    fixedElements: 'header',
    afterSlideLoad: function(section, origin, destination, direction){
      console.log("section" + section.index);
      console.log("slide" +origin.index);

        if(section.index == 0){
            if(origin.index == 2 && direction =='right'){
              // console.log("disabled scrollBar");
            // fullpage_api.setAutoScrolling(false);
            setTimeout(function(){ setImageHeight(); }, 2000);
            // $(".tab-navigation ul li").removeClass("active");
            // $(".slide1").addClass("active");
        }
        
        if(origin.index == 0){
          console.log(origin.index + " Loaded");
          
          $(".slide2").addClass("active");
        }

        if(origin.index == 1){
          console.log(origin.index + " Loaded");
          $(".slide3").addClass("active");
        }

        if(origin.index == 2){
          console.log(origin.index + " Loaded");
          $(".slide4").addClass("active");
        }
        if(origin.index == 3){
          $(".tab-navigation ul li").removeClass("active");
          console.log(origin.index + " Loaded");
          setTimeout(function(){ 
           $(".slide1").addClass("active");
          }, 1000);
          
        }

        if(section.index == 2){
          console.log("disabled scrollBar");
        }
      }

    },
    onLeave: function(origin, destination, direction){
      var leavingSection = this;
  
      //after leaving section 2
      if(origin.index == 1 && direction =='down'){
        // alert("Going to section 3!");
      }
  
      else if(origin.index == 1 && direction == 'up'){
        // fullpage_api.setAutoScrolling(true);
        // fullpage_api.moveTo(0, 0);
      }
    },
    afterLoad: function(origin, destination, direction){
      // console.log(direction);
      // console.log(origin.index);
      // if(direction == "down" && origin.index == 0){
      //   fullpage_api.moveTo(0, 0);
      // }
    }
  });
} else {
  $('.header-slider').addClass('fp-auto-height');
  //scroll plugin settings 
  new fullpage('.fullpage', {
    licenseKey: '6DDC2A7A-6BD248F9-ACBCB394-2805B093',
    scrollHorizontally: true,
    autoScrolling:false,
    slidesNavigation: true,
    css3: true,
    scrollBar: false,
    fitToSection: false,
    fitToSectionDelay: 1000,
    lazyLoad: true,
    fixedElements: 'header'
  });
}

//menu full page slide
$(document).ready(function() { 
  $('.menu-link').menuFullpage({
    side:"right",
    callbackAfter: function() {
      alert('onclick');
    }
  });     
});

// fixed main nav when scrolling down
$(window).scroll(function() {    
  var scrollTop = $(window).scrollTop();
  if (scrollTop > 100) {
    $('.main-navbar').addClass("scrolled");
  } else {
    $('.main-navbar').removeClass("scrolled");
  }
});

function fullpage_hide($ele){
  if($ele.hasClass('menu-open')){
      alert();
  }
}


$('.fp-prev').append('<span class="arrow is-left"></span>');
$('.fp-next').append('<span class="arrow is-right"></span>');

//select box on hero section - default
$('body').on("click", function(){
  if($('.selectbox').parent().hasClass('active')){
    $('.selectbox').parent().removeClass('active');
    $('.fp-slides').css({'z-index':'0'});
  }
});

//select box on hero section - onlcick dropdown 
$('.selectbox').on("click", function(e){
  e.stopPropagation();
   $('.fp-slides').css({'z-index':'2'});
  $(this).parent().toggleClass('active');
  if($('.selectbox').parent().hasClass('active')){
  } else{
     $('.fp-slides').css({'z-index':'0'});
  }
});

// Fixing content height issues on home page reaseach block
function setImageHeight(){
  $imageContent = $('.reasarch-right-block').find('.image'); 
  $Content = $('.reasarch-left-block').find('.content');
  $imageHeight = $imageContent.height(); 
  console.log($imageHeight);
  $Content.css("height", $imageHeight);
}

// Main Menu Hover Effect Handling
function showInfo(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;
  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

function expandList($element) {
  if($(window).width() < 768){ 
    $($element).parent('div').find('p').toggle();
    $($element).parent('div').find('.subscribe-serch').toggle();
    $($element).parent('div').find('ul').toggle();

  }
}

function slideTab($num){
   // temporary disabled
   // fullpage_api.moveTo(1, $num - 1);
}

// Mobile main menu handling
const navExpand = [].slice.call(document.querySelectorAll('.nav-expand'))
const backLink = `<li class="nav-item">
  <a class="nav-link nav-back-link" href="javascript:;">
    <i class="fas fa-chevron-left go-back-icon"></i>
    Services
	</a>
</li>`
navExpand.forEach(item => {
	item.querySelector('.nav-expand-content').insertAdjacentHTML('afterbegin', backLink)
	item.querySelector('.nav-link').addEventListener('click', () => item.classList.add('active'))
	item.querySelector('.nav-back-link').addEventListener('click', () => item.classList.remove('active'))
})
// ---------------------------------------
// not-so-important stuff starts here
const ham = document.getElementById('ham')
ham.addEventListener('click', function() {
	document.body.classList.toggle('nav-is-toggled')
})
// END: Mobile main menu handling
$('.modal-open').on('click', function(e){
  e.preventDefault();
   $('.contact-modal').toggleClass('open-modal-active');
});

$('.modal-close').on('click', function(e){
  e.preventDefault();
   $('.contact-modal').removeClass('open-modal-active');
});