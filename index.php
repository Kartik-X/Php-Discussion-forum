<!DOCTYPE html>
<html lang="en">
<head>
    <title>Q&A Project</title>
    <?php  include_once('./client/commonFiles.php');?>
</head>
<body>
<?php  

session_start();

include_once('./client/header.php');

if(isset($_GET['signup']) &&  !isset($_SESSION['user']['username'])){
    include_once('./client/signup.php');
}
elseif (isset($_GET['login'])&& !isset($_SESSION['user']['username'])) {
    include_once('./client/login.php');
}
else if(isset($_GET['ask'])){
    include_once('./client/ask.php');
   
}
else if(isset($_GET['q-id'])){
    $qid=$_GET['q-id'];
    include_once('./client/question-details.php');
   
}
else if(isset($_GET['c-id'])){
    $cid=$_GET['c-id'];
   include_once('./client/questions.php');
}
else if(isset($_GET['u-id'])){
    $uid=$_GET['u-id'];
   include_once('./client/questions.php');
}
else if(isset($_GET['latest'])){
   include_once('./client/questions.php');
}
else if(isset($_GET['search'])){
    $search=$_GET['search'];
    include_once('./client/questions.php');
 }
else{
    include_once('./client/questions.php');
}

?>
    
</body>
</html>