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

    /*   First Table Start   */
    // Check if the table exists
$tableName = "your_table_name";
$sql = "SHOW TABLES LIKE '$tableName'";
$result = mysqli_query($conn, $sql);




if (mysqli_num_rows($result) == 0) {
    // Table does not exist, create it
    $createTableSQL1 = "CREATE TABLE Miniproject.$tableName (
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

    if (mysqli_query($conn, $createTableSQL1)) {
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
    echo "1st Form Data inserted successfully";
} else {
    echo "1st Form Data Error inserting data: " . mysqli_error($conn);
}

/*   First Table End   */

/*   Second Table Start   */

// Retrieve form data
$schoolname10 = $_POST["schoolname10"];
$board10 = $_POST["board10"];
$roll10 = $_POST["roll10"];
$choose10 = $_POST["choose10"];
$c10 = $_POST["c10"];
$file10 = $_FILES["file10"]["name"];

$schoolname12 = $_POST["schoolname12"];
$board12 = $_POST["board12"];
$roll12 = $_POST["roll12"];
$choose12 = $_POST["choose12"];
$c12 = $_POST["c12"];
$file12 = $_FILES["file12"]["name"];

$c_bsc = $_POST["c_bsc"];
$college = $_POST["college"];
$collegeuniv = $_POST["collegeuniv"];
$rollclg = $_POST["rollclg"];
$clgstr = $_POST["clgstr"];
$chooseclg = $_POST["chooseclg"];
$cclg = $_POST["cclg"];
$clgfile = $_FILES["clgfile"]["name"];

$extra = $_POST["extra"];
$detex = $_POST["detex"];
$actfile = $_FILES["actfile"]["name"];


// Check if the table exists
$tableName = "academic_details";
$sql = "SHOW TABLES LIKE '$tableName'";
$result = mysqli_query($conn, $sql);




if (mysqli_num_rows($result) == 0) {
    // Table does not exist, create it
    $createTableSQL = "CREATE TABLE $tableName (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        schoolname10 VARCHAR(255) NOT NULL,
        board10 VARCHAR(255) NOT NULL,
        roll10 INT(11) NOT NULL,
        choose10 VARCHAR(255) NOT NULL,
        c10 INT(11) NOT NULL,
        file10 VARCHAR(255),
        schoolname12 VARCHAR(255) NOT NULL,
        board12 VARCHAR(255) NOT NULL,
        roll12 INT(11) NOT NULL,
        choose12 VARCHAR(255) NOT NULL,
        c12 INT(11) NOT NULL,
        file12 VARCHAR(255),
        c_bsc VARCHAR(3) NOT NULL,
        college VARCHAR(255),
        collegeuniv VARCHAR(255),
        rollclg INT(11) NOT NULL,
        clgstr VARCHAR(255) NOT NULL,
        chooseclg VARCHAR(255) NOT NULL,
        cclg INT(11) NOT NULL,
        clgfile VARCHAR(255),
        extra VARCHAR(3) NOT NULL,
        detex VARCHAR(255),
        actfile VARCHAR(255)
    )";

    if (mysqli_query($conn, $createTableSQL)) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
} else {
    echo "Table already exists";
}

// Prepare the SQL statement
$sql = "INSERT INTO $tableName (
    schoolname10, board10, roll10, choose10, c10, file10,
    schoolname12, board12, roll12, choose12, c12, file12,
    c_bsc, college, collegeuniv, rollclg, clgstr, chooseclg, cclg, clgfile,
    extra, detex, actfile
) VALUES (
    '$schoolname10', '$board10', '$roll10', '$choose10', '$c10', '$file10',
    '$schoolname12', '$board12', '$roll12', '$choose12', '$c12', '$file12',
    '$c_bsc', '$college', '$collegeuniv', '$rollclg', '$clgstr', '$chooseclg', '$cclg', '$clgfile',
    '$extra', '$detex', '$actfile'
)";

// Execute the SQL statement
if (mysqli_query($conn, $sql)) {
    echo "2nd Form Data inserted successfully";
} else {
    echo "2nd Form Error inserting data: " . mysqli_error($conn);
}

/*   Second Table End   */
/*   Third Table Start   */

// Check if the table exists
$tableName = "other_details";
$sql = "SHOW TABLES LIKE '$tableName'";
$result = mysqli_query($conn, $sql);




if (mysqli_num_rows($result) == 0) {
    // Table does not exist, create it
    $createTableSQL = "CREATE TABLE $tableName (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        locguardian VARCHAR(3) NOT NULL,
        gfname VARCHAR(255) NOT NULL,
        gmname VARCHAR(255),
        glname VARCHAR(255) NOT NULL,
        ap_nameloc VARCHAR(255) NOT NULL,
        roadloc VARCHAR(255) NOT NULL,
        laneloc VARCHAR(255) NOT NULL,
        landmarkloc VARCHAR(255),
        cityloc VARCHAR(255) NOT NULL,
        stateloc VARCHAR(255) NOT NULL,
        pincodeloc INT(11) NOT NULL,
        intern VARCHAR(3) NOT NULL,
        interndet VARCHAR(255),
        internfile VARCHAR(255),
        blooddonate VARCHAR(3) NOT NULL,
        desal VARCHAR(3) NOT NULL,
        desaldet VARCHAR(255),
        hostel VARCHAR(3) NOT NULL
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
$locguardian = $_POST["locguardian"];
$gfname = $_POST["gfname"];
$gmname = $_POST["gmname"];
$glname = $_POST["glname"];
$ap_nameloc = $_POST["ap_nameloc"];
$roadloc = $_POST["roadloc"];
$laneloc = $_POST["laneloc"];
$landmarkloc = $_POST["landmarkloc"];
$cityloc = $_POST["cityloc"];
$stateloc = $_POST["stateloc"];
$pincodeloc = $_POST["pincodeloc"];
$intern = $_POST["intern"];
$interndet = $_POST["interndet"];
$internfile = $_FILES["internfile"]["name"];
$blooddonate = $_POST["blooddonate"];
$desal = $_POST["desal"];
$desaldet = $_POST["desaldet"];
$hostel = $_POST["hostel"];

// Prepare the SQL statement
$tableName = "your_table_name";
$sql = "INSERT INTO $tableName (
    locguardian, gfname, gmname, glname, ap_nameloc, roadloc, laneloc, landmarkloc, cityloc, stateloc, pincodeloc,
    intern, interndet, internfile, blooddonate, desal, desaldet, hostel
) VALUES (
    '$locguardian', '$gfname', '$gmname', '$glname', '$ap_nameloc', '$roadloc', '$laneloc', '$landmarkloc', '$cityloc', '$stateloc', '$pincodeloc',
    '$intern', '$interndet', '$internfile', '$blooddonate', '$desal', '$desaldet', '$hostel'
)";

// Execute the SQL statement
if (mysqli_query($conn, $sql)) {
    echo "3rd Form Data inserted successfully";
} else {
    echo "3rd Form Error inserting data: " . mysqli_error($conn);
}

/*   Third Table End   */


?>