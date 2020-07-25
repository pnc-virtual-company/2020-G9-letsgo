<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="auth">

  <div class="auth__header">

  </div>

  <div class="auth__body">
    <form class="auth__form" autocomplete="off" action="register" method="POST">
      <div class="auth__form_body">
        <h3 class="auth__form_title">
          Create Account
        </h3>
        <hr>
        <div>    

          <div class="form-group">
            <label class="text-uppercase small">Fisrt Name</label>
            <input type="text" name ="first_name" id="first_name" class="form-control" placeholder="Enter first name" >
          </div>

          <div class="form-group">
            <label class="text-uppercase small">Lasrt Name</label>
            <input type="text" name ="last_name" id="last_name" class="form-control" placeholder="Enter last name" >
          </div>

          <div class="form-group">
            <label class="text-uppercase small">Email</label>
            <input type="email" name ="email" id="email" class="form-control" placeholder="Enter email" >
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Confirm Password</label>
            <input type="password" name="repeat_password" id="repeat_password"  class="form-control" placeholder="Confirm Password" >
          </div>
          <?php if(isset($validation)) :?>
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors(); ?>
              </div>
          <?php endif; ?>
          <div class="form-group">
            <select name="role" id="role">
              <option>admin</option>
              <option>user</option>
            </select>
          </div>

        </div>
      </div>
        <div class="auth__form_actions">
          <button  type="submit"  class="btn btn-primary btn-lg btn-block" >
            SUBMIT
          </button>
          <div class="mt-2">
          <a href="/" class="small text-uppercase">
            BACK TO SIGNIN    
          </a>
        </div>
    </form>
  </div>
</div>
<?= $this->endSection() ?>