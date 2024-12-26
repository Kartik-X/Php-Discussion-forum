<?php
session_start();

include_once("../common/config.php");

if(isset($_POST['signup'])){

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];


$user=$connection->prepare("INSERT INTO USERS (username,email,password,address) VALUES
                      ('$username','$email','$password','$address')");

$result=$user->execute();

if($result){
    $_SESSION["user"]=["username"=>$username,"email"=>$email,"userid"=>$user->insert_id];
    header("location: /basics/project-q&a");
}
else{
    "Failed to register user";
}
}

else if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];
$username="";
$userid=0;
$query="select * from users  where email='$email'and password='$password'";
$result=$connection->query($query);


    
    if($result->rowCount()==1){

foreach($result as $row){
    $username=$row['username'];
    $userid=$row['id'];
}
echo "$username";

        $_SESSION["user"]=["username"=>$username,"email"=>$email,"userid"=>$userid];
        header("location: /basics/project-q&a");
    }
    else{
        echo "Failed to Login";
    }

}

else if(isset($_GET['logout'])){

session_unset();

header("location: /basics/project-q&a");

}

else if(isset($_POST['ask'])){

$title=$_POST['title'];
$description=$_POST['description'];
$category_id=$_POST['category'];
$user_id=$_SESSION['user']['userid'];


$user=$connection->prepare("INSERT INTO QUESTIONS (title,description,category_id,user_id) VALUES
                      ('$title','$description',$category_id,$user_id)");

$result=$user->execute();

if($result){
    header("location: /basics/project-q&a");
}
else{
    echo "Failed to register a question";
}
}

else if(isset($_POST['answer'])){

    $answer=$_POST['answer'];
    $questionId=$_POST['question_id'];
    $user_id=$_SESSION['user']['userid'];
    
    
    $query=$connection->prepare("INSERT INTO ANSWERS (answer,question_id,user_id) VALUES
                          ('$answer',$questionId,$user_id)");
    
    $result=$query->execute();
    
    if($result){
        header("location: /basics/project-q&a/?q-id=$questionId");
    }
    else{
        echo "Failed to register an answer";
    }
}
else if(isset($_GET['delete'])){
$qid=$_GET["delete"];
$query=$connection->prepare("delete from questions where id=$qid");
$result=$query->execute();

if($result){
    header("location: /basics/project-q&a");
}
else{
    echo "Question not deleted";
}
}
?>