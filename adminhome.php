<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php include './db_conn.php' ?>

<h3>Admin Home Page</h3>
Admin can view/update/add/delete the Colleges,Users,Organization,Posted Jobs etc
<h3>College Details</h3>
<table border="1">
    <tr>
        
<td><b>ID</b></td>				
<td><b>Name</b></td>
<td><b>Username</b></td>
<td><b>Password</b></td>
<td><b>Phone</b></td>
<td><b>E-Mail</b></td>
<td><b>Website</b></td>
<td><b>Pin-Code</b></td>
<td><b>Place</b></td>
<td><b>District</b></td>
<td><b>State</b></td>
<td><b>Country</b></td>
<td><b>Update</b></td>
<td><b>Delete</b></td>
    </tr>
<?php
$type= mysqli_query($cn, "select * from college");
while($row = mysqli_fetch_array($type)) 
{
?>
    <tr>
<td><?php echo $row[0]." ";?></td>				
<td><?php echo $row[1]." ";?></td>
<td><?php echo $row[2]." ";?></td>
<td><?php echo $row[3]." ";?></td>
<td><?php echo $row[4]." ";?></td>
<td><?php echo $row[5]." ";?></td>
<td><?php echo $row[6]." ";?></td>
<td><?php echo $row[7]." ";?></td>
<td><?php echo $row[8]." ";?></td>
<td><?php echo $row[9]." ";?></td>
<td><?php echo $row[10]." ";?></td>
<td><?php echo $row[11]." ";?></td>
<td><a href="update.php?id=<?php echo $row[0]?>">UPDATE  </a></td>
<td><a href="delete.php?id=<?php echo $row[0]?>">DELETE</a></td>
</tr>    
<?php
}
?>
</table>


<h3>User Details</h3>
<table border="1">
    <tr>
        
<td><b>ID</b></td>				
<td><b>Username</b></td>
<td><b>Password</b></td>
<td><b>First Name</b></td>
<td><b>Last Name</b></td>
<td><b>Sex</b></td>
<td><b>E-Mail</b></td>
<td><b>Phone</b></td>
<td><b>Date Of Birth</b></td>
<td><b>Address</b></td>
<td><b>Pin-Code</b></td>
<td><b>District</b></td>
<td><b>State</b></td>
<td><b>Country</b></td>
<td><b>CourseId</b></td>
<td><b>Passout</b></td>
<td><b>College</b></td>
<td><b>Enroll Date</b></td>
<td><b>Update</b></td>
<td><b>Delete</b></td>


    </tr>
<?php
$type= mysqli_query($cn, "select * from student");
while($row = mysqli_fetch_array($type)) 
{
?>
    <tr>
<td><?php echo $row[0]." ";?></td>				
<td><?php echo $row[1]." ";?></td>
<td><?php echo $row[2]." ";?></td>
<td><?php echo $row[3]." ";?></td>
<td><?php echo $row[4]." ";?></td>
<td><?php echo $row[5]." ";?></td>
<td><?php echo $row[6]." ";?></td>
<td><?php echo $row[7]." ";?></td>
<td><?php echo $row[8]." ";?></td>
<td><?php echo $row[9]." ";?></td>
<td><?php echo $row[10]." ";?></td>
<td><?php echo $row[11]." ";?></td>
<td><?php echo $row[12]." ";?></td>
<td><?php echo $row[13]." ";?></td>
<td><?php echo $row[14]." ";?></td>
<td><?php echo $row[15]." ";?></td>
<td><?php echo $row[16]." ";?></td>
<td><?php echo $row[17]." ";?></td>
<td><a href="update.php?id=<?php echo $row[0]?>">UPDATE  </a></td>
<td><a href="delete.php?id=<?php echo $row[0]?>">DELETE</a></td>
</tr>    
<?php
}
?>
</table>

<h3>Organization Details</h3>
<table border="1">
    <tr>
        
<td><b>ID</b></td>				
<td><b>Name</b></td>
<td><b>Username</b></td>
<td><b>Password</b></td>
<td><b>Phone</b></td>
<td><b>E-Mail</b></td>
<td><b>Website</b></td>
<td><b>Pin-Code</b></td>
<td><b>Place</b></td>
<td><b>District</b></td>
<td><b>State</b></td>
<td><b>Country</b></td>
<td><b>Update</b></td>
<td><b>Delete</b></td>


    </tr>
<?php
$type= mysqli_query($cn, "select * from organization");
while($row = mysqli_fetch_array($type)) 
{
?>
    <tr>
<td><?php echo $row[0]." ";?></td>				
<td><?php echo $row[1]." ";?></td>
<td><?php echo $row[2]." ";?></td>
<td><?php echo $row[3]." ";?></td>
<td><?php echo $row[4]." ";?></td>
<td><?php echo $row[5]." ";?></td>
<td><?php echo $row[6]." ";?></td>
<td><?php echo $row[7]." ";?></td>
<td><?php echo $row[8]." ";?></td>
<td><?php echo $row[9]." ";?></td>
<td><?php echo $row[10]." ";?></td>
<td><?php echo $row[11]." ";?></td>
<td><a href="update.php?id=<?php echo $row[0]?>">UPDATE  </a></td>
<td><a href="delete.php?id=<?php echo $row[0]?>">DELETE</a></td>
</tr>    
<?php
}
?>
</table>