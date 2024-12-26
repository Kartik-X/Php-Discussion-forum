<div class="container">
    <h1 class="heading">Signup</h1>
    <form action="./server/requests.php" method="post"> 
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="username" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required>
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="email" class="form-label">User Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Enter user email" required>
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">User Password</label>
    <input type="password" name="password"  class="form-control" id="password" placeholder="Enter user password" required>
  </div>
  
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="address" class="form-label">User Address</label>
    <input type="text" name="address"  class="form-control" id="address" placeholder="Enter user Address"required >
  </div>
<div class="col-6 offset-sm-3">
  <button type="submit" name="signup" class="btn btn-primary">SignUp</button>
</div> 
</form>
</div>