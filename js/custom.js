//this will make the scroll animation smooth
smoothScroll.init();

//menu full page slide
$(document).ready(function() {
  $('.menu-link').menuFullpage({
    side:"right",
    callbackAfter: function() {
      alert('onclick');
    }
  });       
});

function fullpage_hide($ele){
  if($ele.hasClass('menu-open')){
      alert();
  }
}

var slideIndex  = 1,
sliding     = false;

// TODO: ........................
//scroll plugin settings 
new fullpage('.fullpage', {
  //options here
  autoScrolling:false,
  licenseKey: '0CE829D2-E63344BC-9BADE6C2-2831D733',
  slidesNavigation: true,
  css3: true,
  scrollBar: false,
  normalScrollElements: '.research-section',
  fitToSection: false,
  fitToSectionDelay: 1000,
  scrollHorizontally: true,
  // scrollHorizontally: true,
  lazyLoad: true,
  fixedElements: 'header',
  // scrollHorizontally: true

  afterResponsive: function(isResponsive){
		alert("Is responsive: " + isResponsive);
  },
  afterSlideLoad: function( section, origin, destination, direction){
		var loadedSlide = this;
  },
  
  onLeave: function(origin, nextIndex, direction) {
    if(origin.index == 1){
    //fullpage_api.setAllowScrolling(false, 'left, right');
    } else {
    // fullpage_api.setAllowScrolling(true);
    }
    console.log(origin.index);
    if(origin.index == 0){ 
      // fullpage_api.setAllowScrolling(true);
      // fullpage_api.setAllowScrolling(false);
    //  fullpage_api.moveTo(3);
    }
    if(origin.index == 2){ 
      // fullpage_api.setAllowScrolling(false);
     
    //  fullpage_api.moveTo(3);
    } else {
      
    }
    if(origin.index == 3){
    //fullpage_api.moveSectionDown();
    console.log(origin.index);
    //fullpage_api.setAutoScrolling(false);
    // fullpage_api.setScrollBar(false);

    } else {
     // fullpage_api.setAutoScrolling(true);
    }
  },
  afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {
      sliding = false;
  }
});

//FullpageJs - slider is disabled on mobile devices 
if (screen && screen.width < 768) {
  const activeSlder = fullpage_api.getActiveSlide();
  fullpage_api.setAutoScrolling(false);
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

//temporary disabled
$('.selectbox').on("click", function(){
  // $(this).parent().toggleClass('active');
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

