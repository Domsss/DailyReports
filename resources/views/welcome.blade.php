<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <div class="navigation clearfix pl-5 pr-5 pt-3">
                      <div class="main-logo float-left">
                        <h1>Nic</h1>
                      </div>
                      <div class="menu-icon float-right">
                        <i class="fa fa-bars fa-3x"></i>
                      </div>
                    </div>
                    <ul class="side-menu">
                      <li>
                        <a href="{{ route('login') }}">Login</a>
                      </li>
                      <li>
                        <a href="{{ route('register') }}">Register</a>
                      </li>
                    </ul>
                @endauth
            </div>
        @endif
        
        <div class="reports-form mt-5">
          <form action="/" method="post">
            <div class="ml-5">
              <div class="col col-lg-4">
                <div class="form-group">
                  <div class="card p-4">
                    <h5 class="card-title">Daily Reports</h5>
                    <label for="">Date</label>
                    <div class="input-group mb-3">
                      <input type="date" class="form-control" disabled/>
                      <div class="input-group-prepend">
                        <span class="input-group-text" id=""><i class="fa fa-edit"></i></span>
                      </div>
                    </div>
                    <label for="">Job Type</label>
                    <input type="text" class="form-control mb-3">
                    <label for="">Project Code</label>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="ABC" maxlength="3">
                      <input type="text" class="form-control" placeholder="123" maxlength="3">
                      <input type="text" class="form-control" placeholder="4567" maxlength="4">
                    </div>
                    <label for="">Project Name</label>
                    <input type="text" class="form-control mb-3">
                    <label for="">Time Duration</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="">From</span>
                      </div>
                      <input type="text" class="form-control">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="">To</span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary btn-block mt-3" value="Submit">
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
    <!-- Compiled and minified JavaScript -->
  </body>
</html>
