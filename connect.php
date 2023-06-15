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

    $dbname = "Miniproject";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Check if the table exists
$tableName = "your_table_name";
$sql = "SHOW TABLES LIKE '$tableName'";
$result = mysqli_query($conn, $sql);




if (mysqli_num_rows($result) == 0) {
    // Table does not exist, create it
    $createTableSQL = "CREATE TABLE Miniproject.$tableName (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        prefix VARCHAR(10),
        fname VARCHAR(50),
        mname VARCHAR(50),
        lname VARCHAR(50),
        phone VARCHAR(15),
        phone_al VARCHAR(15),
        email VARCHAR(50),
        gender VARCHAR(10),
        dob DATE,
        age INT(3),
        aadhaar VARCHAR(20),
        ap_name VARCHAR(50),
        road VARCHAR(50),
        lane VARCHAR(50),
        landmark VARCHAR(50),
        city VARCHAR(50),
        state VARCHAR(50),
        pincode VARCHAR(10),
        religion VARCHAR(20),
        blood VARCHAR(10),
        m_stat VARCHAR(20),
        category VARCHAR(20),
        locality VARCHAR(50),
        sp_q VARCHAR(50),
        income FLOAT,
        nationality VARCHAR(50),
        ffname VARCHAR(50),
        fmname VARCHAR(50),
        flname VARCHAR(50),
        mfname VARCHAR(50),
        mmname VARCHAR(50),
        mlname VARCHAR(50),
        roll VARCHAR(20),
        pan VARCHAR(20),
        lastqual VARCHAR(50)
    )";

    if (mysqli_query($conn, $createTableSQL)) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
} else {
    echo "Table already exists";
}


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

     /*
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
    */

    // Prepare the SQL statement
$tableName = "your_table_name";
$sql = "INSERT INTO $tableName (
    prefix, fname, mname, lname, phone, phone_al, email, gender, dob, age, aadhaar, ap_name, road, lane, landmark,
    city, state, pincode, religion, blood, m_stat, category, locality, sp_q, income, nationality,
    ffname, fmname, flname, mfname, mmname, mlname, roll, pan, lastqual
) VALUES (
    '$prefix', '$fname', '$mname', '$lname', '$phone', '$phone_al', '$email', '$gender', '$dob', '$age', '$aadhaar',
    '$ap_name', '$road', '$lane', '$landmark', '$city', '$state', '$pincode', '$religion', '$blood', '$m_stat',
    '$category', '$locality', '$sp_q', '$income', '$nationality', '$ffname', '$fmname', '$flname', '$mfname',
    '$mmname', '$mlname', '$roll', '$pan', '$lastqual'
)";

// Execute the SQL statement
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}




?>