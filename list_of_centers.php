<!DOCTYPE html>
<html>
    <head>
        <title>
            Vaccination Center
        </title>
        <link rel="stylesheet" href="cowid.css">
    </head>
    <body style="background-color:whitesmoke ;">
        
        <h1 ><u>Vaccination Centers Available</u></h1>
    <?php
        $con=mysqli_connect("localhost","root","","myDB");
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        else{
            //echo "success";
        }
        $state=$_POST['state'];
        $district=$_POST['district'];
        $country=$_POST['country'];

        

        $sql="select Center_name from Vaccination_Center where District='$district';";
        $result=mysqli_query($con,$sql);
    ?>        
            <ol>
                
                    <?php 
                        while($row = mysqli_fetch_array($result))
                        {
                        echo $row['Center_name'] . " " ;
                        echo "<br />";
                        }
                        mysqli_close($con);
                    ?>
                
            </ol>
    </body>
</html>