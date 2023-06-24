<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Sekolah Kita</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('ablepro-master')}}/dist/assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('ablepro-master')}}/dist/assets/css/style.css">
</head>
<body>
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="{{asset('ablepro-master')}}/dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<div class="mt-3">Admin</div>
						</div>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
					    <label>Home</label>
					</li>
					<li class="nav-item">
					    <a href="{{route('dashboard.index')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
                </ul>
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
					    <label>Tampilan User</label>
					</li>
					<li class="nav-item">
					    <a href="{{route('HalamanDepan')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Halaman Depan</span></a>
					</li>
                </ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->

	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		{{-- SEARCH! --}}
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav mr-auto">
				
			</ul>	
		</div>				
	</header>
	<!-- [ Header ] end -->
	
    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="row align-items-center">                           
                    <form action="{{route('dashboard.index')}}" method="get">
						<div class="row">
							<div class="col-md-10">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Cari Data..." name="search">							
							</div>
							<div class="col-md-2">
								<button class="btn btn-secondary">Search</button>
							</div>
						</div>
					</form>	  
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-md-12">
                    @yield('konten')
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>

    <!-- Required Js -->
    <script src="{{asset('ablepro-master')}}/dist/assets/js/vendor-all.min.js"></script>
    <script src="{{asset('ablepro-master')}}/dist/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{asset('ablepro-master')}}/dist/assets/js/pcoded.min.js"></script>

    <!-- Apex Chart -->
    <script src="{{asset('ablepro-master')}}/dist/assets/js/plugins/apexcharts.min.js"></script>

    <!-- custom-chart js -->
    <script src="{{asset('ablepro-master')}}/dist/assets/js/pages/dashboard-main.js"></script>
</body>

</html>
