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
            <div class="ml-5 mr-5">
              <div class="clearfix">
                <div class="col col-lg-4 float-left">
                  <div class="form-group">
                    <div class="card p-4">
                      <h5 class="card-title">Daily Reports</h5>
                      <label for="">Date</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{date('m/d/Y')}}" disabled/>
                        <div class="input-group-prepend">
                          <span class="input-group-text" id=""><i class="fa fa-edit"></i></span>
                        </div>
                      </div>
                      <label for="">Job Type</label>
                      <select name="" id="" class="form-control mb-3" required/>
                        <option value=""></option>
                        <option value="">Coding</option>
                        <option value="">Quality Assurance</option>
                        <option value="">Idle</option>
                        <option value="">Break</option>
                      </select>
                      <label for="">Project Code</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="ABC" maxlength="3" required/>
                        <input type="text" class="form-control" placeholder="123" maxlength="3" required/>
                        <input type="text" class="form-control" placeholder="4567" maxlength="4" required/>
                      </div>
                      <label for="">Project Name</label>
                      <input type="text" class="form-control mb-3" required/>
                      <label for="">Time Duration</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="">From</span>
                        </div>
                        <input type="text" class="form-control" required/>
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="">To</span>
                        </div>
                        <input type="text" class="form-control" required>
                      </div>
                    <button type="submit" class="btn btn-primary btn-block mt-3" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Submit</button>
                    </div>
                  </div>
                </div>
                <div class="col col-lg-8 float-left card p-4 list">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Job Type</th>
                        <th scope="col">Project Code</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Time Duration</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Are you sure you want to save ?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
    
  <!-- Button trigger modal -->
    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
