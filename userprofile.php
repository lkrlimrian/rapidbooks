<!doctype html>
<head>
    <?php include "partials/head.php"; ?>
</head>
<body class="sales">
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
                    <h1>User Profile</h1>
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
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Security</a>
            </li>
        </ul>
        <div class="tab-content pl-3 p-1" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <!-- <h3>Sales Transactions</h3> -->

                <div class="col-md-12 bg-white py-3 mt-2">
                    <div class="col-md-4">
                        <p class="font-weight-bold text-left m-0">Name</p>
                    </div>
                    <div class="col-md-4 text-left">
                        <p class="m-0">John Doe</p>
                    </div>
                    <div class="col-md-4 text-right">
                        <p class="text-info m-0">Edit</p>
                    </div>
                </div>

                <div class="col-md-12 bg-white py-3 mt-2">
                    <div class="col-md-4">
                        <p class="font-weight-bold text-left m-0">User ID</p>
                    </div>
                    <div class="col-md-4 text-left">
                        <p class="m-0">john.doe</p>
                    </div>
                    <div class="col-md-4 text-right">
                        <p class="text-info m-0">Edit</p>
                    </div>
                </div>

                <div class="col-md-12 bg-white py-3 mt-2">
                    <div class="col-md-4">
                        <p class="font-weight-bold text-left m-0">Email Address</p>
                    </div>
                    <div class="col-md-4 text-left d-inline-flex">
                        <p class="m-0">john.doe@mail.com</p>
                        <p class="text-success font12 m-0 ml-1">VERIFIED</p>
                    </div>
                    <div class="col-md-4 text-right">
                        <p class="text-info m-0">Edit</p>
                    </div>
                </div>

                <div class="col-md-12 bg-white py-3 mt-2">
                    <div class="col-md-4">
                        <p class="font-weight-bold text-left m-0">Address</p>
                    </div>
                    <div class="col-md-4 text-left">
                        <p class="m-0">Sample Address</p>
                    </div>
                    <div class="col-md-4 text-right">
                        <p class="text-info m-0">Edit</p>
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>


            </div>
            <!-- ======================================================================================================================================== SECOND TAB--> 
            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <!-- <h3>Sales Transactions</h3> -->
            </div>
        </div>
    </div>
    <!-- /#right-panel -->
    <!-- Right Panel -->
    <?php include "partials/footer.php"; ?>
</body>
</html>