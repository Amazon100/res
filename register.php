<body>  

  <?php

    $fullname = $email = $gender = $comment = $age = "";

    if ($_“LSERVER["REQUEST_METHOD"] == "POST") { 

      $name = test_input($_POST["name"]);

      $email = test_input($_POST["email"]);

      $dateofbirth = test_input($_POST["age"]);

      $gender = test_input($_POST["gender"]);

      $country = test_input($_POST["country"]);

      $comment = test_input($_POST["comment"]);

      

    }
    

    function test_input($data) {

      $data = trim($data);

      $data = stripslashes($data);

      $data = htmlspecialchars($data);

      return $data;

    }

  ?>