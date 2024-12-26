<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="ps-1 pe-5">
       <a class="navbar-brand position-absolute top-0" href="./">
         <img src="./public/logo.jpg"  alt="discuss" class="img-fluid" style="height: 50px; width:60px;">
       </a>
    </div>


    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ps-5 pe-3" style="height: 50px;">
          <a class="nav-link active fw-bold"  href="./">Home</a>
        </li>
        <?php
        if(isset($_SESSION['user']['username'])){
        if($_SESSION['user']['username']){ ?>
               <li class="nav-item ps-5 pe-3">
                  <a class="nav-link fw-bold" href="./server/requests.php?logout=true">Logout (<?php echo ucfirst($_SESSION['user']['username'])?>)</a>
                </li>
                <li class="nav-item ps-5 pe-3">
                  <a class="nav-link fw-bold" href="?u-id=<?php echo $_SESSION['user']['userid']?>">My Questions</a>
                </li>
                <li class="nav-item ps-5 pe-3">
                  <a class="nav-link fw-bold " href="?ask=true">Ask A Question</a>
                </li>

       <?php }}?>

       <?php
       if(!isset($_SESSION['user']['username'])){
         ?>
        <li class="nav-item ps-5 pe-3">
          <a class="nav-link fw-bold" href="?login=true">Login</a>
        </li>
        <li class="nav-item ps-5 pe-3">
          <a class="nav-link fw-bold" href="?signup=true">Sign-Up</a>
        </li>
       <?php }?>
     
     
        <li class="nav-item ps-5 pe-3">
        <a class="nav-link fw-bold" href="?latest=true">Latest Questions</a>
        </li>
      </ul>

    </div>
    <form class="d-flex" action="">
        <input class="form-control me-2" name="search" type="search" placeholder="Search Question">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
</nav>