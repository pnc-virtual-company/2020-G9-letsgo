<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="auth">
  <div class="auth__header">

  </div>

  <div class="auth__body">
    <form class="auth__form" autocomplete="off" action="/" method="post">
      <div class="auth__form_body">
        <h3 class="auth__form_title">
          Register Form
        </h3>
        <hr>
        <div>
          <div class="form-group">
            <label class="text-uppercase small">First Name</label>
            <input type="text" name ="first_name" class="form-control" placeholder="Enter first name" value="">
          </div>
          <div class="form-group">
            <label class="text-uppercase small">last Name</label>
            <input type="text" name ="last_name" class="form-control" placeholder="Enter last name" value="">
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Email</label>
            <input type="email" name ="email" class="form-control" placeholder="Enter email" value="">
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" value="">
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Profile</label>
            <input name="profile" type="file" class="form-control" >
          </div>

        </div>
      </div>

        <div class="auth__form_actions">

          <button  type="submit"  class="btn btn-primary btn-lg btn-block" >
            NEXT
          </button>

        <div class="mt-2">
          <a href="/signin" class="small text-uppercase">
            SIGN IN INSTEAD
          </a>
        </div>
      </div>

    </form>
  </div>
</div>
<?= $this->endSection() ?>