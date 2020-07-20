<?= $this->extend('layouts/main')?>
<?= $this->section('content') ?>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
  <ul class="nav navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="explore">Explor event<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="yourEvents">Your event</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="event">Events</a>
          <a class="dropdown-item" href="category">Categories</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php $username = strstr(session()->get('email'),'@',true) ?>
            <?= $username ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profile">Profile</a>
          <a class="dropdown-item" href="/logout">Logout</a>
      </div>
      </li>
    </ul>
    
  </div>
</nav>
<div class="container">

  <!-- The Modal -->
  <div class="modal fade" id="profile">
    <div class="modal-dialog modal-md">
      <div class="modal-content">    
        <!-- Modal body -->
       <div class="modal-header">
        <h4>Edit profile</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
        <div class="modal-body">
        <form  action="" method="post">
          <div class="row">
            <div class="col-8">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter first name" id="pwd">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter last name" id="pwd">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter email" id="pwd">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter password" id="pwd">
              </div>
            </div>
            <div class="col-4">
              <img src="images/user.png" class="imgProfile" alt="add picture" ><br>
                <div class="iconProfile">
                <i class="material-icons">add</i> &nbsp;
                <i class="material-icons">edit</i> &nbsp;
                <i class="material-icons">delete</i>
                </div>  
                <div class="btnUpdateProfile">

                <a data-dismiss="modal"  class="closeModal event">DISCARD</a>&nbsp;
                <input type="submit"  value="UPDATE" class="updateProfile event text-warning">
            </div> 
        </div> 
          </div>
        </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

