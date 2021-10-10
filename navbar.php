<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">

                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="https://thesunroseboutique.com/" class="navbar-brand">Sunrose</a>
                    </div>

                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="home.php">Home</a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Help <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="contact us.php">Contact us</a></li>
                                </ul>
                            </li>
                            <li><a href="calendar.php">Calendar</a></li>
                            <li><a href="contacts.php">Contacts</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <form action="" class="navbar-form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" name="search" id="" placeholder="Search Anything Here..." class="form-control">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                      <!-- search functionality
                        <?php
                        //if search value has been posted and if search string is not empty
                        //if(isset($_POST['prod-srch']) && $_POST['prod-srch'] !==''){
                          //capture search value in variable
                          //$$searchval=$_POST['prod-srch'];
                          //search sql statement and query
                          //$searchsql = "SELECT * FROM contacts WHERE name LIKE '%searchval%'";
                          //$searchquery=mysqli_query($dbconn,$searchsql);

                          //IF no results are found
                          //if(mysqli_num_rows($searchquery) == 0){
                            //echo 'No results found';
                          //}// else{
                          //create loop for search results
                        //while($result =mysqli_fetch_arry($searchquery, MYSQLI_ASSOC))}

                        //}
                        ?> -->

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span></a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="register.php">Register</a></li>
                                    <li><a href="logout.php">Log out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
