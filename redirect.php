<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$qualification = $_POST['qualification'];
if($name !=''&& $gender !=''&& $dob !='' $email !=''&& $contact !=''&& $address !=''&& $qualification !='')
{
header("Location:https://www.formget.com/app/");
}
else{
    ?><span><?php echo "Please fill all fields";?></span> <?php
    }
    }
    ?>