<?php 

$con = mysqli_connect("localhost","root","","loginsystem");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

//Code for Updation 
if(isset($_POST['update']))
{
    $course=$_POST['course'];
    $nic=$_POST['nic'];
    $fullName=$_POST['fullName'];
    $nameWithInitials=$_POST['nameWithInitials'];
    $contact=$_POST['contact'];
$userid=$_GET['uid'];
    $msg=mysqli_query($con,"update users set nic='$nic',contactno='$contact',fullName='$fullName',nameWithInitials='$nameWithInitials',course='$course' where id='$userid'");

if($msg)
{
    echo "<script>alert('Profile updated successfully');</script>";
       echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}
}


    
?>
<html lang="en">
    <head>
        <title>Edit Profile </title>
              <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>
    <h1 style="background:#ccc; padding:50px;">GREAN CAMPUS Manage Students 
    </h1>
          <?php include_once('includes/navbar.php');?>
                        
<?php 
$userid=$_GET['uid'];
$query=mysqli_query($con,"select * from users where users.id='$userid'");



while($result=mysqli_fetch_array($query))
{?>
                        <h1><?php echo $result['nameWithInitials'];?>'s Profile</h1>
                     <form method="post">
                            <div>
                                <table>
                                   <tr>
                                    <th>Full Name</th>
                                       <td><input id="fullName" name="fullName" type="text" value="<?php echo $result['fullName'];?>" required /></td>
                                   </tr>
                                   <tr>
                                    <th>Name with Initials</th>
                                       <td><input id="nameWithInitials" name="nameWithInitials" type="text" value="<?php echo $result['nameWithInitials'];?>" required /></td>
                                   </tr>
                                   <tr>
                                    <th>NIC</th>
                                       <td><input id="nic" name="nic" type="text" value="<?php echo $result['nic'];?>" required /></td>
                                   </tr>
                                   <tr>
                                    <th>course</th>
                                       <td>

<input id="course" name="course" type="text" value="<?php echo $result['course'];?>" >



                                      </td>
                                   </tr>
                                 
                                         <tr>
                                       <th>Contact No.</th>
                                       <td colspan="3"><input id="contact" name="contact" type="text" value="<?php echo $result['contactno'];?>"  pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required /></td>
                                   </tr>
                                   <tr>
                                       <th>Email</th>
                                       <td colspan="3"><?php echo $result['email'];?></td>
                                   </tr>
                               
                                     
                                        <tr>
                                       <th>Reg. Date</th>
                                       <td colspan="3"><?php echo $result['posting_date'];?></td>
                                   </tr>
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit"  name="update">Update</button></td>

                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
<?php } ?>

      
    </body>
</html>
