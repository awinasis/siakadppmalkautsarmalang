<div class="login-box">
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p align="center">
            <img src="<?php echo base_url('/uploads/ppmalkautsarjazom.png') ?>" width="170px" height="170px" class="img-fluid mt-3">
        </p>
        <p class="login-box-msg">Silahkan Login Terlebih Dahulu</p>
        <?php

        $errors = session()->getFlashdata('errors');
        if (!empty($errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($errors as $key => $value) { ?>
                        <li><?= esc($value) ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

        <?php
        if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-warning" role="alert">';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        }
        if (session()->getFlashdata('sukses')) {
            echo '<div class="alert alert-success" role="alert">';
            echo session()->getFlashdata('sukses');
            echo '</div>';
        }
        ?>

        <?php
        echo form_open('auth/cek_login');
        ?>

        <div class="form-group has-feedback">
            <input id="username" type="text" name="username" class="form-control" placeholder="Username">
            <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <select name="level" class="form-control">
                <option value="">--Level--</option>
                <option value="1">Admin</option>
                <option value="2">Guru</option>
                <option value="3">Santri</option>
            </select>
        </div>
        <div class="form-group has-feedback">
            <input id="password" type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="col-xs-8 ml-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox">
                    Remember Me </label>
            </div>
        </div>
        <br>
        <div class="row">
            <!-- /.col -->
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-key"></i> Login</button>
            </div>
            <!-- /.col -->
        </div>
        <br>
        <div class="text-center">
            <a href="#">Forgot Password?</a>
        </div>

    </div>
    <!-- /.login-box-body -->