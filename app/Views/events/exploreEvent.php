<?= $this->include('layouts/navbar') ?>

<br>
<div class="container ">
            
        <!-- form -->
        <form>
            <div class="form-row">

                <div class="form-group col-md-5">
                    <div class="form-group">
                        <i class="large material-icons form-control-feedback">search</i>
                        <input type="text" class="form-control search_event" id="searchEvent" placeholder="Search">
                    </div>
                </div>

                <div class="col-md-2 mt-2">
                    <span>Not too far from</span>
                </div>

                <div class="form-group col-md-5">
                    <div class="form-group">
                        <select name="city" id="city" class="form-control search_event">
                            <option disabled selected>City</option>
                            <?php foreach($dataJson as $values) :?>
                                <option ><?=  $values['city'].'  ,  '.$values['country'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

            </div>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Event you join only
                </label>
                </div>
            </div>
        </form>
        <!-- end form -->
</div>



<div class="container mt-5">
<ul class="nav nav-tabs">
    <li class="nav-item event ">
      <a class="nav-link active" href="#menu1">CARDS</a>
    </li>
    <li class="nav-item calendar">
      <a class="nav-link" href="#menu2">CALENDAR</a>
    </li>
</ul>
<br>

<div class="tab-content">
    <div id="menu1" class="container tab-pane active"><br>







    <?php foreach($eventData as $eventValue) :?>
     

        <?php    
           if( $getUser['id'] != $eventValue['user_id'] ): 
            $date = date('Y-m-d');     
        ?>

        <?php $date = new DateTime($eventValue['start_date']);?>
        <?= date_format($date, 'l/d/F/Y'); ?>
        

        <div class="card mt-4 card-explore" id="event" >
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <br>
                        <br>
                        <?php $date = new DateTime($eventValue['start_time']);?>
                        <?= date_format($date, 'g:i A'); ?>
                    </div>
                    <div class="col-sm-4"  data-toggle="modal"  data-target="#eventDetail<?= $eventValue['event_id']?>">
                        <p><?= $eventValue['name']; ?></p>
                        <h2><?= $eventValue['title']; ?></h2>

                        <!-- get start date push in new array -->
                        <?php  
                            $arrayMember = array();
                            foreach($joinData as $joinEvent) :
                                if($joinEvent['event_id'] == $eventValue['event_id']) : 
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

                    <div class="col-sm-3" data-toggle="modal"  data-target="#eventDetail">
                        <br>
                        <div class="text-center" data-toggle="modal"  data-target="#eventDetail<?= $eventValue['event_id']?>">
                            <img src="images/event_image/<?= $eventValue['image']; ?>" class="rounded img-explore" alt="">  
                        </div>
                    </div>

                    <div class="col-sm-2 mt-5" data-toggle="modal"  data-target="#eventDetail">
                    
                        <div style="width:50px;">
                            <!-- start quit -->
                            <?php foreach($joinData as $join) :?>
                                <?php if($eventValue['event_id'] == $join['event_id'] && $join['user_id'] == $getUser['id'])  :?>
                            
                                    <form action="explorecontroller/userQuit" method="post" style="margin-top:20;">
                                        <input type="hidden" name="user_quit" value="<?= $join['join_id'] ?>">
                                        <button type="submit" class="btn btn-sm btn btn-danger mt-4 quit-nutton">
                                            <i class="fa fa-times-circle"></i>
                                            <b>Quit</b> 
                                        </button>
                                    </form>

                                <?php endif;?>
                            <?php endforeach; ?>
                            <!-- end quit -->

                            <!-- start join -->
                            <form action="<?= base_url('explorecontroller/userJoin'); ?>" method="post">
                                <div class="join_button">
                                    <input  type="hidden" class="event_id" name="event_join" value="<?= $eventValue['event_id']; ?>">
                                    <input  type="hidden" name="user_join" value="<?= $getUser['id']; ?>">
                                </div>
                                <div class="join_button_display" ></div>         
                            </form>
                            <!-- end join -->

                        </div>
                    </div> 
                </div>       
                

        <!-- The Modal -->
    <div class="modal fade" id="eventDetail<?= $eventValue['event_id']?>">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-warning">Event Detail</h4>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-5 mt-4">

                        <img src="images/event_image/<?= $eventValue['image']; ?>" class="rounded img-explore"  style="width: 190px; margin-top: 15px; height: 190px">  
  
                    </div>

                    <div class="col-7 mt-3">
    
                        <p class="category text-primary"><?= $eventValue['name']; ?></p>
                        <h4 class="title"><strong><?= $eventValue['title']; ?></strong></h4>

                    <div class="row">
                        <i class="material-icons">location_on</i>
                        &nbsp;
                        <p><?= $eventValue['city']?> </p>
                    </div>

                    <div class="row">
                        <i class="material-icons">account_circle</i>
                        &nbsp;
                        <!-- get start date push in new array -->
                        <?php  
                            $arrayMember = array();
                            foreach($joinData as $joinEvent) :
                                if($joinEvent['event_id'] == $eventValue['event_id']) : 
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
                                Members
                            </p>
                        <?php endif; ?>
                                        
                        <?php if(count($arrayMember) == 1) :?>
                            <p>
                                <strong><?= count($arrayMember); ?></strong>
                                Member
                            </p>
                        <?php endif; ?>
                            
                        <?php if(count($arrayMember) == 0) :?>
                            <p>
                                <strong><?= count($arrayMember); ?></strong>
                                Member
                            </p>
                        <?php endif; ?>
                        <!-- end count -->
                    </div>
                    
                    <!-- get first name -->
                    <div class="row">
                        <i class="material-icons">account_circle</i>
                        &nbsp;
                        <?php 
                            foreach($userData as $user):
                                if($eventValue['user_id'] == $user['id']):   
                        ?> 
                        <p>Organized by: <?= $user['first_name'];?></p>
                        <?php endif;  
                        endforeach;?>      
                    </div>

                    <div class="row">
                        <i class="material-icons">alarm</i>
                        &nbsp;
                        <?php $date = new DateTime($eventValue['start_date']);?>
                        <?= date_format($date, 'l,F j'); ?>
                        &#8594;
                        <p><?php $date = new DateTime($eventValue['start_time']);?>
                        <?= date_format($date, 'g  A'); ?> </p>
                        &nbsp;
                        <strong>to</strong>
                        &nbsp;
                        <p><?php $date = new DateTime($eventValue['end_time']);?>
                        <?= date_format($date, 'g  A'); ?> </p>
       
                    </div>

                        <div style="width:50px;" class="float-right">
                            <!-- start quit -->
                            <?php foreach($joinData as $join) :?>
                                <?php if($eventValue['event_id'] == $join['event_id'] && $join['user_id'] == $getUser['id'])  :?>
                            
                                    <form action="explorecontroller/userQuit" method="post">
                                        <input type="hidden" name="user_quit" value="<?= $join['join_id'] ?>">
                                        <button type="submit" class="btn btn-sm btn btn-danger mt-4 quit-nutton">
                                            <i class="fa fa-times-circle"></i>
                                            <b>Quit</b> 
                                        </button>
                                    </form>

                                <?php endif;?>
                            <?php endforeach; ?>
                            <!-- end quit -->

                            <!-- start join -->
                            <form action="<?= base_url('explorecontroller/userJoin'); ?>" method="post">
                                <div class="join_button">
                                    <input  type="hidden" class="event_id" name="event_join" value="<?= $eventValue['event_id']; ?>">
                                    <input  type="hidden" name="user_join" value="<?= $getUser['id']; ?>">
                                </div>
                                <div class="join_button_display" ></div>         
                            </form>
                            <!-- end join -->
                        </div>
                    </div>
                </div>
            <hr>
            </div>
            <div class="container">
                <p > <?= $eventValue['description']?> </p>
            </div>

            </div>
            </div>
        </div>
    </div>             
</div> 
     


    <?php endif; ?>
<?php endforeach; ?>

    
<!-- start script -->
<script type="text/javaScript">
$(document).ready(function() {
      $("#searchEvent").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#event ").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });

    joinButton()
        function joinButton(){

            var eventJoin = <?= json_encode($joinData, JSON_PRETTY_PRINT) ?>;

            var user_id = <?= json_encode($getUser['id'],JSON_PRETTY_PRINT) ?>;
            
            var event_id = document.getElementsByClassName('join_button');

            var join_button_display = document.getElementsByClassName('join_button_display');

            var data;

            var arrayEvent = [];

            for (let i = 0; i < event_id.length; i++) {
        
                eventJoin.forEach(items => {

                    data = event_id[i].getElementsByClassName('event_id')[0];
      
                    if(data.value == items.event_id && items.user_id == user_id){
      
                        arrayEvent.push(items.event_id);
                    }
                    
                   

                });

                if (arrayEvent[i] === undefined){
                    arrayEvent.push('!join');
                    join_button_display[i].innerHTML = `
                    <button class="btn btn-sm btn btn-success mt-4 float-right join-button">
                        <i class="fa fa-check-circle"></i>
                        <b>Join</b>
                    </button>
                    `;
                }            
            }

        }

</script>
<!-- end script -->