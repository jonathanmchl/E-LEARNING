<div class="container">
        <div class="img">
            <img src="/img/capture.jpg">
        </div>
        <div class="login-content">
        <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form action="/register/save" method="post">
          
                <h2 class="title">Register</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" name="name" class="input" id="InputForName" value="<?= set_value('name') ?>">
                    </div>
                </div>
                
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
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
                
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Confirm Password</h5>
                        <input type="password" name="confpassword" class="input" id="InputForConfPassword">
                      
                    </div>
                </div>
                

                <input type="submit" class="btn" value="Register">
            </form>
        </div>
    </div>