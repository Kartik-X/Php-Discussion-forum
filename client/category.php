<select class="form-control" name="category" id="category">

<option value="">Select a Category</option>

<?php
include_once("./common/config.php");
$query="select * from category";
$result=$connection->query($query);

foreach($result as $row){
         $name=$row['name'];
         $id=$row['id'];
       echo  "<option value=$id>$name</option>";


}

?>


</select>

