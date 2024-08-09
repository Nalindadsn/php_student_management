<?php 

$con = mysqli_connect("localhost","root","","loginsystem");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }



if(isset($_GET['id']))
{
$userid=$_GET['id'];
$msg=mysqli_query($con,"delete from users where id='$userid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
   ?>
<html>
    <head>
        <title>GREAN CAMPUS Manage Students </title>
                <link rel="stylesheet" type="text/css" href="css/style.css">


    </head>
    <body>
    <h1 style="background:#ccc; padding:50px;">GREAN CAMPUS Manage Students 
    </h1>
    <img src="img/student.png" alt="st" style="width:200px;float:right;"/>

         <?php include_once('includes/navbar.php');?>
                    <div>
                        
                        <h1 >Manage Students</h1>
                        
            
                        <div>
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                  <th>Full Name</th>
                                  <th>  Name with initials</th>
                                  <th> nic</th>
                                  <th> course</th>
                                  <th> Email Id</th>
                                  <th>Contact no.</th>
                                  <th>Reg. Date</th>
                                  <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                  <th>Full Name</th>
                                  <th>  Name with initials</th>
                                  <th> nic</th>
                                  <th> course</th>
                                  <th> Email Id</th>
                                  <th>Contact no.</th>
                                  <th>Reg. Date</th>
                                  <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                              <?php $ret=mysqli_query($con,"select * from users");
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                                  <td><?php echo $row['nameWithInitials'];?></td>
                                  <td><?php echo $row['fullName'];?></td>
                                  <td><?php echo $row['nic'];?></td>
                                  <td><?php echo $row['course'];?></td>
                                  <td><?php echo $row['email'];?></td>
                                  <td><?php echo $row['contactno'];?></td> 
                                   <td><?php echo $row['posting_date'];?></td>
                                  <td>
                                     
                                     <a href="user-profile.php?uid=<?php echo $row['id'];?>"> 
                          UPDATE</a>
                                     <a href="index.php?id=<?php echo $row['id'];?>" onClick="return confirm('Do you really want to delete');">DELETE</a>
                                  </td>
                              </tr>
                              <?php  }?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    </body>
</html>
