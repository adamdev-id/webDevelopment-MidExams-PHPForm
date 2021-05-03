<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <!-- Dashboard CSS -->
    <link rel="stylesheet" href="assets/vendor/dashboard/dashboard.css">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/print.min.css">

    <title></title>
  </head>
  <body style="overflow-y:hidden;">
    <?php

      if (isset($_POST['submit'])) {
        // code...
        $customer_name = $_POST["customerName"];
        $nationality = $_POST["nationality"];
        $customer_number = $_POST["customerNumber"];
        $server_class = $_POST["serverClass"];
        $server_type = $_POST["serverType"];
        //$total = $_POST["total"];
        $payment_type = $_POST["paymentType"];
        $rent_duration = $_POST["rentDuration"];

        // Calculate Total
        if ($server_class == "Regular")
        {
          if ($server_type == "R_A1") 
          {
            $total = 15000;
          }
          if ($server_type == "R_A2") 
          {
            $total = 25000;
          }
        }
        else if ($server_class == "Premium")
        {
          if ($server_type == "P_B1") 
          {
            $total = 35000;
          }
          if ($server_type == "P_B2") 
          {
            $total = 45000;
          }
        }
        else if ($server_class == "dedicated_Regular")
        {
          $total = 55000;
        }
        else if ($server_class == "dedicated_Premium")
        {
          $total = 65000;
        }

        // Calculate Rent Duration
        
        if ($rent_duration == "rentDuration_monthly")
        {
          $rent_duration = "1 Month";
        }
        else if ($rent_duration == "rentDuration_quarterly")
        {
          $rent_duration = "3 Months";
          $total = ($total * 3);
          $discount = $total * 0.1;
        }
        else if ($rent_duration == "rentDuration_semiannual")
        {
          $rent_duration = "6 Months";
          $total = ($total * 6);
          $discount = $total * 0.2;
        }
        else if ($rent_duration == "rentDuration_annually")
        {
          $rent_duration = "12 Months";
          $total = ($total * 12);
          $discount = $total * 0.3;
        }

        $total = $total - $discount;
		  //var_dump($_POST);
      }
     ?>
  <div id="print">
    <div class="container">

      <div class="" style="background-image: url('https://cdn.discordapp.com/attachments/228156202138337280/833811592599830588/Banner_Undika_VEE.png');     
          height: 100vh;
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center;
          backdrop-filter: blur(5px);
          line-height: 120%;
          ">

          <!--overflow: hidden;-->

        <br>

        <div class="jumbotron" style="
                                      font-family: roboto;
                                      color: white;
                                      ">
          <center>
              <b>
	                <h4>Adam Hosting Services</h4>
                	<h5></h5>
                	<p>International Hosting Company</p>
            	</b>
          </center>
        </div>
      <div class="form">
        <form method="post" action="#" id="printJS-form">

          <div class="row">

            <div class="col-md-6 offset-md-3">
              <div class="formoutput">
                <?php
                  echo "<br> <br> <br>";

                  echo "<h5> Customer Name   : " . $customer_name . "</h5>" . "<br>";
                  echo "<h5> Customer Number : " . $customer_number . "</h5>" . "<br>";
                  echo "<h5> Nationality     : " . $nationality . "</h5>" . "<br>";
                  echo "<h5> Server Class    : " . $server_class . "</h5>" . "<br>";
                  echo "<h5> Server Type     : " . $server_type . "</h5>" . "<br>";
                  echo "<h5> Rent Duration   : " . $rent_duration . "</h5>" . "<br>";
                  echo "<h5> Payment Type    : " . $payment_type . "</h5>" . "<br>";
                  echo "<h5> Total           : " . "Rp. " . $total . "</h5>" . "<br>";
                  echo "<br> <br> <br>";
                ?>
              </div>
              <br>
            </div>                                                                         
          </div>
        </form>
        <div class="row">
            <div class="col-md-3">
              <button type="button" href="#" onclick="history.go(-1)" class="btn">Go Back</button>                                        
            </div>
            <div class="col-md-6 offset-md-3">
              <button type="button" onclick="printJS('printJS-form', 'html')" class="btn btn-primary">Print Selection <i class="bi bi-save"></i></button>                                        
            </div>
          </div>
    </div>
      </div>                                                                         
    </div>
  </div>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/print.min.js"></script>
    <script src="assets/vendor/dashboard/dashboard.js"></script>
  </body>
</html>
