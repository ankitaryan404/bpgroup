
// $(document).ready(function () {
//     $(".sub_btn").click(function () {
//       $(this).next(".sub_menu").slideToggle();
//       $(this).find(".dropdown").toggleClass("rotate");
//     });

//     // jquery for expand and collapse the sidebar
//     $(".hamburger_div").click(function () {
//       $(".side_bar").addClass("active");
//       $(".hamburger_div").css("visibility", "hidden");
//     });
//     $(".close_btn").click(function () {
//       $(".side_bar").removeClass("active");
//       $(".hamburger_div").css("visibility", "visible");
//     });
//   });

$(document).ready(function($){

    $('#bczyousearch_Parent_div .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

	$('#popularowner_Parent_div .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

    $('#propertyservices_Parent_div .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

       $('#top_projects_Parent_div .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

          $('#trendingindelhi_Parent_div .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
    


    });

           $('#toolsand_advice_parentdiv .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
    


    });


    $(".sub_btn").click(function () {
        $(this).next(".sub_menu").slideToggle();
        $(this).find(".dropdown").toggleClass("rotate");
      });
  
      // jquery for expand and collapse the sidebar
      $(".hamburger_div").click(function () {
        $(".side_bar").addClass("active");
        $(".hamburger_div").css("visibility", "hidden");
      });
      $(".close_btn").click(function () {
        $(".side_bar").removeClass("active");
        $(".hamburger_div").css("visibility", "visible");
      });

          
	});

// $(document).ready(function(){

// $('.sub_btn').click(function(){
// $(this).next('.sub_menu').slideToggle();

//   });

// });

//--With jquery --  //
function open_cont_modal(){
jQuery("#main_blur_div").toggleClass("blur");
jQuery("#cont_own_modal").toggleClass("active");
};


/////-------With javascript--------////////
function open_num(){
document.getElementById("main_blur_div").classList.toggle('blur');
document.getElementById("get_phon_modal").classList.toggle('active');
};
///----- END---/////

function sort_by(){
    var sort_by_value=jQuery('#sort_by_value').val();
    jQuery('#sort').val(sort_by_value);
    jQuery('#categoryFilter').submit();
  }
  
  function sort_price_filter(){
    jQuery('#filter_price_start').val(jQuery('#skip-value-lower').html());
    jQuery('#filter_price_end').val(jQuery('#skip-value-upper').html());
    jQuery('#categoryFilter').submit(); 
  }
