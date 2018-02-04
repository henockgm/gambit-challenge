<?php
$myfile = fopen("input.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file

 $registers = [];

$i=0;
while(!feof($myfile)) {  
    $registers[$i] = fgets($myfile);
    $i++;
}
fclose($myfile);

?>

<!doctype html>
  <html lang="en-US">
  <head> 
  <title>Registers</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>
<body>

 <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"> TUF-2000M Registers</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                  <li> <a type="button" class="topnav-item" href="index.php" > <span class="glyphicon glyphicon-th"></span> View 1</a> </li>
                  <li> <a type="button" class="topnav-item" href="view2.php" > <span class="glyphicon glyphicon-th-list"></span> View 2</a> </li>
                    <li> <a type="button" class="topnav-item" onclick="location.reload()" > <span class="glyphicon glyphicon-refresh"></span> Reload </a> </li>


                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
       <p class="register-time"> 
          <?php
            $date_registered = $registers[0];
            echo 'Time of registery: ' . $date_registered;
          ?>       
        </p>

      <table role="presentation" class="table table-striped">

         <thead>
            <th>Register id</th>
            <th>Register Value</th>
        </thead>

        <tbody class="files">
        <?php
            
          // shifts the first value of the array off and returns it. 
          array_shift($registers);

          foreach ($registers as $register) {
  	       $reg_parts = explode(':', $register);
  	   ?>
           <tr class="fade in">
              <td> <li class="item-link"> <a class="reg-item text-animate"> <?php echo $reg_parts[0] ?> </a> </li>
              </td>
              <td> <li class="item-link"> <a class="reg-item text-animate"> <?php echo $reg_parts[1] ?> </a> </li>
              </td>
          </tr>
        <?php } ?>

        </tbody>
      </table>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootbox.min.js"></script> 

  <footer> 
  <div class="container">
    <button class="btn btn-lg btn-warning">Gambit challenge</button>
    <div>
    <h3>Option 2: Web or native app</h3>

    <p> A graphical solution, create an app that retrieves and parses the data and presents it as is. The key point is to make use of data available in a backend, and present it in a mobile friendly way. </p>

<p class="author"> By: Henock Mullissa </p>
  </div>
</div><!-- container footer -->
</footer>
</body>
</html>