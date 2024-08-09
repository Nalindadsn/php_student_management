<?php 

$con = mysqli_connect("localhost","root","","loginsystem");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 ?>
<html lang="en">
    <head>
        <title>Manage Users </title>
             <link rel="stylesheet" type="text/css" href="css/style.css">


    </head>
    <body>
    <h1 style="background:#ccc; padding:50px;">GREAN CAMPUS Manage Students 
    </h1>
         <?php include_once('includes/navbar.php');?>
                    <div>
                        <h1>
Search Results</h1>
            <h3>Search Results against keyword '<?php echo $_POST['searchkey'];?>'</h3>
                        <div>
                            <div>
                               Search Result
                            </div>
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                
                                        <th>Full Name</th>
                                  <th>  Name with initials</th>
                                  <th> Email Id</th>
                                  <th>NIC</th>
                                  <th>Contact no.</th>
                                  <th>Reg. Date</th>
                                  <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                  <th>Full Name</th>
                                  <th>  Name with initials</th>
                                  <th> Email Id</th>
                                  <th>NIC</th>
                                  <th>Contact no.</th>
                                  <th>Reg. Date</th>
                                  <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php 
$searchkey=$_POST['searchkey'];
$ret=mysqli_query($con,"select * from users where (fullName like '%$searchkey%' || email like '%$searchkey%' || contactno like '%$searchkey%')");
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                                  <td><?php echo $row['fullName'];?></td>
                                  <td><?php echo $row['nameWithInitials'];?></td>
                                  <td><?php echo $row['nic'];?></td>
                                  <td><?php echo $row['email'];?></td>
                                  <td><?php echo $row['contactno'];?></td>  <td><?php echo $row['posting_date'];?></td>
                                  <td>
                                     
                                     <a href="user-profile.php?uid=<?php echo $row['id'];?>"> 
                          EDIT</a>
                                     <a href="manage-users.php?id=<?php echo $row['id'];?>" onClick="return confirm('Do you really want to delete');">DELETE</a>
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
