<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Insurance Policy Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="public/assets/css/fontawesome.css">
    <link rel="stylesheet" href="public/assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="public/assets/css/owl.css">
    <link href="public/asset/css/style.css" rel="stylesheet">

    <link href="public/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="public/asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="public/asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="public/asset/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="public/asset/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="public/asset/vendor/simple-datatables/style.css" rel="stylesheet">

  </head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{url('home')}}"><h2><em>Insurance Policy System</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('services')}}">Our Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="functional-buttons">
            <ul>
              <li><a href="{{url('login')}}">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

        <!-- Banner Starts Here -->
        <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="header-text caption">
            <div class="card">
              <h5 class="card-title">Apply for Insurance Policy</h5>
                @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
        @endforeach
    @endif

    @if(Session::has('success'))
    <p class="text-success">{{session('success')}}</p>
    @endif
              <!-- Vertical Form -->
              <form method="post" enctype="multipart/form-data" action="{{url('admin/booking')}}">
            @csrf
              <table class="table datatable">
            <tr>
                <th>Policy<span class="text-danger" >*</span></th>
                     <td>
                     <select class="form-control" name="room_id">
                                <option>--- Select Policy ---</option>
                                     @foreach($data as $rooms)
                                        <option value="{{$rooms->title}}">{{$rooms->title}}</option>
                                    @endforeach
                            </select>
                    </td>
            </tr>
            <tr>
                    <th>Renewal Date<span class="text-danger">*</span></th>
                    <td><input name="checkin_date" type="date" class="form-control checkin-date" /></td>
                </tr>
                <tr>
                    <th>Expiring Date <span class="text-danger">*</span></th>
                    <td><input name="checkout_date" type="date" class="form-control checkin-date" /></td>
                </tr>
                <tr>
                    <th>Adults <span class="text-danger">*</span></th>
                    <td><input name="total_adults" type="text" class="form-control" /></td>
                </tr>
                <tr>
                    <th>Children</th>
                    <td><input name="total_children" type="text" class="form-control" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input name="price" type="text" class="form-control" /></td>
                </tr>
                    <td colspan="2">
                        <input type="hidden" name="ref" value="front" />
                        <input type="submit" value="Apply" class="btn btn-primary" />
                    </td> 
                </tr>
            </table>
              </form><!-- Vertical Form -->

            </div>
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>About Us</h2>
              </div>
              <p>Insurance Policy Management system is a system that helps people acquire insurance policies wherever they are at a cheaper cost and convinient manner</p>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>Insurance Policy Plans</h2>
              </div>
              <ul class="footer-list">
                <li><a href="#">Basic Plans</a></li>
                <li><a href="#">Advanced Plans</a></li>
                <li><a href="#">Common Plans</a></li>
              </ul>
            </div>
          </div>
          
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>Useful Links</h2>
              </div>
              <ul class="footer-list">
                <li><a href="#">Insurance Policy Platform</a></li>
                <li><a href="#">Light Speed Zone</a></li>
                <li><a href="#">Content Delivery Network</a></li>
                <li><a href="#">Customer Support</a></li>
                <li><a href="#">Latest News</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>More Information</h2>
              </div>
              <ul class="footer-list">
                <li>Phone: <a href="#">0707480410</a></li>
                <li>Email: <a href="#">henry.kamau01@gmail.com</a></li>
                <li>Support: <a href="#">support@company.com</a></li>
                <li>Website: <a href="#">www.insurance.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="sub-footer">
              <p>Copyright &copy; 2021 Insurance Policy Management System
				- Designed by <a rel="nofollow" href="#">Henrik</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Ends Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="public/assets/js/custom.js"></script>
    <script src="public/assets/js/owl.js"></script>
    <script src="public/assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>