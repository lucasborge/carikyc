<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'KYC : signup';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap-theme.min.css') ?>
    <?= $this->Html->script('jquery-2.1.1.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->script('login.js') ?>
</head>
<body class="login_body">
    <div id="main">
        <div class="container">
            <div class="row login-container">
                <div class="col-md-12 login-title">
                    <h2><img/logo.png></h2>
                </div>
                <div class="col-md-12 login-form">
                    <h1>Member Login</h1>
                    <div class="head">
                        <img src="/img/user.png" alt="">
                    </div>
                    <form role="form" id="login_form" name="login_form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="password" placeholder="Password" />
                        </div>
                        <div class="col-md-12 form-group login-remember">
                            <input type="button" class="form-control" value="LOGIN" id="login" />
                        </div>
                        <div class="col-md-8 form-group login-remember">
                            <input type="checkbox" id="nrn" name="nrn" /> Remeber Me
                        </div>
                    </form>
                </div>
                <div class="col-md-12 login-footer">
                    <div class="col-md-5 login-forgot-password">
                        <a href="/signup/register" class="login-signup">Forgot your password?</a>
                    </div>
                    <div class="col-md-7 login-signup-new">
                        <span>
                        Don't have an account?
                        <a class="login-signup" href="/signup/register">Sign up</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
