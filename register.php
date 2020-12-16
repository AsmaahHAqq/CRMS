<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css\style.css">

    <title>Register</title>
  </head>

  <body >
    <section id="cover"class="Form my-4 mx-1">
      <div class="justify-content-center align-items-center container">
        <div class="row justify-content-center">
          <div class="col-lg-7 px-4 pt-4 justify-content-center">
            <h1 class="font-weight-bold py-3 text-center">Register</h1>
            <h6 class="text-center">Register to create an account.</h6>
            <form class="form-inline justify-content-center " action="insert.php" method="$_POST">
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="text" placeholder="Firstname" class="form-control my-3 p-2" onfocus="this.value=''" value="" required= "required">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="text" placeholder="Lastname" class="form-control my-3 p-2" onfocus="this.value=''" value="" required= "required">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="text" placeholder="Name of Business" class="form-control my-3 p-2" onfocus="this.value=''" value="" required= "required">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="email" placeholder="email" class="form-control my-3 p-2" onfocus="this.value=''" value="" required= "required">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="password" placeholder="password" class="form-control my-3 p-2" onfocus="this.value=''" value="" required= "required">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="confirm password" placeholder="confirm password" class="form-control my-3 p-2" onfocus="this.value=''" value="" required= "required">
                </div>
              </div>
              <div class="form-row ">
                <div class="col-lg-7">
                  <input type="checkbox" class="form-checkbox" onfocus="this.value=''" value="" required= "required"> I accept the <a href="docx\Terms and Conditions.pdf"> Terms of Use</a> &amp <a href="docx\Terms and Conditions.pdf">Privacy Policy</a>
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-7" >
                  <button type="submit" class="btn1 mt-3 mb-5 ">Register</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
