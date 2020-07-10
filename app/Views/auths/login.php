<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="auth">
  <div class="auth__body">
    <form class="auth__form" autocomplete="off" action="" method="post">
      <div class="auth__form_body">
        <h3 class="auth__form_title"> Login </h3>
        <hr>
        <div>
          <div class="form-group">
            <label class="text-uppercase small">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" value="">
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" value="">
          </div>
        </div>
      </div>
      <div class="auth__form_actions">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
          NEXT
        </button>
        <div class="mt-2">
          <a href="/signout" class="small text-uppercase">
            CREATE ACCOUNT
          </a>
        </div>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection() ?>