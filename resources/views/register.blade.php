<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public/asset/img/favicon.png" rel="icon">
  <link href="public/asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/asset/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public/asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/asset/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="public/asset/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="public/asset/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="public/asset/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="{{url('home')}}" class="logo d-flex align-items-center w-auto">
                  <img src="public/asset/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Insurance Policy</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    @if($errors->any())
                                        @foreach($errors->all() as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                    @endif
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account

                      @if(Session::has('success'))
                        <p class="text-success">{{session('success')}}</p>
                      @endif
                    </h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form method="post" enctype="multipart/form-data" action="{{url('admin/customer')}}" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-12">
                      <label for="yourName" class="form-label">First Name</label>
                      <input type="text" name="first_name" class="form-control" required>
                      <div class="invalid-feedback">Please, enter your first name!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Last Name</label>
                      <input type="text" name="last_name" class="form-control" required>
                      <div class="invalid-feedback">Please, enter your last name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Address</label>
                      <input type="text" name="address" class="form-control" required>
                      <div class="invalid-feedback">Please, enter your address!</div>
                    </div>


                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword"  required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="{{url('login')}}">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Back <a href="{{url('/')}}">Home</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="public/asset/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="public/asset/vendor/php-email-form/validate.js"></script>
  <script src="public/asset/vendor/quill/quill.min.js"></script>
  <script src="public/asset/vendor/tinymce/tinymce.min.js"></script>
  <script src="public/asset/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="public/asset/vendor/chart.js/chart.min.js"></script>
  <script src="public/asset/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="public/asset/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="public/asset/js/main.js"></script>

</body>

</html>