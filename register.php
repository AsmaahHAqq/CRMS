<?php
// Include config file
require_once "db_connection.php";

// Define variables and initialize with empty values
$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email address.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM user WHERE email = ?";
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "t6vY0x7YMmb4aW5c";
        $dbname = "crms";


        $mysqli= new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connection failed: %s\n". $conn -> error);

        if($stmt = $mysqli ->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);

            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();

                if($stmt->num_rows == 1){
                    $email_err = "This email already has an account.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if(empty($email_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO user (email, password) VALUES (?, ?)";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_email, $param_password);

            // Set parameters
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $mysqli->close();
}
?>
<?php
include ('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style2.css">
  </head>
  <body>
    <div class="col-lg-7 px-4 pt-3">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-row">
        <h1 class="font-weight-bold py-3 text-center">Register</h1>
        <h6 class="text-center">Please fill out the form below to create an account.</h6>
      </div>
        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
          <div class="col-lg-7">
            <input type="email" placeholder="Email" name="email" class="form-control" value="<?php echo $email; ?>">
            <span class="help-block"><?php echo $email_err; ?></span>
          </div>
        </div>
        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
          <div class="col-lg-7">
            <input type="password" placeholder="password"name="password" class="form-control" value="<?php echo $password; ?>">
            <span class="help-block"><?php echo $password_err; ?></span>
          </div>
        </div>
        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
          <div class="col-lg-7">
            <input type="password" placeholder="confirm password"name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
            <span class="help-block"><?php echo $confirm_password_err; ?></span>
          </div>
        </div>
        <div class="form-row">
          <div class="col-lg-7">
            <button type="submit"  class="btn1 mt-3 mb-5">Login</button>
          </div>
        </div>
        <div class="form-row">
          <div class="col-lg-7">
            <a href="#"> Forgot Password</a>
            <p>Already have an account?<a href="login.php">Log in here</a></p>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
