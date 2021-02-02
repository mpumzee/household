<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Household | Child Records</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.css">

  <link rel="stylesheet" href="css/main.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item ">
          <span class="nav-link">Mpumelelo Nyathi</span>               
      </li>
      <li class="nav-item ">
        <a class="nav-link text-info" href="#">
            Logout
        </a>
        
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="height:100vh;">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      
      <span class="brand-text font-weight-light">Household</span>
    </a>
      <!-- Sidebar Menu -->
      <nav class="mt-2 h-100">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-child"></i>
              <p>
                Children                
              </p>
            </a>            
          </li>      
          
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Children Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Children</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Child</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="firstname">First name</label>
                    <input type="text" class="form-control" id="firstname" placeholder="eg John">
                  </div>
                  <div class="form-group">
                    <label for="lastname">Last name</label>
                    <input type="text" class="form-control" id="lastname" placeholder="eg Smith">
                  </div>
                  <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob">
                  </div>
                 
              
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
         
          <div class="col-8">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Children Records</h3>
                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>First name</th>
                      <th>Last name</th>
                      <th style="width: 15%">Date of Birth</th>
                      <th style="width: 5%">Edit</th>
                      <th style="width: 5%">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Mpumelelo</td>
                      <td>
                        Nyathi
                      </td>
                      <td>11 Dec 1986</td>
                      <td class="text-center"><button class="fas fa-edit text-info crud-btn"></button></td>
                      <td class="text-center"><button class="fas fa-trash-alt text-danger crud-btn"></button></td>
                      
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Mpumelelo</td>
                      <td>
                        Nyathi
                      </td>
                      <td>11 Dec 1986</td>
                      <td class="text-center"><button class="fas fa-edit text-info crud-btn"></button></td>
                      <td class="text-center"><button class="fas fa-trash-alt text-danger crud-btn"></button></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Mpumelelo</td>
                      <td>
                        Nyathi
                      </td>
                      <td>11 Dec 1986</td>
                      <td class="text-center"><button class="fas fa-edit text-info crud-btn"></button></td>
                      <td class="text-center"><button class="fas fa-trash-alt text-danger crud-btn"></button></td>
                    </tr>
                    <tr>
                    <td>4.</td>
                    <td>Tinashe</td>
                      <td>
                        Dube
                      </td>
                      <td>11 Dec 1986</td>
                      <td class="text-center"><button class="fas fa-edit text-info crud-btn"></button></td>
                      <td class="text-center"><button class="fas fa-trash-alt text-danger crud-btn"></button></td>
                    </tr>
                    <tr>
                    <td>5.</td>
                    <td>Tinashe</td>
                      <td>
                        Dube
                      </td>
                      <td>11 Dec 1986</td>
                      <td class="text-center"><button class="fas fa-edit text-info crud-btn"></button></td>
                      <td class="text-center"><button class="fas fa-trash-alt text-danger crud-btn"></button></td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" >
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
