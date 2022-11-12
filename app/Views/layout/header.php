<!DOCTYPE html>
<html lang="en" data-color-theme="light">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dashboard</title>

	<!-- Global stylesheets -->
	<link href="<?php echo base_url("assets/fonts/inter/inter.css");?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url("assets/icons/phosphor/styles.min.css");?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url("assets/css/all.min.css");?>" id="stylesheet" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets/css/style.css");?>" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?php echo base_url("assets/js/bootstrap/bootstrap.bundle.min.js");?>"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-dark navbar-expand-lg navbar-static">
		<div class="container">
			<div class="navbar-brand flex-1 flex-lg-0">
				<a href="index.html" class="d-inline-flex align-items-center">
					<img src="../../../assets/images/logo_icon.svg" alt="Logo">
				</a>
			</div>

			<ul class="nav flex-row justify-content-end order-1 order-lg-2">
                <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
					<a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
                        <div class="status-indicator-container">
                            <img src="../../../assets/images/demo/users/face11.jpg" class="w-32px h-32px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>
						<span class="d-none d-lg-inline-block mx-lg-2">Company Name</span>
					</a>
                </li>
				<li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
					<a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
						<span class="d-none d-lg-inline-block mx-lg-2">Dmitros</span>
					</a>

					<div class="dropdown-menu dropdown-menu-end">
						<a href="#" class="dropdown-item">
							<i class="ph-user-circle me-2"></i>
							My profile
						</a>
						<a href="<?php echo base_url("auth/logout");?>" class="dropdown-item">
							<i class="ph-sign-out me-2"></i>
							Logout
						</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Navigation -->
	<div class="navbar navbar-sm shadow">
		<div class="container">
			<div class="flex-fill d-flex justify-content-between">
				<ul class="nav gap-1 flex-nowrap flex-lg-wrap ">
					<li class="nav-item">
						<h4 class="line-height-48 my-0">Dashboard</h4>
					</li>
                </ul>
                <ul class="nav gap-1 flex-nowrap flex-lg-wrap justify-content-end">
                    <li class="nav-item">
						<a href="index.html" class="navbar-nav-link rounded active">
                            <div class="status-indicator-container">
                                <img src="../../../assets/images/demo/users/face11.jpg" class="w-32px h-32px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </div>
                            <span class="d-none d-lg-inline-block mx-lg-2">Company Name</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /navigation -->


	<!-- Page header -->
    <div class="container">
        <div class="page-header">
            <div class="page-header-content d-lg-flex px-0">
                <div class="d-flex">
                    <h4 class="page-title mb-0">
                        Home - <span class="fw-normal">Dashboard</span>
                    </h4>

                    <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>

                <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
                    <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">
                        <div class="d-inline-flex mt-3 mt-sm-0">
                            <a href="#" class="btn btn-primary btn-icon ms-3">
                                Change Notification Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- /page header -->


	<!-- Page content -->
	<div class="page-content pt-0">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
                <div class="container">