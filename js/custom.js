//this will make the scroll animation smooth
smoothScroll.init();


if($(window).width() > 768){ 

  //scroll plugin settings 
  new fullpage('.fullpage', {
    //options here
    licenseKey: '6DDC2A7A-6BD248F9-ACBCB394-2805B093',
    scrollHorizontally: true,
    autoScrolling:true,
    slidesNavigation: true,
    css3: false,
    dragAndMove: false,
    scrollBar: false,
    normalScrollElements: '.home-top-content, .research-section, .become-a-click-block, .copyrights',
    fitToSection: false,
    lazyLoad: false,
    fadingEffect: true,
    fixedElements: 'header',
    afterSlideLoad: function( section, origin, destination, direction){
      var loadedSlide = this;
      // console.log(section);
    
    },

    onLeave: function(origin, nextIndex, direction) {

      console.log(origin.index);
      console.log(nextIndex.index);
      console.log(direction);
      
      if(origin.index == 0){
        fullpage_api.setAutoScrolling(true);
      } else {
      // fullpage_api.setAllowScrolling(true);
      }
      /* console.log(origin.index); */
      if(origin.index ==0 & direction == "down" ){ 
        fullpage_api.setAutoScrolling(false);
        // fullpage_api.setAllowScrolling(false);
      //  fullpage_api.moveTo(3);
      }
      /* console.log(origin.index); */
      if(origin.index ==1 & direction == "up" ){ 
       // fullpage_api.setAutoScrolling(true);
        // fullpage_api.setAllowScrolling(false);
       //fullpage_api.moveTo(2);
      }
      if(origin.index == 2){ 
       //  fullpage_api.setAutoScrolling(false);
      } else {
        
      }
      if(origin.index == 3){
      //fullpage_api.moveSectionDown();
      /* console.log(origin.index); */
     //  fullpage_api.setAutoScrolling(true);
      // fullpage_api.setScrollBar(false);
  
      } else {
       // fullpage_api.setAutoScrolling(true);
      }
    }
  });
} else {


  $('.header-slider').addClass('fp-auto-height');

  //scroll plugin settings 
  new fullpage('.fullpage', {
    //options here
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
  
  
  // $('.contactmodalopen').menuFullpage({
  //   menu: "#contact",
  //   activeBtn: "menu-open",
  //   side:"right",
  //   callbackAfter: function() {
  //     alert('onclick');
  //   }
  // });   
});

function fullpage_hide($ele){
  if($ele.hasClass('menu-open')){
      alert();
  }
}





function disableScroll() { 
  // Get the current page scroll position 
  scrollTop = window.pageYOffset || document.documentElement.scrollTop; 
  scrollLeft = window.pageXOffset || document.documentElement.scrollLeft, 

      // if any scroll is attempted, set this to the previous value 
      window.onscroll = function() { 
          window.scrollTo(scrollLeft, scrollTop); 
      }; 
} 

function enableScroll() { 
  window.onscroll = function() {}; 
} 

// Fixing content height issues on home page reaseach block
function setImageHeight(){
  $imageContent = $('.reasarch-right-block').find('img'); 
  $Content = $('.reasarch-left-block').find('.content');
  $imageHeight = $imageContent.height(); 
  $Content.css("height", $imageHeight);
}
$('.fp-prev').append('<span class="fa fa-angle-left"></span>');
$('.fp-next').append('<span class="fa fa-angle-right"></span>');

// $("#contactModal").modal({
//   fadeDuration: 100
// });
setImageHeight();


$('body').on("click", function(){
  if($('.selectbox').parent().hasClass('active')){
    $('.selectbox').parent().removeClass('active');
  }
});

$('.selectbox').on("click", function(e){
  e.stopPropagation();
  $(this).parent().toggleClass('active');
});


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
  console.log($element);
  $($element).parent('div').find('p').toggle();
  $($element).parent('div').find('.subscribe-serch').toggle();

  
}

function slideTab($num){
  fullpage_api.moveTo(1, $num - 1);
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