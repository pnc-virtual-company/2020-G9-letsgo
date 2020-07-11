<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="auth">
  <div class="auth__header">

  </div>

  <div class="auth__body">
    <form class="auth__form" autocomplete="off" action="" method="post">
      <div class="auth__form_body">
        <h3 class="auth__form_title">
          Create Account
        </h3>
        <hr>
        <div>     
          <div class="form-group">
            <label class="text-uppercase small">Email</label>
            <input type="email" name ="email" class="form-control" placeholder="Enter email" value="">
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" value="">
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Confirm Password</label>
            <input type="password"  class="form-control" placeholder="Confirm Password" value="">
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