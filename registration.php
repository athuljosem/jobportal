<?php include './db_conn.php' ?>
<script src="ajax/inajax.js"></script>
<!--
<a href="studentreg.php">Student</a>
<a href="collegereg.php">College</a>
<a href="companyreg.php">Company</a>
-->
 <form name="searchForm">
    
       <div>
              <label >Type</label>
     <select name="type_qs" onchange="doProcessing()">
         <option>Select...</option>
                    <option>Student</option>
                       <option>College</option>
                       <option>Organization</option>
                </select>
       </div>
     
                           </form>
<div id="tabdiv"></div>
<?php
/*$username=$_POST['username'];
$password=$_POST['password'];
//query=  mysqli_query($cn, "select * from login where username='".$username."' and password='".$password."'");
$type= mysqli_query($cn, "select type from login where username='".$username."' and password='".$password."'");
if ($row = mysqli_fetch_array($type)) {
    
//header ("Location:db_conn.php");
    echo 'Successfully entered :';
if ($row[0] =='admin')
        echo 'Admin';
        elseif ($row[0]=='employee') {
            echo 'Employee';
            
}
elseif ($row[0]=='organisation') {
    echo 'Organization';
    
}
elseif ($row[0]=='college') {
    echo 'College';
}
}
else{
    echo 'Wrong username or Password';
    header ("Location:login.php");
}*/?>