function openReference(e){if($("#detail").slideDown(),$("#references-masonry").slideUp(),""!==e){var t=$("#detail-slider");t.hasClass("owl-loaded")?t.trigger("replace.owl.carousel",e):(t.html(e),t.owlCarousel({nav:!1,dots:!0,items:1}))}}function closeReference(){$("#references-masonry").slideDown(),$("#detail").slideUp()}$("#filter a").click(function(e){e.preventDefault(),$("#filter li").removeClass("active"),$(this).parent("li").addClass("active");var t=$(this).attr("data-filter");$(".reference-item").each(function(){$(this).data("category")===t||"all"===t?$(this).show():$(this).hide()})}),$(".reference a").on("click",function(e){e.preventDefault();var t=$(this).find(".reference-title").text(),i=$(this).siblings(".reference-description").html();$("#detail-title").text(t),$("#detail-content").html(i);var l=$(this).siblings(".reference-description").data("images").split(",");if(l.length>0){sliderContent="";for(var n=0;n<l.length;++n)sliderContent=sliderContent+'<div class="item"><img src='+l[n]+' alt="" class="img-fluid"></div>'}else sliderContent="";openReference(sliderContent)}),$("#filter button, #detail .close").on("click",function(){closeReference()});