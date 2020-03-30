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
  }
  baffleText();

  $(".project1").one("mouseenter", function() {
    $(".p1").css({ opacity: "1" });
    baffle(".p1").reveal(500);
  });
  $(".project2").one("mouseenter", function() {
    $(".p2").css({ opacity: "1" });
    baffle(".p2").reveal(500);
  });

  $(".project3").one("mouseenter", function() {
    $(".p3").css({ opacity: "1" });
    baffle(".p3").reveal(500);
  });

  $(".project4").one("mouseenter", function() {
    $(".p4").css({ opacity: "1" });
    baffle(".p4").reveal(500);
  });
  $(".project5").one("mouseenter", function() {
    $(".p5").css({ opacity: "1" });
    baffle(".p5").reveal(500);
  });
  $(".project6").one("mouseenter", function() {
    $(".p6").css({ opacity: "1" });
    baffle(".p6").reveal(500);
  });
  $(".project7").one("mouseenter", function() {
    $(".p7").css({ opacity: "1" });
    baffle(".p7").reveal(500);
  });
  setTimeout(function() {
    $("pre").hide();
  }, 3000);
});

// // Set up our HTTP request
// var xhr = new XMLHttpRequest();

// // Setup our listener to process completed requests
// xhr.onload = function () {

// 	// Process our return data
// 	if (xhr.status >= 200 && xhr.status < 300) {
// 		// What do when the request is successful

//     console.log(xhr.response)
//     document.getElementById('quote').textContent = xhr.response.en
//     document.getElementById('blockquote').textContent = xhr.response.author

// 	} else {
// 		// What do when the request fails
// 		console.log('The request failed!');
// 	}

// 	// Code that should run regardless of the request status
// 	//console.log('This always runs...');
// };

// // Create and send a GET request
// // The first argument is the post type (GET, POST, PUT, DELETE, etc.)
// // The second argument is the endpoint URL
// xhr.open('GET', 'https://programming-quotes-api.herokuapp.com/quotes/random');
// xhr.responseType = 'json';

// xhr.send();

$.getJSON("quotes.json", function(json) {
  console.log(json[0].body); // this will show the info it in firebug console
  let i = Math.floor(Math.random() * 325);
  console.log(i);
  document.getElementById("quote").textContent = json[i].body;
  document.getElementById("blockquote").textContent = json[i].authors;
});
