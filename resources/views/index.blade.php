<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crud_php - (laravel)</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>
<!-- Begin Page Content -->
<div class="container" style="margin-top: 3%;margin-bottom: 5%;">
<!-- DataTales Example -->
<div class="mb-15" style="box-shadow: 10px 10px 10px 0 gray;
                         -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
                         -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
                         -o-box-shadow: 0 0 10px rgba(0,0,0,0.6)">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary display-4">PHP CRUD OPERATIONS</h6>
                        </div>
                        <div class="container">
                        <div class="table-title" >
                            <div class="row">
                                <div class="col-xs-6" style="margin-left: 2%;margin-top: 1%;">
                                    <h2>Manage <b>Employees</b></h2>
                                </div>
                                <div class="col-xs-6" style="float: right;margin-left: 52%;margin-top: 1%;">
                                    <a href="create"  class="btn text-light "  style="background-color: orangered;box-shadow: 10px 10px 10px 0 gray ;"><i class="fas fa-plus-circle"></i>&nbsp; <span style="margin-bottom: 25px;">Add New Employee</span></a>
                                    						
                                </div>
                            </div>
                        </div>
                    </div>
     
                        <div class="card-body">
                            <div class="table-responsive" >
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>City</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($crud as $i) 
                                        <tr>
                                            <td>{{$i->id}}</td>
                                            <td>{{$i->name}}</td>
                                            <td>{{$i->email}}</td>
                                            <td>{{$i->address}}</td>
                                            <td>{{$i->phone}}</td>
                                            <td>{{$i->city}}</td>
                                            <td style="width: 200px;">
                                                <a href="edit/{{$i->id}}" class="btn btn-success" style="box-shadow: 5px 5px 5px 0 gray;"><b>Update</b></a>&nbsp;&nbsp;
                                                <a href="delete/{{$i->id}}" class="btn btn-danger" style="box-shadow: 5px 5px 5px 0 gray;"><b>Delete</b></a>  
                                            </td>
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
</div>
 <!-- Bootstrap core JavaScript-->
 <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/datatables-demo.js')}}"></script>

</body>

</html>