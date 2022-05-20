$(document).ready(function() {
    var owl = $('.abc2');
    owl.owlCarousel({
      loop: true,
      nav: false,
      
      responsive: {
        0: {
          margin: 55,
          items: 1
        },
        600: {
          margin: 55,
          items: 2
        },
        960: {
          items: 3,
          margin: 55
        },  
        1100: {
          margin: 15,
          items: 5
        },
        1200: {
          margin: 12,
          items: 3
        }
      }
    });
    owl.on('mousewheel', '.owl-stage', function(e) {
      if (e.deltaY > 0) {
        owl.trigger('next.owl');
      } else {
        owl.trigger('prev.owl');
      }
      e.preventDefault();
    });
  })

  $(document).ready(function() {
    var owl = $('.owlcaro2');
    owl.owlCarousel({
      loop: true,
      nav: false,
      
      responsive: {
        0: {
          margin: 85,
          items: 1
        },
        600: {
          margin: 55,
          items: 2
        },
        960: {
          items: 3,
          margin: 55
        },  
        1100: {
          margin: 15,
          items: 5
        },
        1200: {
          margin: 55,
          items: 4
        }
      }
    });
    // owl.on('mousewheel', '.owl-stage', function(e) {
    //   if (e.deltaY > 0) {
    //     owl.trigger('next.owl');
    //   } else {
    //     owl.trigger('prev.owl');
    //   }
    //   e.preventDefault();
    // });
  })