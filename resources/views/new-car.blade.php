<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CarApp - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <script src="https://cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">New Car Dashboard</h1>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">New Car Form</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="/new-car-create" method="POST" >
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control mb-2 mr-sm-2" name="carname" placeholder="Car Name" required>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control mb-2 mr-sm-2" name="cartype" placeholder="Car Type" required>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control mb-2 mr-sm-2" name="carmodel" placeholder="Car Model" required>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control mb-2 mr-sm-2" name="caramount" placeholder="Car Amount" required>
                            </div>
                            <div class="col-sm-12">
                                <textarea name="cardesc"></textarea>
                                <script>
                                        CKEDITOR.replace( 'cardesc' );
                                </script>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control mb-2 mr-sm-2" name="carimg" placeholder="Car Image Url" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Save
                        </button>

                        @if (session('error'))
                            <div class="alert alert-danger" style="margin-top: 10px;width: 100%">{{ session('error') }}</div>
                        @endif
                
                        @if (session('success'))
                            <div class="alert alert-success" style="margin-top: 10px;width: 100%">{{ session('success') }}</div>
                        @endif
                    </form>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
