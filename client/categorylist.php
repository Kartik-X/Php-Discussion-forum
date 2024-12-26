     
     <div>
       <h3 class="heading">Categories</h3>

       <?php
       include_once("./common/config.php");
       
       $query="select * from category";
$result=$connection->query($query);

foreach ($result as $row) {
    $name = $row['name'];
    $id=$row['id'];
    echo "<div class='row question-list'>
    <h5><a href='?c-id=$id'>$name</a></h5>
    </div>";
}
       
       ?>
     </div>