<!doctype html>
<head>
    <?php include "partials/head.php"; ?>
</head>
<body>
    <?php include "partials/sidebar.php"; ?> 
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <?php include "partials/header.php"; ?> 
        </header>
        <!-- Header-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Basic table</li>
                        </ol>
                    </div>
                </div>
            </div> -->
        </div>
        
        <div class="content mt-3">
            <h3>Import Data</h3>

            <div class="col-md-12">
                <div class="col-md-4">
                    <a data-toggle="modal" data-target="#uploadmodal">
                    <div class=" center-content my-3">
                        <img src="assets/images/bank.png" class="w-50 h-50">
                    </div>
                    <h5 align="center" class="my-3">BANK</h5></a>
                </div>
                <div class="col-md-4">
                    <a data-toggle="modal" data-target="#uploadmodal">
                    <div class=" center-content my-3">
                        <img src="assets/images/customers.png" class="w-50 h-50">
                    </div>
                    <h5 align="center" class="my-3">CUSTOMERS</h5></a>
                </div>
                <div class="col-md-4">
                    <a data-toggle="modal" data-target="#uploadmodal">
                    <div class=" center-content my-3">
                        <img src="assets/images/supplies.png" class="w-50 h-50">
                    </div>
                    <h5 align="center" class="my-3">SUPPLIES</h5></a>
                </div>
                <div class="col-md-12 mb-4"></div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <a data-toggle="modal" data-target="#uploadmodal">
                    <div class=" center-content my-3">
                        <img src="assets/images/products.png" class="w-50 h-50">
                    </div>
                    <h5 align="center" class="my-3">PRODUCTS AND SERVICES</h5></a>
                </div>
                <div class="col-md-4">
                    <a data-toggle="modal" data-target="#uploadmodal">
                    <div class=" center-content my-3">
                        <img src="assets/images/accounts.png" class="w-50 h-50">
                    </div>
                    <h5 align="center" class="my-3">CHART OF ACCOUNTS</h5></a>
                </div>
            </div>
        </div>


    </div><!-- /#right-panel -->
    <!-- Right Panel -->


    
    <?php include "partials/footer.php"; ?>

</body>
</html>