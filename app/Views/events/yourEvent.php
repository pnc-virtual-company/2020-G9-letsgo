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
<div class="card mt-4 card-explore" data-toggle="modal" data-target="#exampleModalCenter">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <br>
                        <br>
                        4:00 PM
                    </div>
                    <div class="col-sm-4">
                        <p>BOAR GAME</p>
                        <h2>The Duke is back</h2>
                        <span>4 member going</span>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <div class="text-center">
                            <img src="images/game.jpeg" class="rounded img-explore" alt="Cinque Terre">
                        </div>
                    </div>
                    <div class="col-sm-2">
                    <br><br>
                    <div class="row">
                    <a href="#" class="btn btn-outline-danger btn-sm float-right">Cencel</a>&nbsp;
                    <a href="#" class="btn btn-outline-success btn-sm float-right" data-toggle="modal" data-target="#update">Edit</a>
                    </div>
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
        <!-- Modal body -->
        <div class="modal-body text-right">
          <div class="row">
            <div class="col-sm-8">
              <form action="">
                  <div class="form-group">
                    <select class="form-control" name="category">
                      <option>Event Category</option>
                      <option value="1">Category </option>
                      <option value="2">Category 2</option>
                      <option value="3">Category 3</option>
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
                  <!--  city -->

                  <div class="form-group">
                    <select class="form-control" name="city" id="city">
                      <option disabled selected>Choose Cities</option>
                      <?php foreach($dataJson as $values) :?>
                        <option ><?=  $values['city'].'  ,  '.$values['country'] ?></option>
                      <?php endforeach; ?>
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

<!-- =================================END MODEL CREATE==================================================== -->

<!-- ========================================START Model UPDATE=========================================== -->
	
	<!-- Modal update event-->
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
                  <!-- category -->
                    <select class="form-control" name="category">
                      <option>Event Category</option>
                      <option value="1">Category <b>one</b></option>
                      <option value="2">Category 2</option>
                      <option value="3">Category 3</option>
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
                  
                  <!-- city -->
                  <div class="form-group">
                    <select class="form-control" name="city" id="city">
                      <option disabled selected>Choose Cities</option>
                      <?php foreach($dataJson as $values) :?>
                        <option ><?= $values['city'].'  ,  '.$values['country'] ?></option>
                      <?php endforeach; ?>
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

