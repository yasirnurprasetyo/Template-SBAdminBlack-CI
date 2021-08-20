<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("layout/head") ?>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php $this->load->view("layout/sidebar") ?>
        </nav>

        <div id="page-wrapper">

            <?php $this->load->view($page) ?>

        </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

</body>

<?php $this->load->view("layout/script") ?>

</html>