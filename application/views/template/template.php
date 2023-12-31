<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-alpha.14
* @link https://tabler.io
* Copyright 2018-2020 The Tabler Authors
* Copyright 2018-2020 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
	<!-- CSS files -->
	<link href="<?php echo base_url(); ?>assets/dist/libs/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/dist/libs/flatpickr/dist/flatpickr.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/dist/css/tabler.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/dist/css/tabler-flags.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/dist/css/tabler-payments.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/dist/css/demo.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />
	<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />

	<style>
		body {
			display: none;
		}

		.help-block {
			color: red;
		}

		.dataTables_filter {
			margin-bottom: 30px;
		}
	</style>
	<!-- Libs JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="<?php echo base_url(); ?>assets/dist/libs/apexcharts/dist/apexcharts.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/dist/libs/jqvmap/dist/jquery.vmap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/dist/libs/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
	<script type="text/javascript" src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/dist/libs/flatpickr/dist/flatpickr.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


	<!-- Tabler Core -->
	<script src="<?php echo base_url(); ?>assets/dist/js/tabler.min.js"></script>

</head>

<body class="antialiased">
	<div class="page">
		<header class="navbar navbar-expand-md navbar-light d-print-none">
			<div class="container-xl">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a href="." class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
					PT. Mitra Sinerji Teknoindo
				</a>
				<div class="navbar-nav flex-row order-md-last">
					<div class="nav-item dropdown d-none d-md-flex mr-3">
						<a href="#" class="nav-link px-0" data-toggle="dropdown" tabindex="-1">
							<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none" />
								<path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
								<path d="M9 17v1a3 3 0 0 0 6 0v-1" />
							</svg>
							<span class="badge bg-red"></span>
						</a>

					</div>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-toggle="dropdown">
							<svg xmlns="http://www.w3.org/2000/svg" class="icon mr-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none" />
								<circle cx="12" cy="7" r="4" />
								<path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
							</svg>
							<div class="d-none d-xl-block pl-2">
								<div><?php echo ucwords($this->session->userdata('username')); ?></div>
								<div class="mt-1 small text-muted"><?php echo ucwords($this->session->userdata('level')); ?></div>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
							<a href="<?php echo base_url(); ?>auth/logout" class="dropdown-item">Logout</a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="navbar-expand-md">
			<div class="collapse navbar-collapse" id="navbar-menu">
				<div class="navbar navbar-light">
					<div class="container-xl">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url(); ?>assets/index.html">
									<span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<polyline points="5 12 3 12 12 3 21 12 19 12" />
											<path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
											<path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
										</svg>
									</span>
									<span class="nav-link-title">
										Home
									</span>
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#navbar-base" data-toggle="dropdown" role="button" aria-expanded="false">
									<span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
											<line x1="12" y1="12" x2="20" y2="7.5" />
											<line x1="12" y1="12" x2="12" y2="21" />
											<line x1="12" y1="12" x2="4" y2="7.5" />
											<line x1="16" y1="5.25" x2="8" y2="9.75" />
										</svg>
									</span>
									<span class="nav-link-title">
										Master Data
									</span>
								</a>
								<div class="dropdown-menu">
									<div class="dropdown-menu-columns">
										<div class="dropdown-menu-column">
											<a class="dropdown-item" href="<?php echo base_url(); ?>barang">
												Data Barang
											</a>
											<a class="dropdown-item" href="<?php echo base_url(); ?>customer">
												Data Customer
											</a>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#navbar-base" data-toggle="dropdown" role="button" aria-expanded="false">
									<span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
											<line x1="12" y1="12" x2="20" y2="7.5" />
											<line x1="12" y1="12" x2="12" y2="21" />
											<line x1="12" y1="12" x2="4" y2="7.5" />
											<line x1="16" y1="5.25" x2="8" y2="9.75" />
										</svg>
									</span>
									<span class="nav-link-title">
										Penjualan
									</span>
								</a>
								<div class="dropdown-menu">
									<div class="dropdown-menu-columns">
										<div class="dropdown-menu-column">
											<a class="dropdown-item" href="<?php echo base_url(); ?>penjualan">
												Penjualan
											</a>
											<a class="dropdown-item" href="<?php echo base_url(); ?>assets/charts.html">
												Data Transaksi
											</a>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
							<form action="." method="get">
								<div class="input-icon">
									<span class="input-icon-addon">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<circle cx="10" cy="10" r="7" />
											<line x1="21" y1="21" x2="15" y2="15" />
										</svg>
									</span>
									<input type="text" class="form-control" placeholder="Search…">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="container-xl">
				<!-- Page title -->
				<?php echo $contents ?>
			</div>
			<footer class="footer footer-transparent d-print-none">
				<div class="container">
					<div class="row text-center align-items-center flex-row-reverse">
						<div class="col-lg-auto ml-lg-auto">
							<ul class="list-inline list-inline-dots mb-0">
								<li class="list-inline-item"><a href="<?php echo base_url(); ?>assets/docs/index.html" class="link-secondary">Documentation</a></li>
								<li class="list-inline-item"><a href="<?php echo base_url(); ?>assets/license.html" class="link-secondary">License</a></li>
								<li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary">Source code</a></li>
							</ul>
						</div>
						<div class="col-12 col-lg-auto mt-3 mt-lg-0">
							<ul class="list-inline list-inline-dots mb-0">
								<li class="list-inline-item">
									Copyright © 2020
									<a href="." class="link-secondary">Tabler</a>.
									All rights reserved.
								</li>
								<li class="list-inline-item">
									<a href="<?php echo base_url(); ?>assets/changelog.html" class="link-secondary" rel="noopener">v1.0.0-alpha.14</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">New report</h5>
					<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label class="form-label">Name</label>
						<input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
					</div>
					<label class="form-label">Report type</label>
					<div class="form-selectgroup-boxes row mb-3">
						<div class="col-lg-6">
							<label class="form-selectgroup-item">
								<input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
								<span class="form-selectgroup-label d-flex align-items-center p-3">
									<span class="mr-3">
										<span class="form-selectgroup-check"></span>
									</span>
									<span class="form-selectgroup-label-content">
										<span class="form-selectgroup-title strong mb-1">Simple</span>
										<span class="d-block text-muted">Provide only basic data needed for the report</span>
									</span>
								</span>
							</label>
						</div>
						<div class="col-lg-6">
							<label class="form-selectgroup-item">
								<input type="radio" name="report-type" value="1" class="form-selectgroup-input">
								<span class="form-selectgroup-label d-flex align-items-center p-3">
									<span class="mr-3">
										<span class="form-selectgroup-check"></span>
									</span>
									<span class="form-selectgroup-label-content">
										<span class="form-selectgroup-title strong mb-1">Advanced</span>
										<span class="d-block text-muted">Insert charts and additional advanced analyses to be inserted in the report</span>
									</span>
								</span>
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8">
							<div class="mb-3">
								<label class="form-label">Report url</label>
								<div class="input-group input-group-flat">
									<span class="input-group-text">
										https://tabler.io/reports/
									</span>
									<input type="text" class="form-control pl-0" value="report-01" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="mb-3">
								<label class="form-label">Visibility</label>
								<select class="form-select">
									<option value="1" selected>Private</option>
									<option value="2">Public</option>
									<option value="3">Hidden</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Client name</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Reporting period</label>
								<input type="date" class="form-control">
							</div>
						</div>
						<div class="col-lg-12">
							<div>
								<label class="form-label">Additional information</label>
								<textarea class="form-control" rows="3"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn btn-link link-secondary" data-dismiss="modal">
						Cancel
					</a>
					<a href="#" class="btn btn-primary ml-auto" data-dismiss="modal">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<line x1="12" y1="5" x2="12" y2="19" />
							<line x1="5" y1="12" x2="19" y2="12" />
						</svg>
						Create new report
					</a>
				</div>
			</div>
		</div>
	</div>

	<script>
		document.body.style.display = "block"
	</script>
</body>

</html>