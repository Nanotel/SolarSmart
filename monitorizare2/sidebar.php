<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Solar Smart Monitor</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Sistem fotovoltaic
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
                <a class="nav-link" href="invertor.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Invertor</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="baterii.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Baterii</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Casa inteligenta
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
                <a class="nav-link" href="senzori.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Senzori</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="prize.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Prize</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="autoconsum.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Autoconsum</span></a>
            </li>

  

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                DB update: 
                <?php 
                	echo $dif_minute; 
                ?> min
                
                <p id="countdown"></p>

            </div>

</ul>




