
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
<?php foreach($eventData as $values) :?>
        <h4 class="mt-3">
          <a href="#">  
            <?php $date = new DateTime($values['start_date']);?>
            <?= date_format($date, 'l/d/F/Y'); ?>
          </a>
        </h4>
        <div class="card mt-4 card-explore" data-toggle="modal" data-target="#exampleModalCenter">
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
                        <span>4 member going</span>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <div class="text-center">
                            <img src="images/event_image/<?= $values['image']; ?>" class="rounded img-explore" alt="">
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

<!-- =================================START MODEL DELETE YOUR EVENT=================================================== -->
<div class="modal mt-5" id="cancelYourEvent<?= $values['event_id'] ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Cancel YourEvent</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    <p>Are you sure want to delete yourEvent?</p>
                        <form action="deleteYourEvent/<?= $values['event_id'] ?>" method="post">
                            <br>
                            <div class="float-right">
                                <a href="" class="text-uppercase text-dark">DISCARD</a>
                                <button type="submit" class="btn text-warning btn-link">SUBMIT</button>
                            </div>
                        </form>
                      </div>
                  </div>
            </div>
        </div>

 <!-- =================================END MODEL DELETE YOUR EVENT=================================================== -->
        <?php endforeach; ?>
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
          <form action="youreventcontroller/createEvent" method="post">
            <div class="row">
              <div class="col-sm-8">

                <div class="form-group">
                  <select class="form-control" name="categorys" id="categorys">
                  <option disabled selected>Category</option>
                  <?php foreach($categoryData as $values) :?>
                    <option value="<?= $values['category_id']; ?>"> <?= $values['name']; ?></option>
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
                    <?php foreach($dataJson as $values) :?>
                        <option ><?=  $values['city'].'  ,  '.$values['country'] ?></option>
                    <?php endforeach; ?>

                  </select>
                </div>
                <div class="form-group">
                <textarea class="form-control form-control-sm mb-3" rows="3" name="description" id="description" placeholder="Description"></textarea>
                </div>

              </div>
              <div class="col-sm-4">
                <img src="images/event.png" class="eventImg" alt="" ><br><br>
                
                <div class="image-upload">
                    <input id="file-input" type="file" name="profile">
                    <label for="file-input">
                      <i class="material-icons">add</i> &nbsp;
                    </label>
                      <a href=""><i class="material-icons">delete</i></a>
                </div>
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
          <form action="youreventcontroller/updateYourEvent" id = "form-edit-event" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-8">
              <input type="hidden" name="event_id" id="event_id"  class="form-control">
                <div class="form-group">
                  <select class="form-control" name="category" id="event_category">
                  </select>

                </div>
                
                <div class="form-group">
                    <input type="text" name="title" id="event_title"   class="form-control"  placeholder="Title">
                </div>

                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                      <input type="date" name="start_date" id="event_start_date" placeholder="Start date" class="form-control">
                      </div>

                      <div class="form-group">
                      <input type="date" name="end_date" id="event_end_date" placeholder="Start date"  class="form-control">
                      </div>   

                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                      <input type="time" name="start_time" id="event_start_time"  placeholder="At"  class="form-control">
                      </div>

                      <div class="form-group">
                      <input type="time"  name="end_time" id="event_end_time"  placeholder="At"  class="form-control">
                      </div>
                    </div>
                  
                </div>
                	  <!-- insert city -->

                <div class="form-group">
                  <select class="form-control" name="city" id="event_city">
                    <?php foreach($dataJson as $values) :?>
                        <option ><?=  $values['city'].'  ,  '.$values['country'] ?></option>
                    <?php endforeach; ?>

                  </select>
                </div>
                <div class="form-group">
                <textarea class="form-control form-control-sm mb-3" rows="3" name="description" id="event_description" placeholder="Description"></textarea>
                </div>

              </div>
              <div class="col-sm-4">
              <img src="" class="eventImg" alt="add picture" id = "updoad_image"><br><br>          
              <div class="image-upload text-center" id="">
                  <label for="file-input2">
                    <i class="material-icons m-2 text-dark" style="cursor:pointer;">add</i>
                  </label>
                  <input id="file-input2" type="file" name="file_image" hidden>
                  <a href="#"><i class="material-icons m-2 text-dark" id="remove" style="cursor:pointer;">delete</i></a>
                </div>
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
    $('#updoad_image').attr("src", "/images/event_image" + "/" + image)

});

</script>

<!-- edit image in your event -->
<script>
  // add image to modal popup
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(event) {
      $('#updoad_image').attr('src', event.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#file-input2").change(function() {
  readURL(this);
});


// remove image 
$("#remove").click(function(){
  $("#updoad_image").remove();
});
</script>