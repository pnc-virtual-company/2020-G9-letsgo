

<?= $this->include('layouts/navbar') ?>

<br>
<br> 
<br> 

<div class="container mt-5">
            
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
    <li class="nav-item">
      <a class="nav-link" href="#menu1">CARDS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu2">CALENDAR</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="menu1" class="container tab-pane fade"><br>
      <p>Monday, july 9</p>
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
                        <br>
                        <br>
                        <span class="badge badge-light" ><i class="material-icons">highlight_off</i>Quit</span>
                        <!-- <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Second radio
                            </label>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

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
        <!-- calendar  -->
        <div class="monthly" id="mycalendar"></div>
        </div>
    </div>
  </div>
</div>












