<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "myDB";
    $adhaar=$_POST['adhaa'];
    
$secret=$_POST['secret_cod'];

    $con = mysqli_connect($server,$username,$password,$database);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $con = mysqli_connect($server,$username,$password,$database);
 $sql = "select name, DOB, vaccination_status,number from patient_records where adhaar=$adhaar and secret_code=$secret;";

 $result=mysqli_query($con,$sql);
 $row = mysqli_fetch_assoc($result);

 $stat=$row['vaccination_status'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CoWin</title>
    <link rel="shortcut icon" href="website-logo.png">
    <link rel="stylesheet" href="certificate_styling.css">
</head>
<body>
    <div class="topnav">
        <nav>
            <label><a href="main.html"><img src="covid19logo.png" alt="" class="logo"></a></label>
        </nav>
    </div>
    <div id="main">
        <p class="reg">Account Details</p>
        <p class="mobile">Registered Mobile Number: <?php echo $row['number']?><p class="blue_mobile"></p></p>
        <div id="info">
            <fieldset>
            <legend class="status" style= "color:black"><?php echo $row['vaccination_status']?></legend>
                <p class="name"><?php echo $row['name'] ?></p>
                <p class="ref_id">REF ID: 5239959756<p class="red">  </p></p>
                <p class="secret_code">Secret Code: <?php $secret ?> <?php echo $secret ?></p>
                <p class="yob">DOB:<?php echo $row['DOB'];  ?></p>
                <p class="photo">Photo ID: <br> <p class="photo_value"> Adhaar Card</p></p>
                <p class="idnum">ID Number: <p class="idnum_value"> <?php echo $adhaar ?> </p></p>
                <p class="vaccine">Vaccine: <p class="v_type"> Covishield </p></p>
                <hr>
                <br>
                
               <p class="fully" style= "color:green"> <?php
                if($stat=="Fully Vaccinated"){
                    echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "Dose-1 \n" ;
                    echo "<br>";
                    
                    echo "\n";
                    echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "RPVV Sec-11 Noida Site-2, 10 Jan 2022, 04:00 PM-5:00 PM"; echo "<br>";
                    // echo"<hr>";
                    echo "<br>";
                    echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "Dose-2 \n" ;
                    echo "<br>";
                    
                  
                    echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "RPVV Sec-11 Noida Site-2, 10 Jan 2022, 04:00 PM-5:00 PM";
                }?></p>


                <p class="fully" style= "color:green"> <?php
                if($stat=="Partially Vaccinated"){
                    echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "Dose-1 \n" ;
                    echo "<br>";
                    
                    echo "\n";
                    echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "RPVV Sec-11 Noida Site-2, 10 Jan 2022, 04:00 PM-5:00 PM"; echo "<br>";
                    // echo"<hr>";
                    
                }?></p>









                
                <p class="partially" style= "color:green"><?php
                if($stat=="Partially_Vaccinated"){
                    echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "Dose-1 \n" ;
                    echo "<br>";
                    
                    echo "\n";
                    echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "RPVV Sec-11 Noida Site-2, 10 Jan 2022, 04:00 PM-5:00 PM"; echo "<br>";
                    
                    echo "<br>";
                }
                ?> </p>
                

                
                <hr>
                <br><br>
            </fieldset>
        </div>
        <a href="book.html"><input type="button" class="member" value="+ Add Member"></a>
    </div>
    <div id="secondary">
        <br>
        <h3><img src="info.png" alt="" class="logo">  Note</h3>
        <br>
        <p>One registration per person is sufficient. Please do not register with multiple mobile numbers or different Photo ID Proofs for same <br> individual.</p> 
        <br>
        <p>Scheduling of Second dose should be done from the same account (same mobile number) from which the first dose has been <br> taken, for generation of final certificate. Separate registration for second dose is not necessary.</p> 
        <br>
        <p>Please carry the registered mobile phone and the requisite documents, including appointment slip, the Photo ID card used for <br> registration, Employment Certificate (HCW/FLW) etc., while visiting the vaccination center, for verification at the time of <br> vaccination.</p> 
        <br>
        <p>Please check for additional eligibility conditions, if any, prescribed by the respective State/UT Government for vaccination at <br> Government Vaccination Centers, for 18-44 age group, and carry the other prescribed documents (e.g. Comorbidity Certificate etc.) <br> as suggested by respective State/UT (on their website).</p> 
        <br>
        <p>The slots availability is displayed in the search (on district, pincode or map) based on the schedule populated by the DIOs (for <br> Government Vaccination Centers) and private hospitals for their vaccination centers.</p> 
        <br>
        <p>The vaccination schedule published by DIOs and private hospitals displays the list of vaccination centers with the following <br> information</p> 
        <ol>
            <br>
            <li>The vaccine type.</li>
            <li>The age group (18-44/45+ etc.).</li> 
            <li>The number of slots available for dose 1 and dose 2.</li>
            <li>Whether the service is Free or Paid (Vaccination is free of cost at all the Government Vaccination Centers).</li>
            <li>Per dose price charged by a private hospital.</li>
        </ol>
        <br>
        <p>If you are seeking 1st dose vaccination, the system will show you only the available slots for dose 1. Similarly, if you are due for <br> 2nd dose, the system will show you the available slots for dose 2 after the minimum period from the date of 1st dose vaccination <br> has elapsed.</p> 
        <br>
        <p>Once a session has been published by the DIO/ private hospital, the session now can not be cancelled. However, the session may <br> be rescheduled. In case you have booked an appointment in any such vaccination session that is rescheduled for any reason, your <br> appointment will also be automatically rescheduled accordingly. You will receive a confirmation SMS in this regard. On such <br> rescheduling, you would still have the option of cancelling or further rescheduling such appointment.</p>
        <br>
    </div>
    <br><br><br><br><br><br>    
    <div class="footer">
        <p> Privacy Policy | Terms of Service Copyright © 2021 COWIN. All Rights Reserved </p>
    </div>
</body>
</html>