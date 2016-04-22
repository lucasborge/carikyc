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
</head>
<body>
    <div id="main" class="signup-page">
        <div class="container">
            <div class="row signup_info">
                <div class="col-md-12">
                    <div class="site-logo">
                        <a href="http://localhost/signup">
                            <img height="34" src="//cdn.wistia.com/assets/global_navigation/logos/new_wgh_wistia_logo_white_2x-b38561c05fe655f1f2c27372b2222aa2.png" width="203">
                        </a>
                    </div>
                    <div class="login-button">
                        <a href="/user/login">Login</a>
                    </div>
                </div>
            </div>
            <div class="row signup-container">
                <div class="col-md-12 signup-title">
                    <h2>Sign up for your free KYC account</h2>
                    <h4>Use KYC and all its features for free, forever!</h4>
                </div>
                <div class="col-md-12 signup-form">
                    <form role="form">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="first_name" placeholder="First Name" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="last_name" placeholder="Last Name" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="email" placeholder="Your email" />
                        </div>
                        <div class="col-md-6 form-group">
                            <select class="form-control" id="country">
                                <option>Barbados</option>
                                <option>Denmark</option>
                                <option>England</option>
                                <option>France</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="mobile_number" placeholder="Your mobile number" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="password" placeholder="Set your password" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="region_number" placeholder="National Region Number" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="checkbox" id="nrn" name="nrn" class="form-control" /><label>If you do not have a NRN</label>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="button" id="nrn" name="nrn" class="form-control" value="Create account" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
