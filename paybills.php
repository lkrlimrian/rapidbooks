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
            <div class="col-md-12 p-0 mb-4">
                    
                    <div class="my-3 p-0">
                        <div class="col-md-2 p-0 pr-3">
                            <p>Payment Account</p>
                            <input type="text" name="" class="w-100">
                        </div>
                        <div class="col-auto p-0 mr-3">
                            <p></p>
                            <p class="font12 font-weight-bold p-0 m-0 mt-4">Balance PHP 1,000</p>
                        </div>
                        <div class="col-md-2 p-0 mr-2">
                            <p>Payment Date</p>
                            <input type="date" name="" class="w-100">
                        </div>
                        <div class="col-md-2 p-0 mr-2">
                            <p>Reference No. </p>
                            <input type="text" name="">
                        </div>
                        <div class="col-md-4 p-0 d-inline-flex center-content">
                            <h4 class="mr-2">TOTAL PAYMENT AMOUNT: PHP 0.00</h4>
                            <!-- <h3>PHP 0.00</h3> -->
                        </div>
                    </div>

                    <div class="col-md-12 mb-1 mt-4">
                        <h4>Account Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>

                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-1 mt-4">
                        <h4>Item Details</h4>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-left font14">
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">PRODUCT/SERVICE</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-center">QTY</th>
                            <th class="text-left">RATE</th>
                            <th class="text-left">AMOUNT</th>
                            <th class="text-center"></th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="false">1</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">4</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 800.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half" contenteditable="false">2</td>
                            <td class="pt-3-half" contenteditable="true">Sales Product</td>
                            <td class="pt-3-half" contenteditable="true">Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet. Lorem Ipsum Dolor Sit Amet.</td>
                            <td class="pt-3-half text-center" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">PHP 200.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 600.00</td>
                            <td class="pt-3-half" contenteditable="false"><a href="" class="fa fa-trash"></a></td>
                        </tr>
                        <!-- This is our clonable table line -->
                    </table>

                    <div class="col-md-12 p-0">
                        <div class="float-left">
                            <div class="d-inline-flex">
                                <button class="btn btn-outline-dark rounded mr-1 font14">Add Lines</button>
                                <button class="btn btn-outline-dark rounded mr-1 font14">Clear All Lines</button>
                            </div>
                        </div>
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="mb-0 pr-4 text-dark font-weight-bold">SUBTOTAL</p>
                                <p class="mb-0 text-dark font-weight-bold">PHP 1400.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 p-0">
                        <div class="float-right mr-5">
                            <div class="d-inline-flex mr-4">
                                <p class="pr-4 text-dark font-weight-bold">TOTAL</p>
                                <p class="text-dark font-weight-bold">PHP 500.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 p-0">
                        <div class="col-md-6 pl-0">
                            <p>Your Message to Supplier</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>

                        <div class="col-md-6 pr-0">
                            <p>Memo</p>
                            <textarea rows="3" class="w-100"></textarea>
                        </div>
                    </div>

                    
                    <div class="col-md-6 m-0 p-0 mt-3">
                        <div class="d-inline-flex">
                            <p class="fa fa-paperclip"></p>
                            <p class="p-0 ml-1">Maximum Size: 20MB</p>
                        </div>
                        <div class="input-group mb-3 p-0">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label bg-transparent" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
        </div><!-- .content -->


    </div><!-- /#right-panel -->
    <!-- Right Panel -->


    
    <?php include "partials/footer.php"; ?>

</body>
</html>