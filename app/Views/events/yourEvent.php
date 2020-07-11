<?= $this->include('layouts/navbar') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-6">Your Events</div>
        <div class="col-6" >
            <a href="createEvent" class = "btn btn-warning btn-sm text-white float-right" data-toggle="modal" data-target="#createEvents">
            <i class="material-icons float-left" data-toggle="tooltip" data-placement="left">add</i>&nbsp;Create</a></div>     
    </div>
</div>
<div class="container mt-5">
<div class="card w-100">
  <div class="card-header">
  <div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3">
            <a href="#" class="btn btn-outline-success btn-sm float-right">Edit</a>
            <a href="#" class="btn btn-outline-danger btn-sm cancel">Cancel</a> 
        </div>
    </div>
  </div>
  </div>
</div>
</div>

<!-- The Modal -->
<div class="modal fade" id="createEvents">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-center">Create an event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
		<div class="modal-body text-right">
      <form  action="" method="post">
        <div class="row">
        <div class="col-8">
            <div class="form-group">
                <select class="form-control" name="cars">
                    <option>Event Category</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
            </div>
			<div class="form-group">
				<input type="text" name="title" id="title" class="form-control"  placeholder="Title">
			</div>
      <div class="row">
        <div class="col-6">
			    <div class="form-group">
          <input type="date" name="start" placeholder="Start date" value="" class="form-control">
			    </div>   
        </div>
        <div class="col-6">
			    <div class="form-group">
          <input type="text" placeholder="At" value="" class="form-control">
			    </div>   
        </div>
      </div>
      <div class="row">
        <div class="col-6">
			    <div class="form-group">
          <input type="date" name="start" placeholder="Start date" value="" class="form-control">
			    </div>   
        </div>
        <div class="col-6">
			    <div class="form-group">
          <input type="text" placeholder="At" value="" class="form-control">
			    </div>   
        </div>
      </div>
            <div class="form-group">
                <select class="form-control" name="city">
                    <option>City</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="form-group">
            <textarea class="form-control form-control-sm mb-3" rows="3" placeholder="Small textarea">Description</textarea>
			</div>  
    </div>
    <div class="col-4">
          <img src="images/event.png" class="eventImg" alt="add picture" ><br><br>
            <div>
            <div class="iconEvent">
              <i class="fa fa-plus"></i> &nbsp;
              <i class="fa fa-pencil"></i> &nbsp;
              <i class="fa fa-trash-o"></i>
            </div>
              <a data-dismiss="modal" class="closeModal eventCard">DISCARD</a>
                &nbsp;
              <input type="submit" value="CREATE" class="createBtn eventCard text-warning">
          </div>
       </form>
        </div>
    </div>
      </div>
    </div> 