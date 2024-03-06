 <!-- Sidebar -->
 <div class="col-lg-3 ">
                <nav class="navbar navbar-expand-lg bg-body-tertiary rounded border mt-2" >
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:250px">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><i class="bi bi-egg-fried"></i> Dashboard</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1 ">
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET
                                        ['x']=='home') || !isset($_GET['x'])) ? 'active link-light' 
                                        : 'link-dark' ; ?> " aria-current="page" href="home"><i class="bi bi-house-door"></i> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='meja') ? 'active link-light' 
                                        : 'link-dark' ; ?>" href="meja"><i class="bi bi-table"></i>Meja</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='Reservasi') ? 'active link-light' 
                                        : 'link-dark' ; ?>" href="Reservasi"><i class="bi bi-calendar-event"></i> Reservasi</a>
                                    </li>
                                    <?php if($hasil['level']==1){ ?>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2  <?php echo (isset($_GET['x']) && $_GET['x']=='laporan') ? 'active link-light' 
                                        : 'link-dark' ; ?> " href="Laporan"><i class="bi bi-file-bar-graph"></i> Laporan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2  <?php echo (isset($_GET['x']) && $_GET['x']=='user') ? 'active link-light' 
                                        : 'link-dark' ; ?> " href="user"><i class="bi bi-person-fill"></i></i> user</a>
                                    </li>
                                    <?php } ?>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2  <?php echo (isset($_GET['x']) && $_GET['x']=='feedback') ? 'active link-light' 
                                        : 'link-dark' ; ?> " href="feedback"><i class="bi bi-chat-square-dots"></i> Feedback</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- End sidebar -->