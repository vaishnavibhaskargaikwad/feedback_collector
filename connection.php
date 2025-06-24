<?php
$conn=mysqli_connect("localhost","root","","feedback");

if(isset($_POST['submit'])) {
  $name=$_POST['name'];
    $email=$_POST['email'];
     $feedback=$_POST['feedback'];
      $query="insert into feedback(Name,Email,Feedback) values(' $name',' $email','$feedback')";
      $ans=mysqli_query($conn,$query);
      if($ans)
      {
        echo"successful";
      }
      else
      {
        echo"error".mysqli_error($conn);
      }



}
?>