<?php
    function includePartial($partial) {
    	foreach (glob("partials/".$partial."*.php") as $filename) {
    	    include $filename;
    	}
    }
    ?>
<!DOCTYPE html>
<head>
    <?php includePartial('head'); ?>
</head>
<body>
    <? includePartial('sidebar'); ?>
    
    <div id="right-panel" class="right-panel">
    	<? includePartial('header'); ?>
    
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Banking</h1>
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
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Banking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bank Rules</a>
                </li>
            </ul>
            <div class="tab-content pl-3 p-1" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3>Bank and Credit Cards</h3>
                    <p>Some content here.</p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3>Rules</h3>
                    <p>Some content here.</p>
                    <div id="table" class="table-editable">
                        <!-- Button trigger modal -->
                        <span class="table-add float-right mb-3 mr-2"><button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">New Rule</button></span>
                        <table class="table table-bordered table-responsive-md table-striped text-center font14">
                            <tr>
                                <th class="text-center">NO.</th>
                                <th class="text-center">RULE NAME</th>
                                <th class="text-center">CONDITIONS</th>
                                <th class="text-center">SETTINGS</th>
                                <th class="text-center">AUTO-ADD</th>
                                <th class="text-center">ACTIONS</th>
                            </tr>
                            <tr>
                                <td class="pt-3-half" contenteditable="true">1</td>
                                <td class="pt-3-half" contenteditable="true">Test Service</td>
                                <td class="pt-3-half" contenteditable="true">Sample Description</td>
                                <td class="pt-3-half" contenteditable="true">3</td>
                                <td>
                                    <span class="table-add mb-3 mr-2"><a href="#!" class="text-success"><i class="fa fa-plus" aria-hidden="true"></i></a></span>
                                </td>
                                <td>
                                    <span class="table-add mb-3 mr-2"><a href="#!" class="text-info"><i aria-hidden="true">EDIT</i></a></span>
                                </td>
                            </tr>
                            <!-- This is our clonable table line -->
                        </table>
                    </div>
                    <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticModalLabel">Add New Rule</h5>
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
                                                <p class="pr-1">When a transaction meets</p>
                                                <select class="">
                                                    <option>all</option>
                                                    <option>any</option>
                                                </select>
                                                <p class="pl-1">of these conditions.</p>
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
    </div>
</body>
</html>