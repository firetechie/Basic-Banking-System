<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic Banking System</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <style type="text/css">
    body {
      background-image: url("1.png");
    }

    .logo-text,
    .nav-link1 {
      color: white;
      padding-top: 15px;
    }

    .list-home {
      padding-left: 850px;
    }

    .nav-link1:hover {
      color: blue;
    }

    .container {
      padding-top: 30px;
      text-align: center;
      /* background-color: #8bb5f5; */
      background-size: cover;
      /* background-image:url("money.jpg"); */

    }

    .button {
      background-color: #d35a55;
      border: none;
      color: white;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      border-radius: 5px;
    }

    .button:hover {
      color: #8bb5f5;
    }
  </style>


</head>

<body>
  <?php
  require 'config.php';
  $query = "SELECT * FROM customers";
  $result = mysqli_query($conn, $query);
  ?>

  <div class="main-container nav-bg-color">
    <div class="inside-container nav-contain">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="index.php"><img src="logo.png" class="img-fluid" alt="" style="width:200px; height:80px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav nav-list ml-auto">
            <a class="menu" href="index.php"><b>HOME</b></a>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <div class="container divStyle"><br><br>
    <h2>Select a customer you wish to transfer funds from.</h2>
    <br>

    <div class="row">
      <div class="col">
        <div class="table-responsive-sm">
          <table class="table roundedCorners tabletext table-sm table-condensed table-bordered table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email Id</th>
                <th scope="col">Current Balance</th>
                <th scope="col"></th>

              </tr>
            </thead>
            <tbody>
              <?php
              while ($rows = mysqli_fetch_array($result)) {
              ?>
                <tr>
                  <td><?php echo $rows['id'] ?></td>
                  <td><?php echo $rows['name'] ?></td>
                  <td><?php echo $rows['email'] ?></td>
                  <td><?php echo $rows['amount'] ?></td>
                  <td><a href="users.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="button">Transfer</button></a></td>
                </tr>
              <?php
              }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  </div>
  <center>
    <footer style="padding-top: 100px;">
      <p>@2021; All Rights Reserved |<a href="https://firetechie.ml" target="_blank"> Vishwa </a></p>
    </footer>
  </center>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>