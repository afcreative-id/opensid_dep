//<![CDATA[
// Preloader
$(window).load(function() {
  $("#loader").fadeOut(), $("#preloader").delay(350).fadeOut("slow"), $("body").delay(350).css({
    overflow: "visible"
  })
});

// Head Info
var list_hovered = null;

function swipe_list() {
  $('#head-info ul').filter(function(item) {
    return !$(this).is(list_hovered)
  }).each(function() {
    $(this).find('li:first').slideUp(function() {
      $ticker = $(this).closest('#head-info ul');
      $(this).appendTo($ticker).slideDown();
    });
  });
}
setInterval(swipe_list, 5000);
$(function() {
  $('#head-info ul').hover(function() {
    list_hovered = $(this);
  }, function() {
    list_hovered = null;
  });
});
//Head Search
$(function() {
  $('a[href="#search-bar"]').on("click", function(e) {
    e.preventDefault(), $("#search-bar").addClass("open"), $('#search-bar > form > input[type="search"]').focus()
  }), $("#search-bar, #search-bar button.close").on("click keyup", function(e) {
    e.target != this && "close" != e.target.className && 27 != e.keyCode || $(this).removeClass("open")
  })
});
//Head Navigation
! function(s) {
  s.fn.menumaker = function(n) {
    var e = s(this),
      o = s.extend({
        format: "dropdown",
        sticky: !1
      }, n);
    return this.each(function() {
      s(this).find("#menu-btn").on("click", function() {
        s(this).toggleClass("menu-opened");
        var n = s(this).next("ul");
        n.hasClass("open") ? n.slideToggle(150).removeClass("open") : (n.slideToggle(150).addClass("open"), "dropdown" === o.format && n.find("ul").show())
      }), e.find("li ul").parent().addClass("has-sub"), multiTg = function() {
        e.find(".has-sub").prepend('<span class="submenu-btn"></span>'), e.find(".submenu-btn").on("click", function() {
          s(this).toggleClass("submenu-opened"), s(this).siblings("ul").hasClass("open") ? s(this).siblings("ul").removeClass("open").slideToggle(150) : s(this).siblings("ul").addClass("open").slideToggle(150)
        })
      }, "multitoggle" === o.format ? multiTg() : e.addClass("dropdown"), !0 === o.sticky && e.css("position", "fixed")
    })
  }
}(jQuery),
function(s) {
  s(document).ready(function() {
    s("#head-nav").menumaker({
      format: "multitoggle"
    })
  })
}(jQuery);
//Scroll Progress
$(document).ready(function() {
  var n = function() {
      return $(document).height() - $(window).height()
    },
    o = function() {
      return $(window).scrollTop()
    };
  if ("max" in document.createElement("scrollbar-top")) {
    (r = $("scrollbar-top")).attr({
      max: n()
    }), $(document).on("scroll", function() {
      r.attr({
        value: o()
      })
    }), $(window).resize(function() {
      r.attr({
        max: n(),
        value: o()
      })
    })
  } else {
    var e, t, r = $(".scrollbar"),
      i = n(),
      c = function() {
        r.css({
          width: (e = o(), t = e / i * 100, t += "%")
        })
      };
    $(document).on("scroll", c), $(window).on("resize", function() {
      i = n(), c()
    })
  }
});
//]]>

//Widget Archive Agenda
$(".tab-content-agenda").hide();
$(".tab-title-agenda a:first").addClass("tab-selected").show();
$(".tab-content-agenda:first").show();
$(".tab-title-agenda a").click(function() {
  $(".tab-title-agenda a").removeClass("tab-selected a");
  $(this).addClass("tab-selected");
  $(".tab-content-agenda").hide();
  var activeTab = $(this).attr("href");
  $(activeTab).fadeIn();
  return false;
});

//Widget Archive Article
$(".tab-content-archive").hide();
$(".tab-title-archive a:first").addClass("tab-selected").show();
$(".tab-content-archive:first").show();
$(".tab-title-archive a").click(function() {
  $(".tab-title-archive a").removeClass("tab-selected a");
  $(this).addClass("tab-selected");
  $(".tab-content-archive").hide();
  var activeTab = $(this).attr("href");
  $(activeTab).fadeIn();
  return false;
});

//Modal : Disclaimer
var modal = document.getElementById("modal-disclaimer");
var btn = document.getElementById("foot-disclaimer");
var span = document.getElementsByClassName("modal-close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}