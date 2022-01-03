<!DOCTYPE html>
<html lang="en">
<head>
    <title>CoWin</title>
    <link rel="shortcut icon" href="website-logo.png">
    <link rel="stylesheet" href="success_style.css">
</head>
<body>

    <?php  
$name=$_POST['name'];
$adhaar=$_POST['adhaa'];
$vaccine=$_POST['vaccine'];
$gender=$_POST['gender'];
$DOB=$_POST['DOB'];
$conn=mysqli_connect("localhost","root","","myDB");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO registrations(adhaar,name,Gender,Vaccine,DOB) values ('$adhaar', '$name','$gender','$vaccine','$DOB');";

if (!mysqli_query($conn,$sql)) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 


?>
    <div class="topnav">
        <nav>
            <label><a href="main.html"><img src="covid19logo.png" alt="" class="logo"></a></label>
        </nav>
    </div>
    <div id="main">
        <img src="green_tick.png" alt="" class="green_tick"><br>
        <p class="reg">Appointment Successful</p>
        <p class="info">Your vaccination appointment is confrimed.</p><br>
        <p class="center">Center</p>
        <p class="center_name">RPVV Sec-11 Noida 201309</p>
        <p class="date">Date: <p class="date_value"> 12 Jan 2022 </p></p>
        <p class="photo">Time: <p class="photo_value"> 9:00AM-6:00PM</p></p>
        <p class="idnum">Preference: <p class="idnum_value"> 11:00AM-1:00PM </p></p>
        <br><table>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Reference ID</th>
              <th>Photo Id To Carry</th>
            </tr>
            <tr>
              <td>1</td>
              <td><?php echo $name ?></td>
              <td>5239959756<b> 8700</b></td>
              <td>Adhaar Card</td>
            </tr>
        </table><br>
        <p class="instructions">Instructions</p><br>
        <ol>
            <li>Please carry the Photo Id card mentioned in your appointment details for vaccination.</li>
            <li>If you have any comorbidites, please carry a medical certificate with you for the <br> vaccination appointment.</li>
            <li>For more information, call CoWin helpline number 1075</li>
        </ol>
        <a href="main.html"><input type="submit" class="register" value="Close"></a><br><br>  
    </div><br><br><br><br><br><br>    
    <div class="footer">
        <p> Privacy Policy | Terms of Service Copyright © 2021 COWIN. All Rights Reserved </p>
    </div>
</body>
</html>