<?php
    //Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create a connection
    $conn = mysqli_connect($servername,$username,$password);

    //Die if connection was not successful
    if(!$conn) {
        die("Sorry We failed to connect: ". mysqli_connect_error());
    } else {
        echo "Connection was successful";
        echo "<br> <br>";
    }

    //create a db
    /*
    $dbCheckSql = "show databases like 'miniproject'";
    $dbCheck = mysqli_query($conn,$dbCheckSql);
    echo "The database is : ";
    echo var_dump(($dbCheck));
    */
    //create a db
    $sql = "CREATE DATABASE if not exists Miniproject";
    $result = mysqli_query($conn,$sql);

    //check for the database creation successfully
    if($result) {
        echo "The db was created successfully !";
    }
    else {
        echo "The db was not created successfully because of this error ".mysqli_error($conn);
    }
    echo "<br> <br>";


    


     // Retrieve form data
     $prefix = $_POST["prefix"];
     $fname = $_POST["fname"];
     $mname = $_POST["mname"];
     $lname = $_POST["lname"];
     $phone = $_POST["phone"];
     $phone_al = $_POST["phone_al"];
     $email = $_POST["email"];
     $gender = $_POST["gender"];
     $dob = $_POST["bday"];
     $age = $_POST["age"];
     $aadhaar = $_POST["Aadhaar"];
     $ap_name = $_POST["ap_name"];
     $road = $_POST["road"];
     $lane = $_POST["lane"];
     $landmark = $_POST["landmark"];
     $city = $_POST["city"];
     $state = $_POST["state"];
     $pincode = $_POST["pincode"];
     $religion = $_POST["religion"];
     $blood = $_POST["blood"];
     $m_stat = $_POST["m_stat"];
     $category = $_POST["category"];
     $locality = $_POST["locality"];
     $sp_q = $_POST["sp_q"];
     $income = $_POST["income"];
     $nationality = $_POST["nationality"];
     $ffname = $_POST["ffname"];
     $fmname = $_POST["fmname"];
     $flname = $_POST["flname"];
     $mfname = $_POST["mfname"];
     $mmname = $_POST["mmname"];
     $mlname = $_POST["mlname"];
     $roll = $_POST["roll"];
     $pan = $_POST["pan"];
     $lastqual = $_POST["lastqual"];

     echo "<br><br>";
     echo $prefix;
     echo "<br><br>";
     echo $fname;
     echo "<br><br>";
     echo $mname;
     echo "<br><br>";
     echo $lname;
     echo "<br><br>";
     echo $phone;
     echo "<br><br>";
     echo $phone_al;
     echo "<br><br>";
     echo $email;
     echo "<br><br>";
     echo $gender;
     echo "<br><br>";
     echo $dob;
     echo "<br><br>";
     echo $age;
     echo "<br><br>";
     echo $aadhaar;
     echo "<br><br>"; 
     echo $ap_name;
     echo "<br><br>"; 
     echo $road;
     echo "<br><br>";
     echo $lane;
     echo "<br><br>";
     echo $landmark;
     echo "<br><br>";
     echo $city;
     echo "<br><br>";
     echo $state;
     echo "<br><br>";
     echo $pincode;
     echo "<br><br>";
     echo $religion;
     echo "<br><br>";
     echo $blood;
     echo "<br><br>";
     echo $m_stat;
     echo "<br><br>";
     echo $category;
     echo "<br><br>";
     echo $locality;
     echo "<br><br>";
     echo $sp_q;
     echo "<br><br>";
     echo $income;
     echo "<br><br>";
     echo $nationality;
     echo "<br><br>";
     echo $ffname;
     echo "<br><br>";
     echo $fmname;
     echo "<br><br>";
     echo $flname;
     echo "<br><br>";
     echo $mfname;
     echo "<br><br>";
     echo $mmname;
     echo "<br><br>";
     echo $mlname;
     echo "<br><br>";
     echo $roll;
     echo "<br><br>";
     echo $pan;
     echo "<br><br>";
     echo $lastqual;
     echo "<br><br>";





?>