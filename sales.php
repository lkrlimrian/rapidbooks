<?php
    function includePartial($partial) {
        foreach (glob("partials/".$partial."*.php") as $filename) {
            include $filename;
        }
    }
    ?>
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
    <div class="card-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All Sales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Invoices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Customers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="extra-tab" data-toggle="tab" href="#extra" role="tab" aria-controls="extra" aria-selected="false">Products and Services</a>
            </li>
        </ul>
        <div class="tab-content pl-3 p-1" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h3>Sales Transactions</h3>
                <div id="table" class="table-editable">
                    <!-- Button trigger modal -->
                    <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                    <select class="float-right mb-3 p-1 bg-success text-white ">
                        <option value="" disabled selected>New Transaction</option>
                        <option>Invoice</option>
                        <option>Payment</option>
                        <option>Estimate</option>
                        <option>Sales Receipt</option>
                        <option>Credit Note</option>
                        <option>Delayed Charge</option>
                        <option>Time Activity</option>
                    </select>
                    <div class="col-md-12 text-white p-0 mb-5">
                        <div class="col-md-2 bg-ltblue pb-0">
                            <h3>PHP0</h3>
                            <p>0 ESTIMATE</p>
                        </div>
                        <div class="col-md-2 bg-blue">
                            <h3>PHP0</h3>
                            <p>0 Unbilled Activity</p>
                        </div>
                        <div class="col-md-2 bg-orange">
                            <h3>PHP0</h3>
                            <p>0 OVERDUE</p>
                        </div>
                        <div class="col-md-2 bg-grey">
                            <h3>PHP2,000</h3>
                            <p>1 OPEN INVOICE</p>
                        </div>
                        <div class="col-md-4 bg-ltgreen">
                            <h3>PHP0</h3>
                            <p>0 PAID LAST 30 DAYS</p>
                        </div>
                    </div>
                    <div class="float-left">
                        <select>
                            <option value="" disabled selected>Batch Actions</option>
                            <option>Print Transactions</option>
                            <option>Print Packing Slip</option>
                            <option>Send Transactions</option>
                            <option>Send Reminders</option>
                        </select>
                        <button type="button" class="btn btn-secondary mb-1 py-0" data-toggle="modal" data-target="#staticModal">
                        Filter
                        </button>
                        <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticModalLabel">Filter</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-12 d-inline-flex">
                                            <div class="col-md-6 w-100">
                                                <div class="padding0">
                                                    <p>Type</p>
                                                    <select class="w-100">
                                                        <option>All Transactions</option>
                                                        <option>Estimates</option>
                                                        <option>Invoices</option>
                                                        <option>Sales Receipt</option>
                                                        <option>Credit Notes</option>
                                                        <option>Unbilled Income</option>
                                                        <option>Recently Paid</option>
                                                        <option>Money Received</option>
                                                        <option>Statements</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 w-100">
                                                <div class="padding0">
                                                    <p>In</p>
                                                    <select class="w-100">
                                                        <option>All Bank Accounts</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-inline pt-1">
                                            <div class="col-md-6 w-100">
                                                <div class="padding0">
                                                    <p>Status</p>
                                                    <select class="w-100">
                                                        <option>All Statuses</option>
                                                        <option>Open</option>
                                                        <option>Overdue</option>
                                                        <option>Paid</option>
                                                        <option>Pending</option>
                                                        <option>Accepted</option>
                                                        <option>Closed</option>
                                                        <option>Rejected</option>
                                                        <option>Expired</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 w-100">
                                                <div class="padding0">
                                                    <p>Delivery Method</p>
                                                    <select class="w-100">
                                                        <option>Any</option>
                                                        <option>Print Later</option>
                                                        <option>Send Later</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-inline-flex pt-3">
                                            <div class="col-md-4 w-100">
                                                <div class="padding0">
                                                    <p>Date</p>
                                                    <select class="w-100">
                                                        <option>Last 365 Days</option>
                                                        <option>Custom</option>
                                                        <option>Today</option>
                                                        <option>Yesterday</option>
                                                        <option>This Week</option>
                                                        <option>This Month</option>
                                                        <option>This Quarter</option>
                                                        <option>This Year</option>
                                                        <option>Last Week</option>
                                                        <option>Last Month</option>
                                                        <option>Last Quarter</option>
                                                        <option>Last Year</option>
                                                        <option>All Dates</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 w-100">
                                                <div class="padding0">
                                                    <p>From</p>
                                                    <input class="w-100" type="date" value="07/27/2017">
                                                </div>
                                            </div>
                                            <div class="col-md-4 w-100">
                                                <div class="padding0">
                                                    <p>To</p>
                                                    <input class="w-100" type="date"">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 pt-2">
                                            <div class="col-md-6">
                                                <div class="padding0">
                                                    <p>Customer</p>
                                                    <select class="w-75">
                                                        <option>All</option>
                                                        <option>Cheque</option>
                                                        <option>Transfer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                                        <button type="button" class="btn btn-success">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-inline-flex float-right">
                        <li class="fa fa-print pl-2"><a href=""></a></li>
                        <li class="fa fa-save pl-2"><a href=""></a></li>
                        <li class="fa fa-cog pl-2"><a href=""></a></li>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-center font14">
                        <tr>
                            <th class="text-center"><input type="checkbox" name=""></th>
                            <th class="text-center">DATE</th>
                            <th class="text-center">TYPE</th>
                            <th class="text-center">NO.</th>
                            <th class="text-center">CUSTOMER</th>
                            <th class="text-center">DUE-DATE</th>
                            <th class="text-center">BALANCE</th>
                            <th class="text-center">TOTAL</th>
                            <th class="text-center">STATUS</th>
                            <th class="text-center">ACTION</th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="true"><input type="checkbox" name=""></td>
                            <td class="pt-3-half" contenteditable="true">7/26/2018</td>
                            <td class="pt-3-half" contenteditable="true">Invoice</td>
                            <td class="pt-3-half" contenteditable="true">1001</td>
                            <td class="pt-3-half" contenteditable="true">test customer</td>
                            <td class="pt-3-half" contenteditable="true">8/1/2018</td>
                            <td class="pt-3-half" contenteditable="true">PHP 2,000.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 2,000.00</td>
                            <td class="pt-3-half" contenteditable="true">Open</td>
                            <td>
                                <span class="table-add mb-3 mr-2"><a href="#!" class="text-info"><i aria-hidden="true" data-target="#receiveModal">Receive Payment</i></a></span>
                            </td>
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
                <div class="modal fade" id="receiveModal" tabindex="-1" role="dialog" aria-labelledby="receiveModalLabel" aria-hidden="true" data-backdrop="static">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="receiveModalLabel">Add yeah Rule</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12 d-inline-flex">
                                    <div class="col-md-6 w-100">
                                        <div class="padding0">
                                            <p class="float-left text-center">Rule Name</p>
                                            <input name="rulename" type="text" class="float-right w-100">
                                        </div>
                                    </div>
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <p>For</p>
                                            <select class="w-100">
                                                <option>Money out</option>
                                                <option>Money in</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <p>In</p>
                                            <select class="w-100">
                                                <option>All Bank Accounts</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-3">
                                    <div class="col-md-12">
                                        <div class="d-inline-flex">
                                            <p>When a transaction meets </p>
                                            <select>
                                                <option>all</option>
                                                <option>any</option>
                                            </select>
                                            <p>of these conditions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 d-inline pt-1">
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <select class="w-100">
                                                <option>Bank Text</option>
                                                <option>Description</option>
                                                <option>Amount</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <select class="w-100">
                                                <option>Contains</option>
                                                <option>Does not contain</option>
                                                <option>Is Exactly</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 w-100">
                                        <div class="padding0">
                                            <input name="rulename" type="text" class="float-right w-100">
                                        </div>
                                    </div>
                                    <div class="col-md-12"><button class="btn btn-success">Add Line</button></div>
                                </div>
                                <div class="col-md-12 d-inline-flex pt-3">
                                    <div class="col-md-4 w-100">
                                        <div class="padding0">
                                            <p>Transaction Type</p>
                                            <select class="w-100">
                                                <option>Expense</option>
                                                <option>Cheque</option>
                                                <option>Transfer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 w-100">
                                        <div class="padding0">
                                            <p>Payee</p>
                                            <select class="w-100">
                                                <option>Money out</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 w-100">
                                        <div class="padding0">
                                            <p>Category</p>
                                            <select class="w-100">
                                                <option>All Bank Accounts</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-2">
                                    <div class="col-md-12">
                                        <button class="btn btn-success">Split</button>
                                        <p>Memo</p>
                                        <input name="rulename" type="text" class="w-50"> <br>
                                        <input type="checkbox">Automatically add to my books
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======================================================================================================================================== SECOND TAB--> 
            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <!-- <h3>Sales Transactions</h3> -->
                <div id="table" class="table-editable">
                    <!-- Button trigger modal -->
                    <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                    <div class="col-md-12 p-0 mb-5">
                        <div class="col-md-6">
                            <div class="d-inline-block w-100 font12">
                                <p class="float-left">PHP 2,000.00 UNPAID</p>
                                <p class="float-right">LAST 365 DAYS</p>
                            </div>
                            <div class="d-inline-block w-100">
                                <div class="float-left padding0">
                                    <p class="m-0 text-orange">PHP 0.00</p>
                                    <p class="font12">OVERDUE</p>
                                </div>
                                <div class="float-right">
                                    <p class="m-0 text-secondary">PHP 2,000.00</p>
                                    <p class="font12">NOT YET DUE</p>
                                </div>
                            </div>
                            <div class="progress mb-3 w-100">
                                <div class="progress-bar bg-grey" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-inline-block w-100 font12">
                                <p class="float-left">PHP 0.00 UNPAID</p>
                                <p class="float-right">LAST 365 DAYS</p>
                            </div>
                            <div class="d-inline-block w-100">
                                <div class="float-left padding0">
                                    <p class="m-0 text-ltgreen">PHP 0.00</p>
                                    <p class="font12">NOT DEPOSITED</p>
                                </div>
                                <div class="float-right">
                                    <p class="m-0 text-success">PHP 2,000.00</p>
                                    <p class="font12">DEPOSITED</p>
                                </div>
                            </div>
                            <div class="progress mb-3 w-100 bg-success">
                                <div class="progress-bar bg-ltgreen" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="float-left">
                        <select>
                            <option value="" disabled selected>Batch Actions</option>
                            <option>Print Transactions</option>
                            <option>Print Packing Slip</option>
                            <option>Send Transactions</option>
                            <option>Send Reminders</option>
                        </select>
                    </div>
                    <div class="d-inline-flex float-right">
                        <button class="btn btn-success"><a href="invoice.html" class="text-white"> New Invoice</a></button>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-center font14">
                        <tr>
                            <th class="text-center"><input type="checkbox" name=""></th>
                            <th class="text-center">DATE</th>
                            <th class="text-center">TYPE</th>
                            <th class="text-center">NO.</th>
                            <th class="text-center">CUSTOMER</th>
                            <th class="text-center">DUE-DATE</th>
                            <th class="text-center">BALANCE</th>
                            <th class="text-center">TOTAL</th>
                            <th class="text-center">STATUS</th>
                            <th class="text-center">ACTION</th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="true"><input type="checkbox" name=""></td>
                            <td class="pt-3-half" contenteditable="true">7/26/2018</td>
                            <td class="pt-3-half" contenteditable="true">Invoice</td>
                            <td class="pt-3-half" contenteditable="true">1001</td>
                            <td class="pt-3-half" contenteditable="true">test customer</td>
                            <td class="pt-3-half" contenteditable="true">8/1/2018</td>
                            <td class="pt-3-half" contenteditable="true">PHP 2,000.00</td>
                            <td class="pt-3-half" contenteditable="true">PHP 2,000.00</td>
                            <td class="pt-3-half" contenteditable="true">Open</td>
                            <td>
                                <span class="table-add mb-3 mr-2">
                                    <a href="#!" class="text-info"><i aria-hidden="true">Receive Payment</i></a>
                                    <select>
                                        <option></option>
                                        <option>Print</option>
                                        <option>Send</option>
                                        <option>View/Edit</option>
                                        <option>Send Reminder</option>
                                        <option>Print packing slip</option>
                                        <option>Copy</option>
                                        <option>Delete</option>
                                        <option>Void</option>
                                    </select>
                                </span>
                            </td>
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
                <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticModalLabel">Add yeah Rule</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12 d-inline-flex">
                                    <div class="col-md-6 w-100">
                                        <div class="padding0">
                                            <p class="float-left text-center">Rule Name</p>
                                            <input name="rulename" type="text" class="float-right w-100">
                                        </div>
                                    </div>
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <p>For</p>
                                            <select class="w-100">
                                                <option>Money out</option>
                                                <option>Money in</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <p>In</p>
                                            <select class="w-100">
                                                <option>All Bank Accounts</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-3">
                                    <div class="col-md-12">
                                        <div class="d-inline-flex">
                                            <p>When a transaction meets </p>
                                            <select>
                                                <option>all</option>
                                                <option>any</option>
                                            </select>
                                            <p>of these conditions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 d-inline pt-1">
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <select class="w-100">
                                                <option>Bank Text</option>
                                                <option>Description</option>
                                                <option>Amount</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <select class="w-100">
                                                <option>Contains</option>
                                                <option>Does not contain</option>
                                                <option>Is Exactly</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 w-100">
                                        <div class="padding0">
                                            <input name="rulename" type="text" class="float-right w-100">
                                        </div>
                                    </div>
                                    <div class="col-md-12"><button class="btn btn-success">Add Line</button></div>
                                </div>
                                <div class="col-md-12 d-inline-flex pt-3">
                                    <div class="col-md-4 w-100">
                                        <div class="padding0">
                                            <p>Transaction Type</p>
                                            <select class="w-100">
                                                <option>Expense</option>
                                                <option>Cheque</option>
                                                <option>Transfer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 w-100">
                                        <div class="padding0">
                                            <p>Payee</p>
                                            <select class="w-100">
                                                <option>Money out</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 w-100">
                                        <div class="padding0">
                                            <p>Category</p>
                                            <select class="w-100">
                                                <option>All Bank Accounts</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-2">
                                    <div class="col-md-12">
                                        <button class="btn btn-success">Split</button>
                                        <p>Memo</p>
                                        <input name="rulename" type="text" class="w-50"> <br>
                                        <input type="checkbox">Automatically add to my books
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===========================================================================================================================================THIRD TAB -->
            <div class="tab-pane fade show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <h3>Customers</h3>
                <div id="table" class="table-editable">
                    <!-- Button trigger modal -->
                    <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                    <select class="float-right mb-3 p-1 bg-success text-white ">
                        <option value="" disabled selected>New Customer</option>
                        <option>Import Customer</option>
                    </select>
                    <div class="col-md-12 text-white p-0 mb-5">
                        <div class="col-md-2 bg-ltblue pb-0">
                            <h3>PHP0</h3>
                            <p>0 ESTIMATE</p>
                        </div>
                        <div class="col-md-2 bg-blue">
                            <h3>PHP0</h3>
                            <p>0 Unbilled Activity</p>
                        </div>
                        <div class="col-md-2 bg-orange">
                            <h3>PHP0</h3>
                            <p>0 OVERDUE</p>
                        </div>
                        <div class="col-md-2 bg-grey">
                            <h3>PHP2,000</h3>
                            <p>1 OPEN INVOICE</p>
                        </div>
                        <div class="col-md-4 bg-ltgreen">
                            <h3>PHP0</h3>
                            <p>0 PAID LAST 30 DAYS</p>
                        </div>
                    </div>
                    <div class="float-left">
                        <select>
                            <option value="" disabled selected>Batch Actions</option>
                            <option>Create Statements</option>
                            <option>Email</option>
                        </select>
                    </div>
                    <div class="d-inline-flex float-right">
                        <li class="fa fa-print pl-2"><a href=""></a></li>
                        <li class="fa fa-save pl-2"><a href=""></a></li>
                        <li class="fa fa-cog pl-2"><a href=""></a></li>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-center font14">
                        <tr>
                            <th class="text-center"><input type="checkbox" name=""></th>
                            <th class="text-center">CUSTOMER/COMPANY</th>
                            <th class="text-center">PHONE</th>
                            <th class="text-center">OPEN BALANCE</th>
                            <th class="text-center">ACTION</th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="true"><input type="checkbox" name=""></td>
                            <td class="pt-3-half" contenteditable="true">test customer</td>
                            <td class="pt-3-half" contenteditable="true">09321654987</td>
                            <td class="pt-3-half" contenteditable="true">PHP 2,000.00</td>
                            <td>
                                <span class="table-add mb-3 mr-2"><a href="#!" class="text-info"><i aria-hidden="true">Receive Payment</i></a></span>
                            </td>
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
                <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticModalLabel">Add yeah Rule</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12 d-inline-flex">
                                    <div class="col-md-6 w-100">
                                        <div class="padding0">
                                            <p class="float-left text-center">Rule Name</p>
                                            <input name="rulename" type="text" class="float-right w-100">
                                        </div>
                                    </div>
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <p>For</p>
                                            <select class="w-100">
                                                <option>Money out</option>
                                                <option>Money in</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <p>In</p>
                                            <select class="w-100">
                                                <option>All Bank Accounts</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-3">
                                    <div class="col-md-12">
                                        <div class="d-inline-flex">
                                            <p>When a transaction meets </p>
                                            <select>
                                                <option>all</option>
                                                <option>any</option>
                                            </select>
                                            <p>of these conditions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 d-inline pt-1">
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <select class="w-100">
                                                <option>Bank Text</option>
                                                <option>Description</option>
                                                <option>Amount</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <select class="w-100">
                                                <option>Contains</option>
                                                <option>Does not contain</option>
                                                <option>Is Exactly</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 w-100">
                                        <div class="padding0">
                                            <input name="rulename" type="text" class="float-right w-100">
                                        </div>
                                    </div>
                                    <div class="col-md-12"><button class="btn btn-success">Add Line</button></div>
                                </div>
                                <div class="col-md-12 d-inline-flex pt-3">
                                    <div class="col-md-4 w-100">
                                        <div class="padding0">
                                            <p>Transaction Type</p>
                                            <select class="w-100">
                                                <option>Expense</option>
                                                <option>Cheque</option>
                                                <option>Transfer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 w-100">
                                        <div class="padding0">
                                            <p>Payee</p>
                                            <select class="w-100">
                                                <option>Money out</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 w-100">
                                        <div class="padding0">
                                            <p>Category</p>
                                            <select class="w-100">
                                                <option>All Bank Accounts</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-2">
                                    <div class="col-md-12">
                                        <button class="btn btn-success">Split</button>
                                        <p>Memo</p>
                                        <input name="rulename" type="text" class="w-50"> <br>
                                        <input type="checkbox">Automatically add to my books
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =============================================================================================================================FOURTH TAB-->
            <div class="tab-pane fade show" id="extra" role="tabpanel" aria-labelledby="extra-tab">
                <h3>Products and Services</h3>
                <div id="table" class="table-editable">
                    <!-- Button trigger modal -->
                    <!-- <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span> -->
                    <div class="col-md-12 p-0 my-2">
                        <input type="text" name="" placeholder="Find products and services" class="font12">
                        <button type="button" class="btn btn-secondary mb-1 py-0" data-toggle="modal" data-target="#filterModal">Filter</button>
                        <div class="d-inline-flex float-right">
                            <li class="fa fa-print pl-2"><a href=""></a></li>
                            <li class="fa fa-save pl-2"><a href=""></a></li>
                            <li class="fa fa-cog pl-2"><a href=""></a></li>
                        </div>
                    </div>
                    <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="filterModalLabel">Filter</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12 d-inline-flex p-0 mb-2">
                                        <p class="float-left my-1 mr-2 col-md-6 p-0">Status</p>
                                        <select class="float-right w-200px p-0 col-md-6">
                                            <option>Active</option>
                                            <option>Inactive</option>
                                            <option>All</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 d-inline-flex p-0 mb-2">
                                        <p class="float-left my-1 mr-2 col-md-6 p-0">Type</p>
                                        <select class="float-right w-200px p-0 col-md-6">
                                            <option>All</option>
                                            <option>Inventory</option>
                                            <option>Non-Inventory</option>
                                            <option>Service</option>
                                            <option>Bundle</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 d-inline-flex p-0 mb-2">
                                        <p class="float-left my-1 mr-2 col-md-6 p-0">Category</p>
                                        <select class="float-right w-200px p-0 col-md-6">
                                            <option>All</option>
                                            <!-- <option><input type="checkbox">Uncategorized</option> -->
                                            <option>Uncatergorized</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 d-inline-flex p-0 mb-2">
                                        <p class="float-left my-1 mr-2 col-md-6 p-0">Stock Status</p>
                                        <select class="float-right w-200px p-0 col-md-6">
                                            <option>All</option>
                                            <option>Low Stock</option>
                                            <option>Out of Stock</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                                    <button type="button" class="btn btn-success">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md table-striped text-center font14">
                        <tr>
                            <th class="text-center"><input type="checkbox" name=""></th>
                            <th class="text-center">NAME</th>
                            <th class="text-center">SKU</th>
                            <th class="text-center">TYPE</th>
                            <th class="text-center">SALES DESC.</th>
                            <th class="text-center">SALES PRICE</th>
                            <th class="text-center">COST</th>
                            <th class="text-center">QTY ON HAND</th>
                            <th class="text-center">REORDER POINT</th>
                            <th class="text-center">ACTION</th>
                        </tr>
                        <tr>
                            <td class="pt-3-half" contenteditable="true"><input type="checkbox" name=""></td>
                            <td class="pt-3-half" contenteditable="true">test</td>
                            <td class="pt-3-half" contenteditable="true">2</td>
                            <td class="pt-3-half" contenteditable="true">Inventory</td>
                            <td class="pt-3-half" contenteditable="true">sample desc</td>
                            <td class="pt-3-half" contenteditable="true">1000.00</td>
                            <td class="pt-3-half" contenteditable="true">400.00</td>
                            <td class="pt-3-half" contenteditable="true">3</td>
                            <td class="pt-3-half" contenteditable="true">1</td>
                            <td>
                                <span class="table-add mb-3 mr-2"><a href="#!" class="text-info"><i aria-hidden="true">Edit</i></a></span>
                                <select>
                                    <option></option>
                                    <option>Make Inactive</option>
                                    <option>Run Report</option>
                                    <option>Duplicate</option>
                                </select>
                            </td>
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
                <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticModalLabel">Add yeah Rule</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12 d-inline-flex">
                                    <div class="col-md-6 w-100">
                                        <div class="padding0">
                                            <p class="float-left text-center">Rule Name</p>
                                            <input name="rulename" type="text" class="float-right w-100">
                                        </div>
                                    </div>
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <p>For</p>
                                            <select class="w-100">
                                                <option>Money out</option>
                                                <option>Money in</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <p>In</p>
                                            <select class="w-100">
                                                <option>All Bank Accounts</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-3">
                                    <div class="col-md-12">
                                        <div class="d-inline-flex">
                                            <p>When a transaction meets </p>
                                            <select>
                                                <option>all</option>
                                                <option>any</option>
                                            </select>
                                            <p>of these conditions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 d-inline pt-1">
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <select class="w-100">
                                                <option>Bank Text</option>
                                                <option>Description</option>
                                                <option>Amount</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 w-100">
                                        <div class="padding0">
                                            <select class="w-100">
                                                <option>Contains</option>
                                                <option>Does not contain</option>
                                                <option>Is Exactly</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 w-100">
                                        <div class="padding0">
                                            <input name="rulename" type="text" class="float-right w-100">
                                        </div>
                                    </div>
                                    <div class="col-md-12"><button class="btn btn-success">Add Line</button></div>
                                </div>
                                <div class="col-md-12 d-inline-flex pt-3">
                                    <div class="col-md-4 w-100">
                                        <div class="padding0">
                                            <p>Transaction Type</p>
                                            <select class="w-100">
                                                <option>Expense</option>
                                                <option>Cheque</option>
                                                <option>Transfer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 w-100">
                                        <div class="padding0">
                                            <p>Payee</p>
                                            <select class="w-100">
                                                <option>Money out</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 w-100">
                                        <div class="padding0">
                                            <p>Category</p>
                                            <select class="w-100">
                                                <option>All Bank Accounts</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-2">
                                    <div class="col-md-12">
                                        <button class="btn btn-success">Split</button>
                                        <p>Memo</p>
                                        <input name="rulename" type="text" class="w-50"> <br>
                                        <input type="checkbox">Automatically add to my books
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success">Save</button>
                            </div>
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