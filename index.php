<?php
 require 'contact.php';
 session_start();
 if (isset($_SESSION['success']) && ! empty($_SESSION['success'])) {
  echo htmlentities($_SESSION['success']);
  unset($_SESSION['success']);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" media="screen" href="css/style.css" />
    <link rel="stylesheet" href="css/featherlight.css" />
    <script
      src="https://kit.fontawesome.com/7997da006a.js"
      crossorigin="anonymous"
    ></script>
    <title>Nemanja Jakonić</title>
  </head>

  <body>
    <div id="particles-js"></div>

    <div id="wrapper">
      <section id="main">
        <h1>Hello World</h1>
        <h2 id="t1">My name is Nemanja Jakonić</h2>
        <h3 id="t2">
          I'm a self-taught frontend developer, striving to become fullstack
          developer.
        </h3>
        <div class="logo">
          <img
            src="./img/logo.gif"
            title="Shoutout to my girlfriend who made this photo ;)"
            alt=""
          />
        </div>

        <p id="quote"></p>
        <blockquote id="blockquote"></blockquote>
        <div class="nav">
          <a href="#about" class="btn">About</a>
          <a href="#projects" class="btn">Projects</a>
          <a href="#contact" class="btn">Contact</a>
        </div>
      </section>
      <section id="about">
        <div>
          <h2>About:</h2>
          <p>
            I'm Nemanja Jakonić, an ambitious self-taught front-end developer
            from Novi Sad looking for a full-time web development role. I enjoy
            making beautiful websites using HTML, CSS, PHP, JavaScript and
            jQuery. My code is always clean, maintainable & cross-browser
            friendly. My current passion is delving further into JavaScript,
            with a particular focus on ReactJS. When I'm not coding you'll find
            me swimming, or in a dojo training kendo.
          </p>
          <div class="technologies">
            <h5>Technologies I currently know and improving :</h5>
            <i class="fab fa-html5 fa-2x"></i>
            <i class="fab fa-css3-alt fa-2x"></i>
            <i class="fab fa-sass fa-2x"></i>
            <i class="fab fa-bootstrap fa-2x"></i>
            <i class="fab fa-js-square fa-2x"></i>
            <i class="fab fa-php fa-2x"></i>
            <i class="fab fa-react fa-2x"></i>
            <i class="fab fa-magento fa-2x"></i>
          </div>
        </div>
        <h2>Certificates:</h2>
        <div id="certificates">
          <div class="certificate">
            <div class="overlay-cert"></div>
            <img src="img/certificate1.jpg" alt="" />
            <a
              href="img/certificate1.jpg"
              id="certificate-tile"
              class="magnifying-glass-icon"
              data-featherlight="image"
            >
              <i class="fa fa-search fa-2x"></i
            ></a>
          </div>
          <div class="certificate">
            <div class="overlay-cert"></div>
            <img src="img/certificate2.jpg" alt="" />
            <a
              href="img/certificate2.jpg"
              id="certificate-tile"
              class="magnifying-glass-icon"
              data-featherlight="image"
            >
              <i class="fa fa-search fa-2x"></i
            ></a>
          </div>
        </div>
      </section>
      <section id="projects">
        <h2>Projects:</h2>
        <div class="projects">
          <div id="project1">
            <h3>Kokoro</h3>
            <p class="p1">
              Technologies used: HTMl, CSS, Javascript, Jquery
            </p>
            <div class="project project1">
              <div class="overlay"></div>
              <a
                href="https://kokoro.netlify.com/"
                target="_blank"
                class="btn btn-project"
                >Demo</a
              >
              <a
                href="https://github.com/NemanjaJakonic/kokoro"
                target="_blank"
                class="btn btn-project"
                >Code</a
              >
              <p class="p1">
                Project I did for kendo club I train in.Single page, fully
                responsive.
              </p>
            </div>
          </div>

          <div id="project2">
            <h3>Rock, paper, scissors</h3>
            <p class="p2">
              Technologies used: HTMl, CSS, Bootstrap 4, Javascript
            </p>
            <div class="project project2">
              <div class="overlay"></div>
              <a
                href="https://rockpaperscissors-nemanja.netlify.com/"
                target="_blank"
                class="btn btn-project"
                >Demo</a
              >
              <a
                href="https://github.com/NemanjaJakonic/rockpaperscissors"
                target="_blank"
                class="btn btn-project"
                >Code</a
              >
              <p class="p2">
                First JavaScript project I did in my learning process, with
                Bootstrap 4, and Animate.css
              </p>
            </div>
          </div>
          <div id="project3">
            <h3>WeatherJS</h3>
            <p class="p3">Technologies used: HTMl, CSS, Javascript</p>
            <div class="project project3">
              <div class="overlay"></div>
              <a
                href="https://nemanja-weatherjs.netlify.com"
                target="_blank"
                class="btn btn-project"
                >Demo</a
              >
              <a
                href="https://github.com/NemanjaJakonic/weatherJS"
                target="_blank"
                class="btn btn-project"
                >Code</a
              >
              <p class="p3">Simple weather app with OpenWeather Api</p>
            </div>
          </div>
          <div id="project4">
            <h3>Formula F1 Stats</h3>
            <p class="p4">Technologies used: ReactJS, MaterializeCSS</p>
            <div class="project project4">
              <div class="overlay"></div>
              <a href="" class="btn btn-project">Demo</a>
              <a href="" class="btn btn-project">Code</a>
              <p class="p4">
                React app with Ergast Api, project I did for practical part of
                course in Smart School
              </p>
            </div>
          </div>
          <div id="project5">
            <h3>LyricsApp</h3>
            <p class="p5">Technologies used: ReactJS, Bootstrap 4</p>
            <div class="project project5">
              <div class="overlay"></div>
              <a
                href="https://lyricsapp-nemanja.netlify.com/"
                target="_blank"
                class="btn btn-project"
                >Demo</a
              >
              <a
                href="https://github.com/NemanjaJakonic/LyricsApp"
                target="_blank"
                class="btn btn-project"
                >Code</a
              >
              <p class="p5">
                Simple React app for fetching song lyrics, artist, album and
                song information, using LastFM and Lyrics.ovh API
              </p>
            </div>
          </div>
        </div>
      </section>
      <section id="contact">
        <h2>Contact me:</h2>

        <form method="post" action="contact.php">
          <p>Name:</p>
          <input
            type="text"
            name="name"
            id="name"
            value="<?php $name?>"
            placeholder="Enter your name..."
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Enter name..'"
            required
          />
          <br />
          <p>Email:</p>
          <input
            type="email"
            name="email"
            id="email"
            value="<?php $email?>"
            placeholder="Enter your email..."
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Enter your email...'"
            required
          />
          <br />
          <p>Message:</p>
          <br />
          <textarea
            name="message"
            id="message"
            value="<?php $message?>"
            placeholder="Enter your message..."
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Enter your message...'"
            cols="30"
            rows="5"
            required
          ></textarea>
          <br />
          <input
            type="submit"
            name="submit"
            value="Submit"
            class="btn submit"
            id="submit"
          />
        </form>
        <footer>
          <a href="https://github.com/NemanjaJakonic" target="_blank"
            ><i class="fab fa-github fa-2x"></i
          ></a>
          <a href="https://github.com/NemanjaJakonic" target="_blank"
            ><i class="fab fa-linkedin fa-2x"></i
          ></a>
          <a href="#wrapper" id="btn" class="btn secondary-btn"
            ><i class="fas fa-chevron-up"></i
          ></a>
        </footer>
      </section>
    </div>

    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/featherlight.js"></script>
    <script src="js/baffle.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
