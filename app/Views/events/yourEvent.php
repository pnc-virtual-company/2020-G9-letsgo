<?= $this->include('layouts/navbar') ?>


<div class="container mt-5">
    <div class="row">
      <div class="col-6">Your Events</div>
      <div class="col-6" >
            <a href="createEvent" class = "btn btn-warning btn-sm text-white float-right" data-toggle="modal" data-target="#createEvents">
            <i class="material-icons float-left" data-toggle="tooltip" data-placement="left">add</i>&nbsp;Create</a></div>   
      </div>
    </div>
</div> 

<div class="container mt-5">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3">
          <a href="#" class="btn btn-outline-success btn-sm float-right" data-toggle="modal" data-target="#update">Edit</a>
          <a href="#" class="btn btn-outline-danger btn-sm cancel">Cancel</a> 
        </div>
      </div>
    </div>
  </div>
</div>

	<!-- The Modal create event-->

	<div class="modal fade" id="createEvents">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create Events</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body create -->
        <div class="modal-body text-right">
          <form action="youreventcontroller/createEvent" method="post">
            <div class="row">
              <div class="col-sm-8">

                <div class="form-group">
                  <select class="form-control" name="categorys" id="categorys">
                  <option disabled selected>Category</option>
                    <?php foreach($categoryData as $values) :?>
                          <option value="<?= $values['id']; ?>"> <?= $values['name']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                
                <div class="form-group">
                    <input type="text" name="title" id="title"  class="form-control"  placeholder="Title">
                </div>

                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                      <input type="date" name="start_date" id="start_date" placeholder="Start date" value="" class="form-control">
                      </div>

                      <div class="form-group">
                      <input type="date" name="end_date" id="end_date" placeholder="Start date" value="" class="form-control">
                      </div>   

                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                      <input type="time" name="start_time" id="start_time"  placeholder="At" value="" class="form-control">
                      </div>

                      <div class="form-group">
                      <input type="time"  name="end_time" id="end_time"  placeholder="At" value="" class="form-control">
                      </div>
                    </div>
                  
                </div>
                	  <!-- insert city -->

                <div class="form-group">
                  <select class="form-control" name="city" id="city">
                    <option disabled selected>Choose Cities</option>
                    <option >Choose Cities</option>
                    <option >Choose Cities</option>

                  </select>
                </div>
                <div class="form-group">
                <textarea class="form-control form-control-sm mb-3" rows="3" name="description" id="description" placeholder="Small textarea">Description</textarea>
                </div>

              </div>
              <div class="col-sm-4">
                <img src="images/event.png" class="eventImg" alt="add picture" ><br><br>
                <i class="material-icons">add</i> &nbsp;
                <i class="material-icons">edit</i> &nbsp;
                <i class="material-icons">delete</i>
              </div>
            </div>
            <br>
            <a data-dismiss="modal" class="closeModal eventCard">DISCARD</a>
              &nbsp;
              <input value="SUBMIT" type="submit" class="btn text-warning btn-link">
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- =================================END MODEL CREATE==================================================== -->

<!-- ========================================START Model UPDATE=========================================== -->
	
	<!-- The Modal -->
	<div class="modal fade" id="update">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update Events</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body text-right">
          <div class="row">
            <div class="col-sm-8">
              <form action="">
                  <div class="form-group">
                    <select class="form-control" name="cars">
                      <option>Event Category</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div class="form-group">
				            <input type="text"  class="form-control"  placeholder="Title">
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="date" name="start" placeholder="Start date" value="" class="form-control">
                      </div>

                      <div class="form-group">
                        <input type="date" name="start" placeholder="Start date" value="" class="form-control">
                      </div>   

                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text"  placeholder="At" value="" class="form-control">
                      </div>

                      <div class="form-group">
                        <input type="text"  placeholder="At" value="" class="form-control">
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <select class="form-control" name="cars">
                      <option>Event Category</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control form-control-sm mb-3" rows="3" placeholder="Small textarea">Description</textarea>
                  </div> 

              </form>
            </div>
            <div class="col-sm-4">
              <img src="images/event.png" class="eventImg" alt="add picture" ><br><br>
                <i class="material-icons">add</i> &nbsp;
                <i class="material-icons">edit</i> &nbsp;
                <i class="material-icons">delete</i>

            </div>
            
          </div>
          <a data-dismiss="modal" class="closeModal eventCard">DISCARD</a>
                &nbsp;
                <button type="submit" class="btn text-warning btn-link">SUBMIT</button>
        </div>
      </div>
    </div>
  </div>
<!-- =================================END MODEL UPDATE=================================================== -->

