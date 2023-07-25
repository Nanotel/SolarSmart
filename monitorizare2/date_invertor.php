<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Date invertor</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
class="fas fa-download fa-sm text-white-50"></i> Buton test</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
				Consum</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $putere_consumata_ac ?> W </div>
						</div>
						<div class="col-auto">
							<i class="fas fa-plug fa-2x text-gray-400"></i>
						</div>
					</div>
				</div>
            </div>
        </div>

        <!-- PRODUCTIE Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
				Incarcare (PV1)</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $incarcare_pv1 ?> W</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-sun fa-2x text-gray-400"></i>
						</div>
					</div>
				</div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
<div class="card-body">
    <div class="row no-gutters align-items-center">
        <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Procent baterie
            </div>
            <div class="row no-gutters align-items-center">
				<div class="col-auto">
					<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $medie_baterii ?>%</div>
				</div>
				<div class="col">
					<div class="progress progress-sm mr-2">
						<div class="progress-bar bg-info" role="progressbar"
							style="width: <?= $medie_baterii ?>%" aria-valuenow="<?= $medie_baterii ?>" aria-valuemin="0"
							aria-valuemax="100"></div>
					</div>
				</div>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-car-battery fa-2x text-gray-400"></i>
						</div>
					</div>
				</div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
				Voltaj Baterie</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $voltaj_baterie ?> v</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-car-battery fa-2x text-gray-400"></i>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
				Consum aparent</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $consum_aparent ?> VA</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-bolt fa-2x text-gray-400"></i>
						</div>
					</div>
				</div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
				Incarcare baterii</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $putere_incarcare_baterii ?> A</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-wave-square fa-2x text-gray-400"></i>
						</div>
					</div>
				</div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
				Descarcare baterii</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $curent_descarcare_bat ?> A</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-wave-square fa-2x text-gray-400"></i>
						</div>
					</div>
				</div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
				Voltaj panouri</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $voltaj_pv1 ?> V</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-solar-panel fa-2x text-gray-400"></i>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>

 

    <!-- Content Row -->
    <div class="row">
    	<?php 
							// alt rou
							           		
    	?>
    </div>

</div>
<!-- /.container-fluid -->


