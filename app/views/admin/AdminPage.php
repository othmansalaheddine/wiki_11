<?php
$title = "Admin Panel";
ob_start();
?>
<!-- Page Wrapper -->
<div id="wrapper" style="background-color:dimgray">
    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar   " id="accordionSidebar" style="background-color:black;" >
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa-brands fa-wikipedia-w"></i>
            </div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Admin Menu Link -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="index.php?action=admin">
                <span>Admin Menu</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider my-0" />
        <!-- Manage Wiki Link -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="index.php?action=admin_wiki_table">
                <span>Manage Wiki</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider my-0" />
        <!-- Manage Categories Link -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="index.php?action=category_table">
                <span>Manage Categories</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider my-0" />
        <!-- Manage Tags Link -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="index.php?action=tag_table">
                <span>Manage Tags</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />
    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content" >
            <!-- Topbar -->
            <?php include "app/views/include/navabr_sub.php" ?>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Content Row -->
                <!-- Nav Item - Dashboard -->
                <div class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <?php echo "<span>$title</span>" ?>
                </div>
                <div class="row">
                    <!-- Total Categories Card -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Categories:
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?= $categoryCount->count ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Total Tags:
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?= $tagCount->count ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-tag fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                            Total Wikis:
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?= $wikiCount->count ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">

                                        <i class="fa-brands fa-wikipedia-w fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
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
                    <span>Copyright &copy; Wiki 2024</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
</div>

<?php
$content = ob_get_clean();
include_once 'app/views/include/layout_sub.php';
?>