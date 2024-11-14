<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Robin Oster, Web Developer</title>
    <link href="bootstrap-5.2.0-dist/css/bootstrap.css" rel="stylesheet">
    <link href="styles.css" rel=stylesheet>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/devicon/2.16.0/devicon.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

  </head>
<body id="particle-background">
    <div id="particles-js"></div>
    <div class="container-fluid">
    <div class="row g-0" id="headerRow">
        <?php require_once "header.php" ?>
    </div>  
    <div class="row g-0">
          <div class="row g-0" id="about">
            <div class="col-lg-5" class="aboutLeft">
              <hr id="leftLine"/>
            </div>
            <div class="col-lg-2" class="aboutCenter">
            <h1>About Me</h1>
            </div>
            <div class="col-lg-5" class="aboutRight">
              <hr id="rightLine"/>
            </div>
          </div>
          <div id="aboutPage"></div>
          <div class="row g-0" id="aboutRow">
            <div class="col-md-6">
              <div class="card" id="aboutCard">
                <div class="card-body">
                  <div class="col-md-12">
                    <span><h2 id="introduction">Hello! I'm <span id="name">&nbsp;Robin Oster.</span></h2></span>
                      <p id="infoText1">I'm a full stack web developer, programmer, and illustrator with a passion for design and creating solid, scalable interfaces.</p>
                  </div>
                  <div class="col-md-12">
                    <p id="infoText2">
                      I'm based out of North Canton, Ohio, and when I'm not hacking together websites or pushing code, I'm a freelance artist in my spare time.
                      I'm a recent graduate from Kent State University's Computer Science program, and have experience with a variety of technologies, including the MERN stack.
                    </p>
                  </div>
                  <div class="col-md-6">
                  </div>
                  <div class="col-md-12">
                    <p id="infoText3">Technologies I'm proficient with: </p>
                  </div>
                  <div class="row">
                  <div class="col-md-12" id="technologies1">
                        <i class="devicon-html5-plain-wordmark"></i>
                        <i class="devicon-css3-plain-wordmark"></i>
                        <i class="devicon-javascript-plain"></i>
                        <i class="devicon-nodejs-plain-wordmark"></i>
                        <i class="devicon-react-original-wordmark"></i>
                        <i class="devicon-express-original-wordmark"></i>
                        <i class="devicon-php-plain"></i>
                  </div>
                <div class="row">
                  <div class="col-md-12" id="technologies3">
                        <i class="devicon-git-plain-wordmark"></i>
                        <i class="devicon-bootstrap-plain-wordmark"></i>
                        <i class="devicon-github-original-wordmark"></i>
                        <i class="devicon-mongodb-plain-wordmark"></i>
                        <i class="devicon-mysql-plain-wordmark"></i>
                        <i class="devicon-amazonwebservices-plain-wordmark"></i>
                        <i class="devicon-dynamodb-plain"></i>
                        <i class="devicon-cplusplus-line"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
              <img src="computerIMG.jpg" class="computerIMG">
        </div>
          <?php require_once "work.php"?>
          <?php require_once "contact.php"?>
        <footer>
          <div class="row g-0" id="linksRow">
            <div class="col-md-12" id="linksCol">
                  <a href="https://github.com/spageddy-jones"><i class="devicon-github-original-wordmark"></i></a>
                  <a href="https://twitter.com/spageddy_jones"><i class="devicon-twitter-original"></i></a>
                  <a href="https://www.linkedin.com/in/robin-oster-2505a31b6/"><i class="devicon-linkedin-plain"></i></a>
                  <a href="mailto:mostost96@gmail.com"><i class="fa fa-envelope fa-2xl" aria-hidden="true" id="emailIcon"></i></a>
                </table>
              </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="particles.js-master/particles.js"></script>
    <script>
      //particlesJS.load(@dom-id, @path-json, @callback (optional));
      particlesJS.load('particles-js', 'particles.json', function() {
      console.log('callback - particles.js config loaded');
    });</script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="portfolioJS.js"></script>
</body>
</html>