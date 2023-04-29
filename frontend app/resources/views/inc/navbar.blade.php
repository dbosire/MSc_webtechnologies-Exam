<nav class="navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand" href="#">
      <img src="{{asset('/images/logo.png')}}" alt='SCIT' style='width:30px;'>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="/programmes">Programmes</a>
              <a class="dropdown-item" href="/curricula">Curricula</a>

            </div>
          </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#!" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Programmes</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="/postgraduate">Postgraduate</a>
                    <a class="dropdown-item" href="/undergraduate">Undergraduate</a>
                    <a class="dropdown-item" href="/diploma">Diploma</a>
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#!" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Staff</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="/administration#chancellor">Chancellor</a>
                <a class="dropdown-item" href="/administration#vc">Vice Chancellor</a>
                <a class="dropdown-item" href="/administration#director">Director</a>
                <a class="dropdown-item" href="/administration#faculty">Faculty</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/departments">Departments</a>
            </li>
          <!--  <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#!" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Students</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="/student-affairs#anti-ragging">Anti Ragging</a>
                <a class="dropdown-item" href="/student-affairs#student-welfare">Student Welfare</a>
                <a class="dropdown-item" href="/convocation">Convocation</a>
              </div>
            </li>-->
            <li class="nav-item">
            <a href="{{env('APP_BACKEND')}}/login" class="nav-link" target="'_blank'">Apply Now</a>
            </li>
          <!--  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Campus Life</a>
              <a class="dropdown-item" href="#">Education System</a>
              <a class="dropdown-item" href="#">Achievements</a>
            </div>
            </li>-->
          </ul>
          <form class="form-inline mt-2 mt-md-0 d-none d-sm-block">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
