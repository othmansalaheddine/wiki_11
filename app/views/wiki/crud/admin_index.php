<?php
$title = "Wiki List";
ob_start();
?>
<style>

   
</style>
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar  " id="accordionSidebar" style="background-color:black;" >
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa-brands fa-wikipedia-w"></i>
            </div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />
        <li class="nav-item">
            <a class="nav-link collapsed" href="index.php?action=admin">
                <span>Admin Menu</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider my-0" />
        <li class="nav-item">
            <a class="nav-link collapsed" href="index.php?action=admin_wiki_table">
                <span>Manage Wiki</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider my-0" />
        <li class="nav-item">
            <a class="nav-link collapsed" href="index.php?action=category_table">
                <span>Manage Categories</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider my-0" />
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
        <div id="content">
            <!-- Topbar -->
            <?php include "app/views/include/navabr_sub.php" ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                </p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Tags</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Is Archived</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($wikis as $wiki): ?>
                                    <tr>

                                        <td>
                                            <?= $wiki->getTitle(); ?>
                                        </td>
                                        <td>
                                            <?php
                                                $content = $wiki->getContent();
                                                echo substr($content, 0, 50);
                                                if (strlen($content) > 100) {
                                                    echo '...';
                                                }
                                                ?>
                                        </td>
                                        <td>
                                            <?= $wiki->getCategoryName(); ?>
                                        </td>
                                        <td>
                                            <?php
                                                $tags = $wiki->getTags();
                                                foreach ($tags as $tag) {
                                                    echo $tag->getName() . ', ';
                                                }
                                                ?>
                                        </td>
                                        <td>
                                            <?= $wiki->getCreatedAt(); ?>
                                        </td>
                                        <td>
                                            <?= $wiki->isArchived(); ?>
                                        </td>
                                        <td>
                                            <?php if ($wiki->isArchived()): ?>
                                            <a href="index.php?action=wiki_enable&id=<?= $wiki->getId(); ?>"
                                                class="btn btn-success btn-sm">Enable</a>
                                            <?php else: ?>
                                            <a href="index.php?action=wiki_disable&id=<?= $wiki->getId(); ?>"
                                                class="btn btn-danger btn-sm">Disable</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<?php
$content = ob_get_clean();
include_once 'app/views/include/layout_sub.php';
?>