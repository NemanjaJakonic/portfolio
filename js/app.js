/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */

$(document).ready(function() {
  // Add smooth scrolling to all links
  $("a").on("click", function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top
        },
        800,
        function() {
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        }
      );
    } // End if
  });
  particlesJS.load("particles-js", "./particles.json", function() {
    console.log("particles.js loaded - callback");
  });

  var btn = document.getElementById("btn");

  window.addEventListener("scroll", function() {
    "use strict";

    if (scrollY > 600) {
      btn.style.display = "block";
    } else {
      btn.style.display = "none";
    }
  });

  function baffleText() {
    setTimeout(function() {
      baffle("#t1").reveal(1500);
    }, 200);
    setTimeout(function() {
      baffle("#t2").reveal(1500);
    }, 1000);
    setTimeout(function() {
      baffle("#t3").reveal(1500);
    }, 1700);
  }
  baffleText();
});

$(".project1").one("mouseenter", function() {
  $(".p1").css({ opacity: "1" });
  baffle(".p1").reveal(500);
});
// $('#project1').mouseout(function() {
//   $('#p1').css({ display: 'none' });
// });

$(".project2").one("mouseenter", function() {
  $(".p2").css({ opacity: "1" });
  baffle(".p2").reveal(500);
});
// $('.project2').mouseout(function() {
//   $('.p2').css({ display: 'none' });
// });

$(".project3").one("mouseenter", function() {
  $(".p3").css({ opacity: "1" });
  baffle(".p3").reveal(500);
});
// $('.project3').mouseout(function() {
//   $('.p3').css({ display: 'none' });
// });

$(".project4").one("mouseenter", function() {
  $(".p4").css({ opacity: "1" });
  baffle(".p4").reveal(500);
});
// $('.project4').mouseout(function() {
//   $('#p4').css({ display: 'none' });
// });
// $( ".project1" ).off( "mouseenter mouseleave" );
/* Otherwise just put the config content (json): */

function sendEnquiryform() {
  var name = $("#name").val();
  var email = $("#email").val();
  var message = $("#message").val();
  $.post(
    "contact.php",
    "name=" + name + "&email=" + email + "&message=" + message,
    function(result, status, xhr) {
      if (status.toLowerCase() == "error".toLowerCase()) {
        alert("An Error Occurred..");
      } else {
        //alert(result);
        $("#successMessage").html(result);
      }
    }
  ).fail(function() {
    alert("something went wrong. Please try again");
  });
}
