<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Đăng nhập quyền sinh viên</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger">' , '</div>'); ?>
                        <form id="login-form" class="form" action="<?php echo site_url('main/login_validation');?>" method="post">
                            <h3 class="text-center text-info">Đăng nhập quyền sinh viên</h3><br><br/>
                             
                              <div class="form-group">
                                  <label for="username" class="text-info">Tên đăng nhập:</label><br>
                                  <input type="text" name="username" id="username" class="form-control">
                              </div>
                          


                            <div class="form-group">
                                <label for="password" class="text-info">Mật khẩu:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
 
                            <div>
                              <button class="btn btn-primary" type="submit" name="login"> Đăng nhập </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
