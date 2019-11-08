
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

//scroll plugin settings 
new fullpage('.fullpage', {
  //options here
  //autoScrolling:true,
  licenseKey: '0CE829D2-E63344BC-9BADE6C2-2831D733',
  slidesNavigation: true,
  css3: true,
  //scrollBar: true,
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
    
    console.log(section.index);
		//first slide of the second section
		// if(section.anchor == 'secondPage' && destination.index == 1){
		// 	alert("First slide loaded");
		// }

		// //second slide of the second section (supposing #secondSlide is the
		// //anchor for the second slide)
		// if(section.index == 1 && destination.anchor == 'secondSlide'){
		// 	alert("Second slide loaded");
		// }
  },
  
  onLeave: function(index, nextIndex, direction) {

    console.log(index);
    console.log(nextIndex);
    // if(index == 1 && !sliding) {

    //     if(direction == 'down' && slideIndex < 1) {

    //         sliding = true;
    //         $.fn.fullpage.moveSlideRight();
    //         slideIndex++;
    //         return false;

    //     } else if(direction == 'up' && slideIndex > 1) {

    //         sliding = true;
    //         $.fn.fullpage.moveSlideLeft();
    //         slideIndex--;
    //         return false;

    //     }

    // } else if(sliding) {
    //     return false;
    // }
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

