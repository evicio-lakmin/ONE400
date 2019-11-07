  
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

      // Main Menu Hover Effect Handling
      function openCity(evt, cityName) {
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