<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha38KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" href="../../../../img/lokaprofpic.png" >
    <!-- DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.bootstrap5.min.css"/>
    <title>{{ $title }}</title>
</head>
<body id="page-top">
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <img src="../../../../img/logo-saloka.png" style="height: 70px; width: 200px;">
                </div>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="{{ route('welcome') }}" class="sidebar-link">
                            <i class="fa-solid fa-gauge"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#master"
                            aria-expanded="false" aria-controls="master">
                            <i class="fa-solid fa-database"></i>
                            Master Data
                        </a>
                        <ul id="master" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('formmasterusers') }}" class="sidebar-link">Add User</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('formmasterpecahanuangs') }}" class="sidebar-link">Add Pecahan Uang</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('formmasteritems') }}" class="sidebar-link">Add Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#pages"
                            aria-expanded="false" aria-controls="pages">
                            <i class="fa-solid fa-ticket"></i>
                            Ticketing
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('allticketing') }}" class="sidebar-link">All Ticketing</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('summaryticketing') }}" class="sidebar-link">Summary Ticketing</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard"
                            aria-expanded="false" aria-controls="dashboard">
                            <i class="fa-solid fa-globe"></i>
                            Global
                        </a>
                        <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('allglobal') }}" class="sidebar-link">All Global</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('summaryglobal') }}" class="sidebar-link">Revenue Summary Global</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('edcglobal') }}" class="sidebar-link">EDC</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('komplemenvoucher') }}" class="sidebar-link">Komplemen & Voucher</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#auth"
                            aria-expanded="false" aria-controls="auth">
                            <i class="fa-solid fa-briefcase"></i>
                            IR DEPT
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('allirdept') }}" class="sidebar-link">All IR DEPT</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('allirdeptsummary') }}" class="sidebar-link">Revenue Summary IR DEPT</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('allsummary') }}" class="sidebar-link">
                            <i class="fa-solid fa-border-all"></i>
                            Summary
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('souvenirfnb') }}" class="sidebar-link">
                            <i class="fa-solid fa-mug-hot"></i>
                            Souvenir and FnB
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('penyewaan') }}" class="sidebar-link">
                            <i class="fa-solid fa-person-biking"></i>
                            Penyewaan
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('penjualanlain') }}" class="sidebar-link">
                            <i class="fa-solid fa-shop"></i>
                            Penjualan lain
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('login') }}" class="sidebar-link">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- sidebar end -->
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom" id="nav" style="display: flex; justify-content: space-between;">              
                <!-- Button for sidebar toggle -->
                <button class="btn" type="button" data-bs-theme="dark" id="navbaricon">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- profile start -->
                <div>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item d-flex">
                            <a class="nav-link" href="#">
                                <img src="../../../../img/lokaprofpic.png" alt="Gambar Profil" class="profil-img" style="height: 35px; width: 35px;">
                            </a>
                        </li>                        
                        <li class="nav-item">
                            <p id="textadmin">Admin</p>
                        </li>
                    </ul>
                </div>
                <!-- profile end -->
            </nav>
            <div>
                @yield('container')
                <!-- footer -->
                <footer class="d-flex justify-content-center mb-4">
                    <span>Copyright © Saloka 2023 <a href="https://salokapark.com">Saloka</a></span>
                </footer>
            </div>
        </div>
    </div>
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
    <script src="../../../../js/script.js"></script>
    <script src="../../../../js/table.js"></script>
</body>
</html>