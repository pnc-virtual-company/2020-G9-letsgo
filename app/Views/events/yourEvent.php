
<?= $this->include('layouts/navbar') ?>

<div class="container mt-5">
    <div class="row">
      <div class="col-sm-6"><h3>Your Events</h3></div>
      <div class="col-sm-6" >
            <a href="createEvent" class = "btn btn-warning btn-sm text-white float-right" data-toggle="modal" data-target="#createEvents">
            <i class="material-icons float-left" data-toggle="tooltip" data-placement="left">add</i>&nbsp;Create</a></div>   
      </div>
    </div>
</div> 

<div class="container mt-5">

  <?php 


    $arrayEvent = array ();
    $arrayEvent = $eventData;

    function date_compare($dateTimeOne, $dateTimeTwo)
    {

        $timeOne = strtotime($dateTimeOne['start_time']);
        $timeTwo = strtotime($dateTimeTwo['start_time']);

        $dateOne = strtotime($dateTimeOne['start_date']);
        $dateTwo = strtotime($dateTimeTwo['start_date']);

        if($dateOne > $dateTwo || $timeOne > $timeTwo){
          return true;
        }
    }    
    usort($arrayEvent,'date_compare');
    foreach($arrayEvent as $values) :

  ?>
  <?php if( $getUser['id'] == $values['user_id'] ):  ?>
  <h5>
    <?php $date = new DateTime($values['start_date']);?>
      <?= date_format($date, 'l/d/F/Y'); ?>
  </h5>

      <div class="card card-explore" data-toggle="modal" data-target="#exampleModalCenter">
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-sm-3">
                        <br>
                        <br>
                        <?php $date = new DateTime($values['start_time']);?>
                        <?= date_format($date, 'g:i A'); ?>
                    </div>
                    <div class="col-sm-4">

                        <p><?= $values['name']; ?></p>
                        <h2><?= $values['title']; ?></h2>

                        <!-- get start date push in new array -->
                        <?php  
                            $arrayMember = array();
                            foreach($joinData as $joinEvent) :
                                if($joinEvent['event_id'] == $values['event_id']) : 
                                    $arrayMember[$joinEvent['user_id']] = $joinEvent;
                        ?>
                            
                        <?php 
                                endif; 
                            endforeach;
                        ?>
                        <!-- end loop -->
                        
                            <!-- count user -->
                            <?php if(count($arrayMember) > 1)  :?>
                                <p>
                                    <strong><?= count($arrayMember); ?></strong>
                                    Members going
                                </p>
                            <?php endif; ?>
                            
                            <?php if(count($arrayMember) == 1) :?>
                                <p>
                                    <strong><?= count($arrayMember); ?></strong>
                                    Member going
                                </p>
                            <?php endif; ?>
                            <?php if(count($arrayMember) == 0) :?>
                                <p>
                                    <strong><?= count($arrayMember); ?></strong>
                                    Member going
                                </p>
                            <?php endif; ?>
                            <!-- end count -->

                    </div>
                    <div class="col-sm-3" data-toggle="modal" data-target="#exampleModalCenter">
                        <br>
                        <div class="text-center" >
                            <img src="images/event_image/<?= $values['image']; ?>" class="rounded img-explore" alt="" >
                        </div>
                    </div>
                    <div class="col-sm-2">
                    <br><br>
                    <div class="row">
                    <a href="deleteYourEvent/<?= $values['event_id'] ?>" data-target="#cancelYourEvent<?= $values['event_id']?>" class="btn btn-outline-danger btn-sm float-right" data-toggle="modal">Cencel</a>&nbsp;
                    
                    <a href="" class=" btn btn-outline-success btn-sm float-right editEvent" 
                      data-toggle = "modal" 
                      data-target = "#updateYourEvent"
                      data-event_id = " <?= $values['event_id'] ?>"
                      data-title = "<?= $values['title'] ?>"
                      data-city = "<?= $values['city'] ?>"
                      data-category = "<?= $values['name']; ?>"
                      data-cat_id = "<?= $values['cat_id']; ?>"
                      data-description = "<?= $values['description'] ?>"
                      data-start_date = "<?= $values['start_date'] ?>"
                      data-end_date = "<?= $values['end_date'] ?>"
                      data-start_time = "<?= $values['start_time'] ?>"
                      data-end_time = "<?= $values['end_time'] ?>"
                      data-image = "<?= $values['image'] ?>"
                    >Edit</a>
                    
                    </div>
                    </div>
                </div>
            </div>
        </div>

  <?php endif; ?>
<!-- Modal delete your events -->
        <div class="modal mt-5" id="cancelYourEvent<?= $values['event_id'] ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Remove YourEvent</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                      <p>Are you sure want to remove yourEvent?</p>
                        <form action="deleteYourEvent/<?= $values['event_id'] ?>" method="post">
                            <br>
                            <div class="float-right">
                                <a href="" class="text-uppercase text-dark">DISCARD</a>
                                <button type="submit" class="btn text-warning btn-link">REMOVE</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
<!-- End modal -->



<?php endforeach;?>
</div>


<!-- =================================START CREATE YOUR EVENT=================================================== -->

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
          <form action="<?= base_url("createEvent")?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-8">
               <input type="text" class="hide" name="user_id" value="<?= $getUser['id']; ?>">
                <div class="form-group">
                  <select class="form-control" name="categorys" id="categorys" required>
                  <option disabled selected>Category</option>
                  <?php foreach($categoryData as $values) :?>
                    <option value="<?= $values['category_id']; ?>"> <?= $values['name']; ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
                
                <div class="form-group">
                    <input type="text" name="title" id="title"  class="form-control"  placeholder="Title" required>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="start_date" class="label">Start-date</label>
                      <input type="date" name="start_date" id="start_date" placeholder="Start date" value="" class="form-control" required>
                      </div>  

                      <div class="form-group">
                      <label for="start_date" class="label">End-date</label>
                      <input type="date" name="end_date" id="end_date" placeholder="Start date" value="" class="form-control" required onchange="dateDiff();">
                      </div>   

                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="start_date" class="label">Start-time</label>
                      <input type="time" name="start_time" id="start_time"  placeholder="At" value="" class="form-control" required onchange="dateDiff();">
                      </div>

                      <div class="form-group">
                      <label for="start_date" class="label">End-time</label>
                      <input type="time"  name="end_time" id="end_time"  placeholder="At" value="" class="form-control" required onchange="dateDiff();">
                      </div>
                    </div>
                  
                </div>
                	  <!-- insert city -->
                <div class="form-group">
                  <select class="form-control" name="city" id="city" required>
                    <option disabled selected>Choose Cities</option>
                    <?php foreach($dataJson as $values) :?>
                        <option ><?=  $values['city'].'  ,  '.$values['country'] ?></option>
                    <?php endforeach; ?>

                  </select>
                </div>

                <div class="form-group">
                <textarea class="form-control form-control-sm mb-3" rows="3" name="description" id="description" placeholder="Description" minlength = "50" required></textarea>
                </div>

              </div>
              
              <div class="col-sm-4">
                <img src="" class="eventImg rounded" alt="add picture" id = "set-image"  width="100" height="100"><br><br>
                <div class="image-upload text-center">
                  <label for="file-input-create">
                    <i class="material-icons m-2 text-primary" style="cursor:pointer;">add</i>
                  </label>
                  <input id="file-input-create" type="file" name="file_image" >
                  <a href="#"><i class="material-icons m-2 text-danger" id="set-remove" style="cursor:pointer;">delete</i></a>
                </div>

              </div>

            </div>
            <div class="form-group">
              <p style="display:flex;justify-content:flex-start"><p id="duration" name="duration"
                  style="border: none; background-color: white;"></p>
              <p id="danger"  class="text-left"></p>
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


<!-- =================================END CREATE YOUR EVENT==================================================== -->

<!-- ========================================START Model UPDATE=========================================== -->
	
	<!-- Modal update event-->
  <div class="modal fade" id="updateYourEvent">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update YourEvents</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body create -->
        <div class="modal-body text-right">
          <form action="<?= base_url("/updateYourEvent")?>" id="form-edit-event" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-8">
              <input type="hidden" name="event_id" id="event_id"  class="form-control">
                <div class="form-group">
                  <select class="form-control" name="category" id="event_category" required>
                  </select>

                </div>
                
                <div class="form-group">
                    <input type="text" name="title" id="event_title"   class="form-control"  placeholder="Title" required>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="start_date" class="label">Start-date</label>
                      <input type="date" name="start_date" id="event_start_date" placeholder="Start date" class="form-control" required>
                      </div>

                      <div class="form-group">
                      <label for="start_date" class="label">End-date</label>
                      <input type="date" name="end_date" id="event_end_date" placeholder="Start date"  class="form-control" required onchange="dateDiffUpdate();">
                      </div>   

                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="start_date" class="label">Start-time</label>
                      <input type="time" name="start_time" id="event_start_time"  placeholder="At"  class="form-control" required onchange="dateDiffUpdate();">
                      </div>

                      <div class="form-group">
                      <label for="start_date" class="label">End-time</label>
                      <input type="time"  name="end_time" id="event_end_time"  placeholder="At"  class="form-control" required onchange="dateDiffUpdate();">
                      </div>
                    </div>
                
                </div>
                	  <!-- insert city -->

                <div class="form-group">
                  <select class="form-control" name="city" id="event_city" required>
                    <?php foreach($dataJson as $values) :?>
                        <option ><?=  $values['city'].'  ,  '.$values['country'] ?></option>
                    <?php endforeach; ?>

                  </select>
                </div>
                <div class="form-group">
                <textarea class="form-control form-control-sm mb-3" rows="3" name="description" id="event_description" minlength = "50" placeholder="Description" required></textarea>
                </div>

              </div>
              <div class="col-sm-4">
                <img src="" id="edit-image" class = "eventImg rounded" alt="add picture"   width="100" height="100"><br><br>
                <div class="image-upload text-center">
                  <label for="file-input2">
                    <i class="material-icons m-2 text-dark" style="cursor:pointer;">add</i>
                  </label>
                  <input id="file-input2" type="file" name="file_image">
                  <a href="#"><i class="material-icons m-2 text-danger" id="remove" style="cursor:pointer;">delete</i></a>
                </div>
              </div>

            </div>
            <div class="form-group">
              <p style="display:flex;justify-content:flex-start"><p id="durations" name="durations"
                  style="border: none; background-color: white;"></p>
              <p id="dangers"  class="text-left"></p>
            </div>
            <br>
            <a data-dismiss="modal" class="closeModal eventCard">DISCARD</a>
              &nbsp;
              <input value="UPDATE" type="submit" class="btn text-warning btn-link">
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- =================================END MODEL UPDATE=================================================== -->

<!-- edit your event -->
<script type="text/javascript">
    $(document).on('click','.editEvent', function(e) {
    e.preventDefault();
    // get data form <a href=""></a>
    var event_id = $(this).data('event_id');
    var title = $(this).data('title');
    var city = $(this).data('city');
    var description = $(this).data('description');
    var cat_id = $(this).data('cat_id');
    var start_date = $(this).data('start_date');
    var end_date = $(this).data('start_date');
    var start_time = $(this).data('start_time');
    var end_time = $(this).data('end_time');
    var image = $(this).data('image');
    var categories = <?= json_encode($categoryData, JSON_PRETTY_PRINT) ?>;
    var option;

    // loop categorys
    categories.forEach(category => {
      if(cat_id == category['category_id']){
        option += `<option value = '${category['category_id']}' selected>${category['name']}</option>`;
      }else {
        option += `<option value = '${category['category_id']}'>${category['name']}</option>`;
      }
    });

    // give data into input form
    $('#event_category').html(option);
    $('#event_id').val(event_id);
    $('#event_title').val(title);
    $('#event_description').val(description);
    $('#event_start_date').val(start_date);
    $('#event_end_date').val(end_date);
    $('#event_start_time').val(start_time);
    $('#event_end_time').val(end_time);
    $('#event_city').val(city);
    $('#edit-image').attr("src", "/images/event_image" + "/" + image)

});

function dateDiff() { 
  var startDate = document.getElementById('start_date').value;
  var endDate = document.getElementById('end_date').value;
  var startPeriod = document.getElementById('start_time').value;
  var endPeriod = document.getElementById('end_time').value;
  
  var dateToStart = new Date(startDate);
  var dateToEnd = new Date(endDate);
  var getDateTime = dateToEnd.getTime() - dateToStart.getTime();
  var days = getDateTime/(1000  * 60  * 60 * 24);
  var period = 0;
if(startPeriod == 1) {
  if(endPeriod == 1){
    period = 0.5;
  }else{
    period = 1;
  }  
}else {
  if(endPeriod == 1){  
    period = 0;
  }else{
    period = 0.5;
  }
}
if(startDate > endDate){
  $('#danger').html('<div class="alert alert-danger"><strong>Error! </strong>End date cannot be before start date.</div>');
}else if(startDate == endDate && startPeriod == 2 && endPeriod == 1){
  $('#danger').html('<div class="alert alert-danger"><strong>Error! </strong>Start date and end date cannot be selected in the past.</div>');
}else{
  document.getElementById("duration").value = (days + period)+" days";
  $('#danger').html('');
}
  return false;
}

function dateDiffUpdate() { 
  var startDate = document.getElementById('event_start_date').value;
  var endDate = document.getElementById('event_end_date').value;
  var startPeriod = document.getElementById('event_start_time').value;
  var endPeriod = document.getElementById('event_start_time').value;
  
  var dateToStart = new Date(startDate);
  var dateToEnd = new Date(endDate);
  var getDateTime = dateToEnd.getTime() - dateToStart.getTime();
  var days = getDateTime/(1000  * 60  * 60 * 24);
  var period = 0;
if(startPeriod == 1) {
  if(endPeriod == 1){
    period = 0.5;
  }else{
    period = 1;
  }  
}else {
  if(endPeriod == 1){  
    period = 0;
  }else{
    period = 0.5;
  }
}
if(startDate > endDate){
  $('#dangers').html('<div class="alert alert-danger"><strong>Error! </strong>End date cannot be before start date.</div>');
}else if(startDate == endDate && startPeriod == 2 && endPeriod == 1){
  $('#dangers').html('<div class="alert alert-danger"><strong>Error! </strong>Start date and end date cannot be selected in the past.</div>');
}else{
  document.getElementById("durations").value = (days + period)+" days";
  $('#dangers').html('');
}
  return false;
}
</script>

<script>

  // edit image in your event
function updateImage(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(event) {
      $('#edit-image').attr('src', event.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#file-input2").change(function() {
  updateImage(this);
});


// remove image 
$("#remove").click(function(){
  $("#edit-image").remove();
});

</script>

<!-- add image to modal popup -->
<script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(event) {
      $('#set-image').attr('src', event.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#file-input-create").change(function() {
  readURL(this);
});

// remove image 
$("#set-remove").click(function(){
  $("#set-image").remove();
});
</script>
