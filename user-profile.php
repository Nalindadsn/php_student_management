<?php 

$con = mysqli_connect("localhost","root","","loginsystem");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

    
?>
<html lang="en">
    <head>
        <title>User Profile </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <h1 style="background:#ccc; padding:50px;">GREAN CAMPUS Manage Students 
    </h1>
      
          <?php include_once('includes/navbar.php');?>
                    <div>
                        
<?php 
$userid=$_GET['uid'];
$query=mysqli_query($con,"select *   from users   where users.id='$userid'");
while($result=mysqli_fetch_array($query))
{?>
                        <h1><?php echo $result['nameWithInitials'];?>'s Profile</h1>
                        <div>
                     
                            <div>
                                <a href="edit-profile.php?uid=<?php echo $result['id'];?>">Edit</a>
                                <table class="table table-bordered">
                                   <tr>
                                    <th>Full Name</th>
                                       <td><?php echo $result['fullName'];?></td>
                                   </tr>
                                   <tr>
                                    <th> Name with Initials</th>
                                       <td><?php echo $result['nameWithInitials'];?></td>
                                   </tr>
                                   <tr>
                                    <th>course</th>
                                       <td><?php echo $result['course'];?></td>
                                   </tr>
                                   
                                   <tr>
                                       <th>Email</th>
                                       <td colspan="3"><?php echo $result['email'];?></td>
                                   </tr>
                                     <tr>
                                       <th>Contact No.</th>
                                       <td colspan="3"><?php echo $result['contactno'];?></td>
                                   </tr>
                                     
                                        <tr>
                                       <th>Reg. Date</th>
                                       <td colspan="3"><?php echo $result['posting_date'];?></td>
                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
<?php } ?>

                    </div>

    </body>
</html>
