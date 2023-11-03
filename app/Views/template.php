<?php include "Template_Views/head.php"; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "Template_Views/sidebar.php"; ?>
        <!-- End Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "Template_Views/topbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?php echo $title ?></h1>

                    <!-- DataTales Example -->
                    <main>
                        <?php echo view($content) ?>
                    </main>
                    
                </div>
                <!-- /.container-fluid -->

            </div>
        </div>

        <!-- End of Main Content -->
    </div>
    <?php include "Template_Views/footer.php"; ?>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('template/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('template/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('template/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('template/js/sb-admin-2.min.js') ?>"></script>

    <!-- Data table -->
    <script src="<?php echo base_url('assets/js/datatables.js') ?>"></script>

  
    </body>