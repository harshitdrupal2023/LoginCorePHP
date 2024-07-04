<?php
session_start();
include 'dbconfig.php';

if (isset($_POST["login"])) {
	$uname=$_POST['uname'];
	 $upass=md5($_POST['upass']);
	 $sql="SELECT * FROM `users` WHERE uname='$uname' and upass='$upass'";
	//  echo $sql;
    //  die();
	 $qry=mysqli_query($conn,$sql);
   if (mysqli_num_rows($qry) != 0)
    {$_SESSION['uname']=$uname;
  // $_SESSION["login_time_stamp"] = time(); 
  echo "<script>alert('Login Sucessfully')";
    header("Location:dashboard.php");
      }
      else
      {
      header("Location:index.php");	
      }

}



if(isset($_POST['signup']))
{
$filename = $_FILES["uimg"]["name"];
$tempname = $_FILES["uimg"]["tmp_name"];  
$ex = pathinfo($filename, PATHINFO_EXTENSION);
$fwe = substr($filename, 0, strrpos($filename, "."));
$filename=$fwe.time().".".$ex;
  $uname=$_POST['uname'];
//   echo $uname;
  $upass=md5($_POST['upass']);
  $uemail=$_POST['uemail'];
  $uimg=$_POST['uimg'];
   $folder = ".\\images\\".$filename;
//    echo $folder;
   //die();
  $sql="INSERT INTO users(uname,upass,uemail,uimg) VALUES ('$uname','$upass','$uemail','$filename')";
  // DELETE FROM `users` WHERE uemail='ratan.sigra@gmail.com';
  echo $sql;
  
  $res=mysqli_query($conn,$sql);
if($res==1)
{
  move_uploaded_file($tempname, $folder);
  echo "<script>alert('Your Sucessfully Signup');</script>";
  header("Location:login.php");
}
else
{
  echo "error";
}
}


?>