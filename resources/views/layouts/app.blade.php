<html>
  <head>
    <title>Chase Laravel HelloWorld - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top navbar-inverse">
      <div class="container">
        <ul id="navlinks" class="nav navbar-nav">
          <li>
            <a id="home" href="/"><span class="glyphicon glyphicon-upload"></span>Home</a>
          </li>
          <li>
            <a id="login" href="/login"><span class="glyphicon glyphicon-upload"></span>Login</a>
          </li>
          <li>
            <a id="register" href="/register"><span class="glyphicon glyphicon-list-alt"></span>Register</a>
          </li>
          <li>
            <a id="profile" href="/profile"><span class="glyphicon glyphicon-book"></span>Profile</a>
          </li>
          <li>
            <a id="blogs" href="/blogs"><span class="glyphicon glyphicon-book"></span>Blogs</a>
          </li>
        </ul>
      </div>
    </nav>
    <script>
      function makeActive() {
        if (window.location.href.split('/').pop()=="") {
          document.getElementById('home').parentNode.className="active";
        }
        else {
          document.getElementById(window.location.href.split('/').pop()).parentNode.className="active";
        }
      }

      makeActive();
    </script>

    <div class="container">
      @yield('content');
    </div>

  </body>

</html>
