  
      //this will make the scroll animation smooth
      smoothScroll.init();
      
      //menu full page slide
      $(document).ready(function() {
              $('.menu-link').menuFullpage({
                side:"right",
              });
      });

      //scroll plugin settings 
      new fullpage('.fullpage', {
        //options here
        autoScrolling:true,
        licenseKey: '0CE829D2-E63344BC-9BADE6C2-2831D733',
        slidesNavigation: true,
        css3: true,
        scrollBar: false,
        normalScrollElements: '.home-top-content',
        fitToSection: false,
        fitToSectionDelay: 2000,
        scrollHorizontally: true,
        lazyLoad: true,
        fixedElements: 'header',
        // scrollHorizontally: true
      });

      //methods
      // fullpage_api.setAllowScrolling(true);