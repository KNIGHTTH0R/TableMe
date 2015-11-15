<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EZ Restaurant</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
</head>

<body>
    
    <script>
        $(document).ready(function () {
            $(".nav-tabs a").click(function () {
                $(this).tab('show');
            });
        });
    </script> 

    <!-- Navigation Bar -->
    <?php include 'header.php'; ?>

    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <li class="list-group-item text-muted"> Admin Profile </li>
                <li class="list-group-item text-right"> <span class="pull-left"><strong>Name</strong></span>First_Name, Last_Name</li>
                <li class="list-group-item text-right"> <span class="pull-left"><strong>E-mail</strong></span>ex_username@example.com</li>
                <li class="list-group-item text-right"> <span class="pull-left"><strong>Username</strong></span>ex_username</li>
                <li class="list-group-item text-right"> <span class="pull-left"><strong>Phone Number</strong></span>xxx) xxx-xxxx</li>
            </div> <!-- End of col-md-9 -->
            <div class="col-md-3">
                <img src="#" width="200" height="230" style="float:left;">
            </div>
        </div> <!-- End of Row -->
        <ul class="nav nav-tabs"> <!-- Tab for the UserSection -->
            <li class="active"><a href="#restaurants">Restaurants</a></li>
            <li> <a href="#reports">Reports</a></li>
            <li> <a href="#reviews">Reviews</a></li> 
            <li> <a href="#owners">Owners</a></li> 
        </ul> <!-- Done with the tab --> 
        <div class="tab-content">
            <div id="restaurants" class="tab-pane fade in active">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>DATE</th>
                                <th>Restaurant Name</th>
                                <th>Time</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="items">
                            <tr>
                                <td>DATE</td>
                                <td>TIME</td>
                                <td>Name of Restaurant</td>
                                <td>
                                    <a href="#RestaurantSignUpPage" class="btn btn-info" role="button"> Review </a>
                                </td>
                                <td>
                                    <a href="#Approve" class="btn btn-info" role="button"> Approve </a>
                                    <a href="#Disapprove" class="btn btn-info" role="button"> Disapprove </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> <!-- End of Restaurant Tab -->
            <div id="reports" class="tab-pane fade">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>DATE</th>
                                <th>TIME</th>
                                <th>Username</th>
                                <th>Title</th>
                                <th>Review</th>
                            </tr>
                        </thead>
                        <tbody id="items">
                            <tr>
                                <td>date</td>
                                <td>time</td>
                                <td>UserReported</td>
                                <td>Report Title</td>
                                <td>
                                    <a href="#ReportPage" class="btn btn-info" role="button"> Review </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> <!-- End of Reports Tab -->
            <div id="reviews" class="tab-pane fade">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>DATE</th>
                                <th>RestaurantName</th>
                                <th>Title</th>
                                <th>Review</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="items">
                            <tr>
                                <td>date</td>
                                <td>RestaurantReported</td>
                                <td>ReportTitle</td>
                                <td>
                                    <a href="#RestaurantSignUpPage" class="btn btn-info" role="button"> Review </a>
                                </td>
                                <td>
                                    <a href="#Approve" class="btn btn-info" role="button"> Approve </a>
                                    <a href="#Disapprove" class="btn btn-info" role="button"> Disapprove </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> <!-- End of Review Tab -->
            <div id="owners" class="tab-pane fade">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name of Restaurant</th>
                                <th>Registered Date</th>
                                <th>Owner Name</th>
                                <th>Owner ID</th>
                            </tr>
                        </thead>
                        <tbody id="items">
                            <tr>
                                <td>Restaurant_Name</td>
                                <td>date</td>
                                <td>NameOfOwner</td>
                                <td>UserID_Owner</td>
                            </tr>
                        </tbody>
                    </table>
                </div>                    
            </div> <!-- End of Owners Table -->
        </div> <!-- End of Tab Contents -->    

    </div> <!-- End of Container -->

</body>