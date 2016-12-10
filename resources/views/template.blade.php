<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8">
    <title>@yield('title')</title>

    <script type="text/javascript" src="{{URL::asset('lib/jquery/jquery-3.1.1.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{URL::asset('lib/bootstrap/css/bootstrap.min.css')}}">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Akira's Portfolio</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Resume</a></li>
              <li><a href="#">About Me</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Summary Overview</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">HTML5 Canvas Game</a></li>
                  <li role="separator" class="divider"></li>

                  <li><a href="#">NodeJS - iTrack App</a></li>
                  <li><a href="#">NodeJS - Inventory Managment</a></li>
                  <li><a href="#">NodeJS - Web Scraping</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Ruby On Rails - Bucket List</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Laravel - Personal Website</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li class="{{Request::is('register') ? 'active' : ''}}"><a href="/register">Register</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>