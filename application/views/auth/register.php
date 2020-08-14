<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
                <div class="row">
                <div class="col-lg">
                <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                <div class="form-group">         
                    <input type="text" class="form-control form-control-user" id="name"  
                    name="name" placeholder="Full Name" value="<?= set_value('name');?>">
                    <?= form_error('name','<small class = "text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" 
                  name="email" placeholder="Email Address" value="<?= set_value('email');?>">
                  <?= form_error('email','<small class = "text-danger pl-3">', ' </small>'); ?> 
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    <?= form_error('password','<small class = "text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block"> Register Account
                </button>     
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth/login')?>">Already have an account? Login!</a>
              </div>
         
            </div>
          </div>
        </div>
      </div>
</div>
    </div>
  </div>
   <!-- Footer -->
      <div>
             <footer class="sticky-footer">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2020 Predict. all rights reserved </span>
          </div>
        </div>
      </footer>
</div>
      <!-- End of Footer -->