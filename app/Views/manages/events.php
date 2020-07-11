<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
 <div class="container">
    <div class="row"> 
        <div class="col-12">
            <form action="">
                <div class="form-group">
                  <i class="large material-icons form-control-feedback">search</i>
                  <input type="text" class="form-control search_event" placeholder="Search" name="search">
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <h1>All events</h1>
    <table class="table table-borderless mt-3">
    <thead>
      <tr>
        <th>Organizer</th>
        <th>City</th>
        <th>Title</th>
        <th>Category</th>
        <th>Start date</th>
        <th class="hide">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr class="info">
        <td>Jack</td>
        <td>Vancouver</td>
        <td>Soccer Competition</td>
        <td>Sport</td>
        <td>25/05/2005</td>
        <td class="deleteEvent"><i class="large material-icons ">delete</i></td>
      </tr>
      <tr class="info">
        <td>Ronan</td>
        <td>Vancouver</td>
        <td>Piano</td>
        <td>Music</td>
        <td>25/05/2005</td>
        <td class="deleteEvent" ><i class="large material-icons" >delete</i></td>
      </tr>
      <tr class="info">
        <td>Seiha</td>
        <td>Paris</td>
        <td>Poker</td>
        <td>Games</td>
        <td>25/05/2005</td>
        <td class="deleteEvent" ><i class="large material-icons ">delete</i></td>
      </tr>
 
    </tbody>
  </table>
    </div>
 </div>
</div>
<?= $this->endSection() ?>