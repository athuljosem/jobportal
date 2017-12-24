<?php include './db_conn.php' ?>

<?php
$username=$_POST['username'];
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
            header ("Location:studenthome.php");
            
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
}?>
<?//php include './header.php'; ?>
<?//php include './footer.php'; ?>
