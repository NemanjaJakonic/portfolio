<?php
 require 'contact.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" media="screen" href="css/style.css" />
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

        <h4 id="t3">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia enim
          perspiciatis praesentium incidunt, minus, vel maiores libero similique
          neque magni, id saepe quidem.
        </h4>
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
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis,
            delectus magnam, rem obcaecati est illum mollitia consequatur
            excepturi nulla voluptatum doloremque alias dolore atque dignissimos
            cum sint debitis enim ipsum? Possimus, veritatis sapiente, ratione
            id quae unde quo illum nihil excepturi reiciendis saepe ipsam sed
            obcaecati, totam atque ipsa. Harum ipsam quae nesciunt quia? Nisi
            officia modi maiores magnam natus. Non accusantium sequi dolor
            incidunt veniam sint. Nulla culpa voluptates aliquam dolores labore
            tempora voluptas iure natus! Possimus ratione voluptate corrupti rem
            animi vitae! Culpa ipsam tempore provident suscipit magni. Explicabo
            aliquam adipisci veniam corporis mollitia reprehenderit soluta
            perspiciatis dignissimos quidem libero dolorem quibusdam velit vero,
            vel dolores expedita, eligendi nulla dolorum corrupti commodi quam
            minus quae. Iusto, enim illum? Recusandae debitis, voluptate officia
            beatae quidem ipsum libero itaque enim illum atque non praesentium
            veniam deserunt placeat, commodi dolore. Velit dignissimos labore ea
            assumenda dicta qui, ratione iste eligendi quos.
          </p>
        </div>
      </section>
      <section id="projects">
        <h2>Projects:</h2>
        <div class="projects">
          <div id="project1">
            <h3>Kokoro</h3>
            <p class="p1">Technologies used: HTMl, CSS, Javascript, Jquery</p>
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
              <p class="p1">Project I did for kendo club I train in.Single page, fully responsive.</p>
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
              <p class='p2'>First Javascript project, well-known game rock, paper, scissors</p>

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
              <p class='p3'>Simple weather app with OpenWeather Api</p>

            </div>
          </div>
          <div id="project4">
            <h3>Formula F1 Stats</h3>
            <p class="p4">Technologies used: ReactJS, MaterializeCSS</p>
            <div class="project project4">
              <div class="overlay"></div>
              <a href="" class="btn btn-project">Demo</a>
              <a href="" class="btn btn-project">Code</a>
              <p class='p4'>React app with Ergast Api, project I did for practical part of course in Smart School</p>

            </div>
          </div>
        </div>
      </section>
      <section id="contact">
        <h2>Contact me:</h2>

        <form method="post" name="FrmEnquiry" id="FrmEnquiry" action="" onsubmit="sendEnquiryform();">
          <p>Name:</p>
            <input
            type="text"
            name="name"
            id="name"
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
          <p id="successMessage"></p>
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

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/baffle.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
