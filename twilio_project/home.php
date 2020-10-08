<?php
session_start();
if(!isset($_SESSION['welcomeID'])){
    header('location:login.php');
}

?>
<html>

<head>
<title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="homestyle.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    <body>
        <a class="float-right logout" href="logout.php">LOGOUT </a>
        <h1>Welcome ID Number: <?php echo $_SESSION['welcomeID']; ?>  </h1>

            <div class="container">
                <div class="tableCont">
                <h3>Contacts</h3>
                    <table>
                        <tr>
                            <th>ID Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone Number</th>
                            <th>Program</th>
                            <th>Action</th>
                        </tr>
                        <?php 

                            $con = mysqli_connect('localhost','root','');

                            mysqli_select_db($con, 'twilio_sms');    

                            $s = "select idNum, firstName, lastName, phoneNum, program from usertable";
                            $result = $con-> query($s);

                            if($result-> num_rows > 0){
                                while($row = $result-> fetch_assoc()){
                                    echo "<tr><td>".$row["idNum"] ."</td><td>".$row["firstName"] ."</td><td>".$row["lastName"]
                                    ."</td><td>".$row["phoneNum"]."</td><td>". $row["program"]."</td><td>"."<button>SMS</button> <button>History</button>" ."</td></tr>";
                                }
                                echo"</table>";
                            }
                            else{
                                echo "0 result";
                            }
                            $con-> close();   
                        ?>
                    </table>
                    
                </div>
            </div>
    </body>

</html>