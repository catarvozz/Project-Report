<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="icon" href="../../../../img/lokaprofpic.png" >
        <title>{{ $title }}</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha38KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	    <!----css3---->
        <link rel="stylesheet" href="../../../../css/custom.css">
        <!--awesome icon-->
        <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
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
                    <li>
                        <a href="{{ route('welcome') }}" class="dashboard"><i class="fa-solid fa-gauge" id="green"></i><span>Dashboard</span></a>
                    </li>  
                <!-- big screen -->
                <ul>
                    <li class="dropdown">
                            <a href="#menu3" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fa-solid fa-ticket"></i><span>Ticketing</span></a>
                            <div class="collapse menu" id="menu3">
                                <ul>
                                    <li>
                                        <a href="{{ route('allticketing') }}">All Ticketing</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('summaryticketing') }}">Summary Ticketing</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a href="#menu5" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fa-solid fa-cash-register"></i><span>Lokapos</span></a>
                            <div class="collapse menu" id="menu5">
                            <ul>
                                <li>
                                <a href="{{ route('souvenirfnb') }}">Souvenir & FnB</span></a>
                                </li>

                                <li>
                                    <a href="{{ route('penyewaan') }}">Penyewaan</a>
                                </li>

                                <li>
                                    <a href="{{ route('penjualanlain') }}">Penjualan Lain</a>
                                </li>
                            </ul>    
                        </li>

                        <li class="dropdown">
                            <a href="#menu4" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fa-solid fa-border-all"></i><span>Summary</span></a>
                            <div class="collapse menu" id="menu4">
                                <ul>
                                    <li>
                                        <li>
                                            <a href="{{ route('allglobal') }}">All Global</a>
                                        </li>
                                        <!-- <li class="dropdown">
                                            <a href="#submenu1" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                            Global</a>
                                            <div class="collapse submenu" id="submenu1">
                                                <ul>
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
                                            </div>
                                        </li> -->

                                        <!-- <li class="dropdown">
                                                <a href="#submenu2" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                                IR Dept >></a>
                                                <div class="collapse submenu" id="submenu2">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('allirdept') }}">All IR Dept</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('allirdeptsummary') }}">Revenue Summary IR Dept</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </li> -->

                                        <li>
                                            <a href="{{ route('edc') }}">EDC Report</a>
                                        </li>

                                        <!-- <li>
                                            <a href="{{ route('rincianuang') }}">Rincian Uang</a>
                                        </li> -->

                                        <!-- <li>
                                            <a href="{{ route('allsummary') }}">All Summary</a>
                                        </li> -->
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#menu6" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fa-solid fa-database"></i><span>Master Data</span></a>
                            <div class="collapse menu" id="menu6">
                                <ul>
                                    <li>
                                        <a href="{{ route('masterusers') }}">Users</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('masterpecahanuangs') }}">Pecahan Uang</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('masteritems') }}">Items</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('masterkategori') }}">Kategori</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>  
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
                    
                        <button class="d-inline-block d-lg-none mr-auto more-button ml-3" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                        </button>

                        <div>
                            <ul class="nav navbar-nav ml-auto flex-row position-relative">
                                <li class="dropdown nav-item position-static">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <i class="fa-solid fa-bell mt-1"></i>
                                        <span class="notification">2</span>
                                    </a>
                                    <ul class="dropdown-menu position-absolute">
                                        <li>
                                            <a href="#">Notif 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Notif 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown nav-item position-static">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <div class="d-flex align-items-center">
                                            <img src="../../../../img/userprofpic.jpg" class="topbarimg" />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu position-absolute">
                                        <li>
                                            <a href="{{ route('userprofile') }}">Magang'23</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('login') }}">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown nav-item position-static">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <i class="fa-solid fa-gear mt-1"></i>
                                    </a>
                                    <ul class="dropdown-menu position-absolute">
                                        <li>
                                            <a href="#">Setting 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Setting 2</a>
                                        </li>
                                    </ul>
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
        <script src="../../../../js/bootstrap.min.js"></script>
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
        <!-- Dropdown -->
        <script>
        // const collapseMenus = document.querySelectorAll('[data-bs-toggle="collapse"]');
        
        // collapseMenus.forEach((menu) => {
        //     menu.addEventListener('click', () => {
        //         const targetId = menu.getAttribute('href');
        //         const targetCollapse = document.querySelector(targetId);

        //         // Tutup semua menu yang tidak sedang dibuka
        //         collapseMenus.forEach((otherMenu) => {
        //             if (otherMenu !== menu) {
        //                 const otherTargetId = otherMenu.getAttribute('href');
        //                 const otherTargetCollapse = document.querySelector(otherTargetId);
        //                 if (otherTargetCollapse && otherTargetCollapse.classList.contains('show')) {
        //                     otherMenu.click(); // Tutup menu yang sedang terbuka
        //                 }
        //             }
        //         });
        //     });
        // });
</script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Sweetalert Warning-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
            $(function(){
                $(document).on('click','#delete', function(e){
                    e.preventDefault();
                    var link = $(this).attr("href")

                    Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    imageUrl: '../../../../img/lokasad.webp',
                    imageWidth: 150,
                    imageHeight: 150,
                    imageAlt: 'Custom image',
                    showCancelButton: true,
                    cancelButtonColor: '#d33',
                    confirmButtonColor: '#1e56af',
                    confirmButtonText: 'Yes, delete it!',
                    }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                        'Deleted!',
                        'Your report has been deleted.',
                        'success'
                        )
                    }
                    })
                })
            });
            $(function(){
                $(document).on('click','#success', function(e){
                    e.preventDefault();
                    var link = $(this).attr("href")
                    Swal.fire({
                    html: '<div class="custom-content"><img src="../../../../img/lokalov.webp" id="custom-image" alt="Custom image"><br><br><span class="custom-title">Your report has been submitted!</span></div>',
                    showConfirmButton: false,
                    timer: 1500,
                    customClass: {
                        popup: 'custom-popup-class',
                    },
                    })
                })
            });
        </script>
  </body>
  </html>


