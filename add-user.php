<?php 

$con = mysqli_connect("localhost","root","","loginsystem");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
  
//Code for Registration 
if(isset($_POST['submit']))
{
    $fullName=$_POST['fullName'];
    $nameWithInitials=$_POST['nameWithInitials'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $indexNo=$_POST['indexNo'];
    $course=$_POST['course'];
    $nic=$_POST['nic'];
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($con,"insert into users(email,contactno,fullName,nameWithInitials,indexNo,course,nic) values('$email','$contact','$fullName','$nameWithInitials','$indexNo','$course','$nic')");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}
}
}
?>
<html lang="en">
    <head>
        
        <title>Between Dates report date selection </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">



    </head>
    <body>
                <h1 style="background:#ccc; padding:50px;">GREAN CAMPUS Manage Students 
                </h1>
                <?php include_once('includes/navbar.php');?>
        
                        <h1>Create Account</h1>
                       
<form method="post" name="signup" >

<div>
    <input id="indexNo" name="indexNo" type="text" placeholder="Enter your index number" required />
    <label for="indexNo">Index No</label>
</div>
<div>
    <input id="nic" name="nic" type="text" placeholder="Enter your nic" required />
    <label for="nic">NIC</label>
</div>


<div>

    <input type="text" id="course" name="course" placeholder="courses">
    <label for="inputFirstName">course</label>
</div>


<div>
<input id="fullName" name="fullName" type="text" placeholder="Enter your full name" required />
<label for="inputFirstName">Full name</label>
</div>

<div>
<input id="nameWithInitials" name="nameWithInitials" type="text" placeholder="Enter your name with Initials" required />
 <label for="inputLastName">Name with initials </label>
</div>



<div class="form-floating mb-3">
<input id="email" name="email" type="email" placeholder="name@gmail.com" required />
<label for="inputEmail">Email address</label>
</div>
 

<div class="form-floating mb-3">
<input id="contact" name="contact" type="text" placeholder="1234567890" required pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required />
<label for="inputcontact">Contact Number</label>
</div>
        


                                            

<div>
<button type="submit" name="submit">Create Account</button>
</div>
                                        </form>



                        </div>


                    </div>
                </main>
     
    </body>
</html>



