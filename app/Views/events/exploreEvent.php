

<?= $this->include('layouts/navbar') ?>

<br>
<div class="container ">
            
        <!-- form -->
        <form>
            <div class="form-row">

                <div class="form-group col-md-5">
                    <div class="form-group">
                        <i class="large material-icons form-control-feedback">search</i>
                        <input type="text" class="form-control search_event" placeholder="Search">
                    </div>
                </div>

                <div class="col-md-2 mt-2">
                    <span>Not too far from</span>
                </div>

                <div class="form-group col-md-5">
                    <div class="form-group">
                        <select name="" id="" class="form-control search_event">
                            <option>cambodia</option>
                            <option>cambodia</option>
                            <option>cambodia</option>
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
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item event ">
      <a class="nav-link active" href="#menu1">CARDS</a>
    </li>
    <li class="nav-item calendar">
      <a class="nav-link" href="#menu2">CALENDAR</a>
    </li>
  </ul>

  <!-- Tab panes -->

  <div class="tab-content">
    <div id="menu1" class="container tab-pane active"><br>
    <?php foreach($eventData as $values) :?>
        <br>
        <?php $date = new DateTime($values['start_date']);?>
        <?= date_format($date, 'l/d/F/Y'); ?>
        
        <div class="card mt-4 card-explore" data-toggle="modal" data-target="#exampleModalCenter">
            <div class="card-body">
                <div class="row">
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
                            <img src="images/game.jpeg" class="rounded img-explore" alt="Cinque Terre"> 
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <br>
                        <br>
                        <span class="badge badge-light" ><i class="material-icons">highlight_off</i>Quit</span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
        
        <div class="container mt-5">
        <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body modal-explore">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="images/game.jpeg" class="rounded img-explore" alt="Cinque Terre">
                                    </div>

                                    <div class="col-sm-6">
                                        <span>category</span>
                                        <h3>title event</h3>
                                        <span><i class="material-icons">place</i>phnom peng</span><br>
                                        <span><i class="material-icons">people_outline</i>74 members</span><br>
                                        <span><i class="material-icons">perm_identity</i>organized by: user</span><br>
                                        <span><i class="material-icons">query_builder</i>moday, july 6 4pm to 5pm</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <span>Are you intereted in finding how to live trul?</span><br>
                            <span>Join us and we will show you the path step by step</span><br>
                            <span>Let's do it together!</span><br>
                            <span>click for More Info : Our Websit <a href="#">https://www.event.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div id="menu2" class="container tab-pane fade"><br>
    <div class="container py-5">
    <!-- Calendar -->
    <div class="calendar shadow bg-white p-5">
    <div class="d-flex align-items-center"><i class="fa fa-calendar fa-3x mr-3"></i>
            </div>
            <ol class="day-names list-unstyled">
                <li class="font-weight-bold text-uppercase">Sun</li>
                <li class="font-weight-bold text-uppercase">Mon</li>
                <li class="font-weight-bold text-uppercase">Tue</li>
                <li class="font-weight-bold text-uppercase">Wed</li>
                <li class="font-weight-bold text-uppercase">Thu</li>
                <li class="font-weight-bold text-uppercase">Fri</li>
                <li class="font-weight-bold text-uppercase">Sat</li>
            </ol>

            <ol class="days list-unstyled">
                <li>
                <div class="date">1</div>
                <div class="event bg-success">Event with Long Name</div>
                </li>
                <li>
                <div class="date">2</div>
                </li>
                <li>
                <div class="date">3</div>
                </li>
                <li>
                <div class="date">4</div>
                </li>
                <li>
                <div class="date">5</div>
                </li>
                <li>
                <div class="date">6</div>
                </li>
                <li>
                <div class="date">7</div>
                </li>
                <li>
                <div class="date">8</div>
                </li>
                <li>
                <div class="date">9</div>
                </li>
                <li>
                <div class="date">10</div>
                </li>
                <li>
                <div class="date">11</div>
                </li>
                <li>
                <div class="date">12</div>
                </li>
                <li>
                <div class="date">13</div>
                <div class="event all-day begin span-2 bg-warning">Event Name</div>
                </li>
                <li>
                <div class="date">14</div>
                </li>
                <li>
                <div class="date">15</div>
                <div class="event all-day end bg-success">Event Name</div>
                </li>
                <li>
                <div class="date">16</div>
                </li>
                <li>
                <div class="date">17</div>
                </li>
                <li>
                <div class="date">18</div>
                </li>
                <li>
                <div class="date">19</div>
                </li>
                <li>
                <div class="date">20</div>
                </li>
                <li>
                <div class="date">21</div>
                <div class="event bg-primary">Event Name</div>
                <div class="event bg-success">Event Name</div>
                </li>
                <li>
                <div class="date">22</div>
                <div class="event bg-info">Event with Longer Name</div>
                </li>
                <li>
                <div class="date">23</div>
                </li>
                <li>
                <div class="date">24</div>
                </li>
                <li>
                <div class="date">25</div>
                </li>
                <li>
                <div class="date">26</div>
                </li>
                <li>
                <div class="date">27</div>
                </li>
                <li>
                <div class="date">28</div>
                </li>
                <li>
                <div class="date">29</div>
                </li>
                <li>
                <div class="date">30</div>
                </li>
                <li>
                <div class="date">31</div>
                </li>
                <li class="outside">
                <div class="date">1</div>
                </li>
                <li class="outside">
                <div class="date">2</div>
                </li>
                <li class="outside">
                <div class="date">3</div>
                </li>
                <li class="outside">
                <div class="date">4</div>
                </li>
            </ol>
            </div>
            </div>
        </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        $(".calendar a").click(function(){
            $(this).tab('show');
        });
    });
    $(document).ready(function(){
        $(".event a").click(function(){
            $(this).tab('show');
        });
    });

</script>









