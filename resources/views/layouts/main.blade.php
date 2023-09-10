<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>{{ $title }}</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha38KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	    <!----css3---->
        <link rel="stylesheet" href="../../../../css/custom.css">
        <!--awesome icon-->
        <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
        <!-- DataTable -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.bootstrap5.min.css"/>
  </head>
  <body>
    <div class="wrapper">
        <div class="body-overlay"></div>
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src="../../../../img/logo-saloka.png" class="img-fluid"/>
                </div>

                <ul class="list-unstyled components">
                    <li  class="active">
                        <a href="{{ route('welcome') }}" class="dashboard"><i class="fa-solid fa-gauge" id="green"></i><span>Dashboard</span></a>
                    </li>
            
                <div class="small-screen navbar-display">
                    <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-user"></i>
                            Profile
                        </a>
                    </li>
                    <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-gear"></i>
                            Setting
                        </a>
                    </li>
                </div>
                
                    <li class="dropdown">
                        <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa-solid fa-database"></i><span>Master Data</span></a>
                        <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                            <li>
                                <a href="{{ route('formmasterusers') }}">Add User</a>
                            </li>
                            <li>
                                <a href="{{ route('formmasterpecahanuangs') }}">Add Pecahan Uang</a>
                            </li>
                            <li>
                                <a href="{{ route('formmasteritems') }}">Add Item</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa-solid fa-ticket"></i><span>Ticketing</span></a>
                        <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                            <li>
                                <a href="{{ route('allticketing') }}">All Ticketing</a>
                            </li>
                            <li>
                                <a href="{{ route('summaryticketing') }}">Summary Ticketing</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa-solid fa-globe"></i>
                        <span>Global</span></a>
                        <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                            <li>
                                <a href="{{ route('allglobal') }}">All Global</a>
                            </li>
                            <li>
                                <a href="{{ route('summaryglobal') }}">Revenue Summary Global</a>
                            </li>
                            <li>
                                <a href="{{ route('edcglobal') }}">EDC</a>
                            </li>
                            <li>
                                <a href="{{ route('komplemenvoucher') }}">Komplemen & Voucher</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa-solid fa-briefcase"></i><span>IR Dept</span></a>
                        <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                            <li>
                                <a href="{{ route('allirdept') }}">All IR Dept</a>
                            </li>
                            <li>
                                <a href="{{ route('allirdeptsummary') }}">Revenue Summary IR Dept</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="">
                        <a href="{{ route('allsummary') }}"><i class="fa-solid fa-border-all"></i><span>Summary</span></a>
                    </li>
                
                    <li class="">
                        <a href="{{ route('souvenirfnb') }}"><i class="fa-solid fa-mug-hot"></i><span>Souvenir & FnB</span></a>
                    </li>

                    <li class="">
                        <a href="{{ route('penyewaan') }}"><i class="fa-solid fa-person-biking"></i><span>Penyewaan</span></a>
                    </li>

                    <li class="">
                        <a href="{{ route('penjualanlain') }}">  <i class="fa-solid fa-shop"></i><span>Penjualan Lain</span></a>
                    </li>

                    <li class="">
                        <a href="{{ route('login') }}"><i class="fa-solid fa-right-from-bracket"></i><span>Log Out</span></a>
                    </li>  
                </ul>       
            </nav>

            <!-- Page Content  -->
            <div id="content">
            
            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <i class="fa-solid fa-bars"></i>
                        </button>
                    
                        <button class="d-inline-block d-lg-none ml-auto more-button mr-3" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">   
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <i class="fa-solid fa-user"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <i class="fa-solid fa-gear"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>   
                    
            <div class="main-content">
                @yield('container')
                <footer class="d-flex justify-content-center">
                    <span>Copyright © Saloka 2023</span>
                </footer>
            </div>
        </div>
    </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../../../../js/jquery-3.3.1.slim.min.js"></script>
        <script src="../../../../js/bootstrap.min.js"></script>
        <script src="../../../../js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function () {
                    $('#sidebarCollapse').on('click', function () {
                        $('#sidebar').toggleClass('active');
                        $('#content').toggleClass('active');
                    });
                    
                    $('.more-button,.body-overlay').on('click', function () {
                        $('#sidebar,.body-overlay').toggleClass('show-nav');
                    });
                    
                });  
        </script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- DataTable -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.bootstrap5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.print.min.js"></script>
        <script src="../../../../js/table.js"></script>
  </body>
  </html>


