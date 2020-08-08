<?= $this->include('layouts/navbar') ?>

<div class="container mt-5">
 <div class="container">
    <div class="row"> 
        <div class="col-12">
            <form action="">
                <div class="form-group">
                  <i class="large material-icons form-control-feedback">search</i>
                  <input type="text" class="form-control search_event" id="searchEvent" placeholder="Search" name="search">
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <h1>All events</h1>
    <table class="table table table-hover table-borderless mt-3">
    <thead>
      <tr>
        <th>Organizer</th>
        <th>City</th>
        <th>Title</th>
        <th>Category</th>
        <th>Start date</th>

      </tr>
    </thead>
    <tbody id="event" >
    <?php  foreach ($eventData as $values):?>
      <tr class='delete_hover_class'>
      <?php 
          foreach($userData as $user):
            if($values['user_id'] == $user['id']):   ?>  
            <td><?= $user['first_name'];?></td>
      <?php endif;  
        endforeach;?>  
               
        <td><?= $values['name']?></td>
        <td><?= $values['title']?></td>
        <td><?= $values['city']?></td>
        <td><?= $values['start_date']?></td>

        <td>
            <a href="deleteEvent/<?= $values['event_id']?>" data-toggle="modal" data-target="#removeEvent<?= $values['event_id']?>" title="Delete event!" 
                 data-placement="right"><i class="material-icons text-danger">delete</i></a>
            </div>
        </td>
      </tr>



<!-- The Modal Remove Event-->
<div class="modal mt-5" id="removeEvent<?= $values['event_id']?>">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Remove itme ?</h4>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body mt-2">
                    Are you sure you want to remove selected item ?
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <form action="deleteEvent/<? $values['event_id']?>" method="post">
                    <div class="float-right">
                      <a href="" class="text-uppercase text-dark">DON'T REMOVE</a>
                      <a href="deleteEvent/<?= $values['event_id']?>" class="text-uppercase text-warning">REMOVE</a>
                    </div>
                </form>
                </div>     
            </div>
        </div>
    </div>
    <!-- end Modal Remove Category-->

</div>


    <?php endforeach;?>
    </tbody>
  </table>
    </div>
 </div>

 






