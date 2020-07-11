
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Explor event<span class="sr-only">(current)</span> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Your event</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Events</a>
          <a class="dropdown-item" href="#">Categories</a>
      </div> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sreyleng
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editProfile">Profile</a>
          <a class="dropdown-item" href="/logout">Logout</a>
      </div>
      


      <!-- The Modal -->
	<div class="modal fade" id="editProfile">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Profile</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
		<div class="modal-body text-right">
      <form  action="" method="post">
        <div class="row">
          <div class="col-8">

				    <div class="form-group">
					    <input type="text" name="fname" id="fname" class="form-control" placeholder="Firstname">
				    </div>

				    <div class="form-group">
					    <input type="text" name="lname" id="lname" class="form-control"  placeholder="Lastname">
				    </div>

				    <div class="form-group">
					    <input type="email" name="email" id="email" class="form-control"  placeholder="Email">
				    </div>

				    <div class="form-group">
					    <input type="password" name="password" id="pass" class="form-control"  placeholder="Password">
				    </div>
            
        </div>
        <div class="col-4">
          <img src="images/user.png" class="imgProfile" alt="add picture" ><br>
            <div class="iconProfile">
              <i class="fa fa-plus"></i> &nbsp;
              <i class="fa fa-pencil"></i> &nbsp;
              <i class="fa fa-trash-o"></i>
            </div>  
            <div class="btnUpdateProfile">

            <a data-dismiss="modal"  class="closeModal event">DISCARD</a>
		 	   
		      <input type="submit"  value="UPDATE" class="updateProfile event text-warning">
            </div> 
        </div> 
        </div>
          </form>
          

       
    
		
      </div>
    </div> 
  </div>
