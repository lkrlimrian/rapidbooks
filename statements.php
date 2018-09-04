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
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title d-inline-flex">
                        <h1>Statements</h1>
                    </div>
                </div>
                <div class="float-right p-2">
                    <button type="button" class="btn btn-success rounded" data-toggle="modal" data-target="#statementmodal">
                    Create Statement
                    </button>
                    <div class="modal fade" id="statementmodal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticModalLabel">Create Statements</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="p-0 col-md-12 d-inline-flex">
                                        <div class="p-0 col-md-6">
                                            <div class="col-md-12 w-100">
                                                <div class="padding0">
                                                    <p class="mb-1 mt-3">Statement Type</p>
                                                    <select class="w-100">
                                                        <option>Balance Forward</option>
                                                        <option>Open Item</option>
                                                        <option>Transaction Statement</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 col-md-6">
                                            <div class="col-md-12 w-100">
                                                <div class="padding0">
                                                    <p class="mb-1 mt-3">Statement Date</p>
                                                    <input class="w-100" type="date" value="07/27/2017">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of first flex -->
                                    <div class="col-md-12 d-inline-flex">
                                        <div class="p-0 col-md-12">
                                            <p class="mb-1 mt-3">Customer Balance Status</p>
                                            <select class="w-100">
                                                <option>Open</option>
                                                <option>Overdue</option>
                                                <option>All</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="p-0 col-md-12 d-inline-flex">
                                        <div class="p-0 col-md-6">
                                            <div class="col-md-12 w-100">
                                                <div class="padding0">
                                                    <p class="mb-1 mt-3">Start Date</p>
                                                    <input class="w-100" type="date" value="07/27/2017">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 col-md-6">
                                            <div class="col-md-12 w-100">
                                                <div class="padding0">
                                                    <p class="mb-1 mt-3">End Date</p>
                                                    <input class="w-100" type="date" value="07/27/2017">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of second flex -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-success rounded">Save</button>
                                    <button type="button" class="btn btn-success rounded">Save and Send</button>
                                </div>
                            </div>
                        </div>
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
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Balance Forward</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Open Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Transaction Statements</a>
                </li>
            </ul>
            <div class="tab-content pl-3 p-1" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <!-- <h3>Statements</h3> -->
                    <div id="table" class="table-editable">
                        <!-- Button trigger modal -->
                        <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                        <table class="table table-bordered table-responsive-md table-striped text-center font14">
                            <tr>
                                <th class="text-center"><input type="checkbox" name=""></th>
                                <th class="text-center">RECEPIENTS</th>
                                <th class="text-center">EMAIL ADDRESS</th>
                                <th class="text-center">BALANCE</th>
                            </tr>
                            <tr>
                                <td class="pt-3-half" contenteditable="true"><input type="checkbox" name=""></td>
                                <td class="pt-3-half" contenteditable="false">Test Customer</td>
                                <td class="pt-3-half" contenteditable="true">test@mail.com</td>
                                <td class="pt-3-half" contenteditable="true">PHP 1,000.00</td>
                            </tr>
                            <tr>
                                <td class="pt-3-half" contenteditable="true"><input type="checkbox" name=""></td>
                                <td class="pt-3-half" contenteditable="false">Sample Customer</td>
                                <td class="pt-3-half" contenteditable="true">test@mail.com</td>
                                <td class="pt-3-half" contenteditable="true">PHP 5,000.00</td>
                            </tr>
                            <tr>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="false"></td>
                                <td class="pt-3-half font-weight-bold" contenteditable="true">TOTAL BALANCE FOR 2 CUSTOMER</td>
                                <td class="pt-3-half font-weight-bold" contenteditable="true">PHP 6,000.00</td>
                            </tr>
                            <!-- This is our clonable table line -->
                        </table>
                        <div class="pagination float-right">
                            <a class="pl-2 active" href="#">&laquo;First</a>
                            <a class="pl-2" href="#">Previous</a>
                            <a class="pl-2">1-1 of 1</a>
                            <a class="pl-2" href="#">Next</a>
                            <a class="pl-2" href="#">Last&raquo;</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================================================================================= SECOND TAB--> 
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- <h3>Sales Transactions</h3> -->
                    <div id="table" class="table-editable">
                        <!-- Button trigger modal -->
                        <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                        <table class="table table-bordered table-responsive-md table-striped text-center font14">
                            <tr>
                                <th class="text-center"><input type="checkbox" name=""></th>
                                <th class="text-center">RECEPIENTS</th>
                                <th class="text-center">EMAIL ADDRESS</th>
                                <th class="text-center">BALANCE</th>
                            </tr>
                            <tr>
                                <td class="pt-3-half" contenteditable="true"><input type="checkbox" name=""></td>
                                <td class="pt-3-half" contenteditable="false">Sample Customer</td>
                                <td class="pt-3-half" contenteditable="true">test@mail.com</td>
                                <td class="pt-3-half" contenteditable="true">PHP 2,000.00</td>
                            </tr>
                            <tr>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="false"></td>
                                <td class="pt-3-half font-weight-bold" contenteditable="true">TOTAL BALANCE FOR 1 CUSTOMER</td>
                                <td class="pt-3-half font-weight-bold" contenteditable="true">PHP 2,000.00</td>
                            </tr>
                            <!-- This is our clonable table line -->
                        </table>
                        <div class="pagination float-right">
                            <a class="pl-2 active" href="#">&laquo;First</a>
                            <a class="pl-2" href="#">Previous</a>
                            <a class="pl-2">1-1 of 1</a>
                            <a class="pl-2" href="#">Next</a>
                            <a class="pl-2" href="#">Last&raquo;</a>
                        </div>
                    </div>
                </div>
                <!-- ===========================================================================================================================================THIRD TAB -->
                <div class="tab-pane fade show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div id="table" class="table-editable">
                        <!-- Button trigger modal -->
                        <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                        <table class="table table-bordered table-responsive-md table-striped text-center font14">
                            <tr>
                                <th class="text-center"><input type="checkbox" name=""></th>
                                <th class="text-center">RECEPIENTS</th>
                                <th class="text-center">EMAIL ADDRESS</th>
                                <th class="text-center">BALANCE</th>
                            </tr>
                            <tr>
                                <td class="pt-3-half" contenteditable="true"><input type="checkbox" name=""></td>
                                <td class="pt-3-half" contenteditable="false">Demo Customer</td>
                                <td class="pt-3-half" contenteditable="true">test@mail.com</td>
                                <td class="pt-3-half" contenteditable="true">PHP 3,000.00</td>
                            </tr>
                            <tr>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="false"></td>
                                <td class="pt-3-half font-weight-bold" contenteditable="true">TOTAL BALANCE FOR 1 CUSTOMER</td>
                                <td class="pt-3-half font-weight-bold" contenteditable="true">PHP 3,000.00</td>
                            </tr>
                            <!-- This is our clonable table line -->
                        </table>
                        <div class="pagination float-right">
                            <a class="pl-2 active" href="#">&laquo;First</a>
                            <a class="pl-2" href="#">Previous</a>
                            <a class="pl-2">1-1 of 1</a>
                            <a class="pl-2" href="#">Next</a>
                            <a class="pl-2" href="#">Last&raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#right-panel -->
    <!-- Right Panel -->
    <?php include "partials/footer.php"; ?>
</body>
</html>