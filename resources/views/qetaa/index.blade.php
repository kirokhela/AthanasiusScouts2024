<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>كشافة الشمندورة - لوحة التحكم</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;500&display=swap');
    </style>
    <link rel="icon" type="image/x-icon" href={{ asset('img/shamandora.png') }}>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>



<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="right:0">
            <div>
                <img class="" src="{{ asset('img/shamandora.png') }}" style="width: 100px; height: 100px;"
                    alt="Shamandora Image">
            </div>
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href={{ url('/index') }}>
                <div class="sidebar-brand-text mx-3">Shamandora Scouts</div>
            </a>
            <div class="sidebar-brand d-flex align-items-center justify-content-center sidebar-brand-text"
                style="color: rgba(211, 159, 18, 0.849); font-size: large">{{date("Y")}}</div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href={{ url('/index') }}>
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="font-family: 'Cairo', sans-serif; font-weight: lighter;">لوحة التحكم</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Administration</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin Panel</h6>
                        <a class="collapse-item">الترقيات</a>
                        <a class="collapse-item" href={{ route('rotab.index') }}>الرتب الكشفية</a>
                        <a class="collapse-item" href={{ route('betaka.index') }}>ايجازة بطاقة تقدم</a>
                        <a class="collapse-item" href={{ route('blood.index') }}>فصائل الدم</a>
                        <a class="collapse-item" href={{ route('marhala.index') }}>المراحل الدراسية</a>
                        <a class="collapse-item" href={{ route('qetaa.index') }}>القطاعات الكشفية</a>
                        <a class="collapse-item" href={{ route('sana-marhala.index') }}>السنوات والمراحل الدراسية</a>
                        <a class="collapse-item" href={{ route('entry-questions.index') }}>أسئلة فورم ادخال بيانات</a>
                        <a class="collapse-item" href={{ route('person.index') }}>بيانات المستخدمين</a>
                        <a class="collapse-item" href={{ route('district.index') }}>الأحياء السكنية</a>
                        <a class="collapse-item" href={{ route('manteqa.index') }}>المناطق السكنية</a>
                        <a class="collapse-item" href={{ route('faculty.index') }}>الكليات</a>
                        <a class="collapse-item" href={{ route('university.index') }}>الجامعات</a>
                        <a class="collapse-item" href={{ route('role.index') }}>الأدوار والمهام</a>
                        <a class="collapse-item" href={{ route('person-role.index') }}>ربط الأدوار والمهام</a>
                        <a class="collapse-item" href={{ route('group-type.index') }}>أنواع المجموعات</a>
                        <a class="collapse-item" href={{ route('group.index') }}>ربط المجموعات</a>
                        <a class="collapse-item" href={{ route('event-type.index') }}>أنواع الأحداث والمناسبات</a>
                        <a class="collapse-item" href={{ route('event.index') }}> الأحداث والمناسبات الكشفية</a>
                        <a class="collapse-item" href={{ route('group-person.index') }}>ربط الأشخاص بالمجموعات</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Configurations</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Attendance
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href={{ url('/attendance') }}>
                    <i class="fas fa-fw fa-table"></i>
                    <span style="font-family: 'Cairo', sans-serif;">الحضور والغياب</span></a>
            </li>


            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Midea
            </div>

            <li class="nav-item">
                <a class="nav-link" href={{ url('/person') }}>
                    <i class="fas fa-fw fa-photo-video"></i>
                    <span style="font-family: 'Cairo', sans-serif;">منصة الميديا</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Summer 2024
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-cog"></i>
                    <span style="font-family: 'Cairo', sans-serif;">الالتحاقات الجديدة</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">صفحات التسجيل والدخول</h6>
                        <a class="collapse-item" href={{ url('/liveform') }}>فورم التسجيل LIVE!</a>
                        <a class="collapse-item" href={{ url('/new-enrolments') }}>مراجعة طلبات الالتحاق</a>
                        <a class="collapse-item" href={{ url('/max-limits') }}>الحد الأقصى للطلبات</a>
                        <a class="collapse-item" href={{ url('/entry-questions') }}>التحكم في أسئلة القطاعات</a>
                        <a class="collapse-item" href={{ url('/new-enrolments/analytics') }}>احصائيات طلبات الالتحاق</a>
                        <a class="collapse-item" href={{ url('/new-enrolments/migrations') }}> تحويل الطلبات إلى النظام
                            الرئيسي</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                style="font-family: 'Cairo', sans-serif; direction: rtl;" placeholder="ابحث عن ...."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header" style="font-family: 'Cairo', sans-serif;">
                                    الاشعارات
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header" style="font-family: 'Cairo', sans-serif;">
                                    الرسائل
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src={{ asset('img/undraw_profile_1.svg') }}
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>

                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src={{ asset('img/undraw_profile_2.svg') }}
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>

                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src={{ asset('img/undraw_profile_3.svg') }}
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>

                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>

                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                                    style="font-family: 'Cairo', sans-serif;">{{Auth::user()->FirstName}}
                                    {{Auth::user()->SecondName}}</span>
                                <img class="img-profile rounded-circle" src={{ asset("img/undraw_profile.svg")}}>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{Auth::user()->ShamandoraCode}}
                                </a>
                                <a class="dropdown-item">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>

                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <form class="dropdown-item" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <!-- Include the CSRF token -->
                                    <button type="submit">Log Out</button>
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">



                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-gray-800" style="font-family: 'Cairo', sans-serif;">بيانات التحكم
                            </h1>

                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">جدول القطاعات الكشفية</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>رقم القطاع ID</th>
                                                    <th> اسم القطاع</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($qetaat as $qetaa)
                                                <tr>
                                                    <td>
                                                        {{ $qetaa->QetaaID }}
                                                    </td>

                                                    <td>
                                                        <label style="color: #4e73df; font-weight: bolder;"
                                                            id="rotbaIDLabel-{{$loop->iteration}}">{{ $qetaa->QetaaName }}</label>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('qetaa.edit', $qetaa->QetaaID) }}" style="appearance: none;
                                                                background-color: #2ea44f;
                                                                border: 1px solid rgba(27, 31, 35, .15);
                                                                border-radius: 6px;
                                                                box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
                                                                box-sizing: border-box;
                                                                color: #fff;
                                                                cursor: pointer;
                                                                display: inline-block;
                                                                font-size: 14px;
                                                                font-weight: 600;
                                                                line-height: 20px;
                                                                padding: 6px 16px;
                                                                position: relative;
                                                                text-align: center;
                                                                text-decoration: none;
                                                                user-select: none;
                                                                -webkit-user-select: none;
                                                                touch-action: manipulation;
                                                                vertical-align: middle;
                                                                white-space: nowrap;"> تعديل</a>

                                                        <a href="{{ route('qetaa.delete', $qetaa->QetaaID) }}" style="appearance: none;
                                                                background-color: #E21739;
                                                                border: 1px solid rgba(27, 31, 35, .15);
                                                                border-radius: 6px;
                                                                box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
                                                                box-sizing: border-box;
                                                                color: #fff;
                                                                cursor: pointer;
                                                                display: inline-block;
                                                                font-size: 14px;
                                                                font-weight: 600;
                                                                line-height: 20px;
                                                                padding: 6px 16px;
                                                                position: relative;
                                                                text-align: center;
                                                                text-decoration: none;
                                                                user-select: none;
                                                                -webkit-user-select: none;
                                                                touch-action: manipulation;
                                                                vertical-align: middle;
                                                                white-space: nowrap;"> مسح</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                        <a href="{{ route('qetaa.create') }}" style="appearance: none;
                                                            background-color: #1216F0;
                                                            border: 1px solid rgba(27, 31, 35, .15);
                                                            border-radius: 6px;
                                                            box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
                                                            box-sizing: border-box;
                                                            color: #fff;
                                                            cursor: pointer;
                                                            display: inline-block;
                                                            font-size: 14px;
                                                            font-weight: 600;
                                                            line-height: 20px;
                                                            padding: 6px 16px;
                                                            position: relative;
                                                            text-align: center;
                                                            text-decoration: none;
                                                            user-select: none;
                                                            -webkit-user-select: none;
                                                            touch-action: manipulation;
                                                            vertical-align: middle;
                                                            white-space: nowrap;" id="s"> اضافة قطاع</a>
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
                                <span>Copyright &copy; Shamandora Scouts {{date("Y")}}</span>
                                <br />
                                <span style="font-size: larger;font-weight: bold; color: #4e73df;">مجموعة الشمندورة
                                    الكشفية</span>
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

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/datatables-demo.js"></script>

            <script>
            function EditButtonClicked(itemNumber) {
                // Retrieve the item data based on the itemNumber
                // Enable editing for the corresponding item
                console.log(`Editing item ${itemNumber}`);
                document.getElementById('rotbaIDTextBox-' + itemNumber).removeAttribute("readonly");
                document.getElementById('SubmitButtonNumber-' + itemNumber).removeAttribute("hidden");
                document.getElementById('EditButtonNumber-' + itemNumber).disabled = true;
                // Implement your custom logic here
            }

            function SubmitButtonClicked(itemNumber) {
                // Retrieve the item data based on the itemNumber
                // Enable editing for the corresponding item
                console.log(`Submitting item ${itemNumber}`);
                document.getElementById('EditButtonNumber-' + itemNumber).disabled = false;
                document.getElementById('rotbaIDTextBox-' + itemNumber).disabled = true;
                // Implement your custom logic here
            }
            </script>

</body>

</html>