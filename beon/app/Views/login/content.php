<div class="container">
        <div class="img">
       
            <img src="<?= base_url(); ?>/img/capture.jpg">
        </div>
        <div class="login-content">
        <form action="/login/auth" method="post">
              
                <h2 class="title">Login</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" name="email" class="input" id="InputForEmail" value="<?= set_value('email') ?>">
                        
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" class="input" id="InputForPassword">
                    </div>
                </div>
                <a href="<?= base_url('/register'); ?>">Create New Account</a>
                <a href="#">Forgot Password?</a>
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                <input type="submit" class="btn" value="Login">
            </form>
            
        </div>
  
    </div>