<div class="header-menu">
    <div class="col-sm-7">
        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
        <div class="header-left">
            <button class="search-trigger"><i class="fa fa-search"></i></button>
            <div class="form-inline">
                <form class="search-form">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="user-avatar rounded-circle" src="assets/images/admin.jpg" alt="User Avatar">
            </a>
            <div class="user-menu dropdown-menu">
                <a class="nav-link"><i class="fa fa- user"></i>Username</a>
                <a class="nav-link" href="userprofile.php"><i class="fa fa- user"></i>User Profile</a>
                <a class="nav-link" data-toggle="modal" data-target="#staticModal"><i class="fa fa- user"></i>Feedback</a>
                <a class="nav-link" href="https://security.intuit.com/index.php/privacy"><i class="fa fa- user"></i>Privacy</a>
                <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Sign Out</a>
            </div>
            <div class="modal fade float-right" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-sm float-right w-100" style="margin-top: 75px;" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Feedback</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <textarea class="rounded w-100" rows="6" placeholder="Share your feedback or report a bug">
                            </textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info rounded">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>