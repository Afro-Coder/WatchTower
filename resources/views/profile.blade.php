<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Bootstrap template by">
  <meta name="author" content="Leon">

  <title>Resume - Leon Nunes</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
   --}}

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">


  <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
  {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet"> --}}

  <!-- Custom styles for this template -->
  <link href="{{asset('css/resume.min.css')}}" rel="stylesheet">


</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Leon Nunes</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid  rounded-circle img-profile mx-auto mb-2"  src="{{asset('img/profile.png')}}" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#projects">Projects</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">Leon
          <span class="text-primary">Nunes</span>
        </h1>
        <div class="subheading mb-5">
          <a href="mailto:leon@leonnunes.dev">leon@leonnunes.dev</a>
          <br />
          <a href="mailto:leon9923@gmail.com">leon9923@gmail.com</a>
        </div>
        <p class="lead mb-5">Hey there!<br />I'm a Bsc.IT graduate, with a year's experience in solving web and DNS based queries. My goal is to work in automating processes and system administration.p>
          </p>
        <div class="social-icons">
          <a href="https://www.linkedin.com/in/leon-nunes">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="https://github.com/leon-nunes">
            <i class="fab fa-github"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="experience">
      <div class="w-100">
        <h2 class="mb-0">Experience</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Web Solution Specialist</h3>
            <div class="subheading mb-3">Endurance International Group</div>
            <p>Working with customers and solving their queries on a wide range of topics such as DNS, Windows and Linux Hosting. Including Virtual Private Servers</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">September 2018 - Present</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Junior Python Developer.</h3>
            <div class="subheading mb-3">St. Andrews College.</div>
            <p>Worked with the Flask framework written in Python and built a feedback management system to take feedback of Professors.
              Hosted in a Lan environment and was used to by the entire degree college.
            </p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">November 2017 - January 2018</span>
          </div>
        </div>
      </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Education</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">St. Andrews College</h3>
            <div class="subheading mb-3">Bachelor's in Information Technology.</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">2015 - 2018</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0">St. Andrews College</h3>
            <div class="subheading mb-3">Higher Secondary - Science</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">2013 - 2015</span>
          </div>
        </div>

      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Skills</h2>

        <div class="subheading mb-3">Programming Languages &amp; Tools</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-python" style="color:black;"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-php" style="color:black;"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square" style="color:black;"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-sass" style="color:black;"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-less" style="color:black;"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-laravel" style="color:black;"></i>
          </li>
          <li class="list-inline-item">
            <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Ffindicons.com%2Ffiles%2Ficons%2F2773%2Fpictonic_free%2F128%2Fprog_django.png&f=1&nofb=1"  height="60" id="django"/>

          </li>
          <li class="list-inline-item">
            <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fflask-training-courses.uk%2Fimages%2Fflask-logo.png&f=1&nofb=1"  height="60" />

          </li>

        </ul>

        <div class="subheading mb-3">Workflow</div>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            Mobile-First, Responsive Design</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Cross Browser Testing &amp; Debugging</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Cross Functional Teams</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Agile Development &amp; Scrum</li>
        </ul>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5 ">Interests</h2>
        <p class="lead">Apart from being a web developer, I enjoy most of my time being indoors. In the summers, I love cycling. During the rainy season I love to go out on treks.</p>
        <p class="mb-0 lead">I follow a number of sci-fi and fantasy genre television shows, I spend a large amount of my free time exploring the latest technology advancements in the back-end development world. I love playing First Person Shooter games like Counterstrike and Portal.</p>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-end" id="projects">
      <div class="w-100">
        <h2 class="mb-5">Projects</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">WatchTower</h3>
            <p class="mt-2 lead">This Project Was built using Laravel, its a simple dashboard to view the load and uptime on linux systems.</p>
            <p class="lead">
              It has a chart for CPU load and polls the server at an interval.
            </p>
            <ul class="list-inline dev-icons">
              <li class="list-inline-item">
                <a href="https://github.com/leon-nunes/WatchTower">
                  <i class="fab fa-github"></i>
                </a>

          </li>
          </ul>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Feedback Management System</h3>
            <p class="mt-2 lead">This Project Was built using Python and the Flask framework.</p>
            <p class="lead">
              It was used to take feedback of teachers. It was also my final project for the last semester of my bachelors degree.
            </p>
            <ul class="list-inline dev-icons">
              <li class="list-inline-item">
                <a href="https://github.com/leon-nunes/feebackmanagement">
                  <i class="fab fa-github">  </i>
                </a>

          </li>
          </ul>
          </div>


            <!-- <span class="text-primary">November 2017 - January 2018</span> -->

        </div>

        <div class="mt-5">
          <a href="https://github.com/davidtmiller
" target="_blank">Template created by David Miller.</a>
        </div>


      <!-- </div> -->
    </section>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}" ></script>
  {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script> --}}

  <script type="text/javascript" src="{{asset('js/bootstrap.bundle.js')}}"></script>
  {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> --}}



  <!-- Plugin JavaScript -->
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" defer></script> --}}
  <script type="text/javascript" src="{{asset('js/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  {{-- <script src="js/resume.min.js"></script> --}}
  <script  type="text/javascript" src="{{asset('js/resume.min.js')}}"></script>

</body>

</html>
