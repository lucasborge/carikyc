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
    <div id="main" class="approve-page">
        <div class="container">
            <div class="row approve-container">
                <div class="col-md-12 approve-title">
                    <h2>Client Approved Acces to private Records</h2>
                    <h4>Client is 80% Verified and ID Documents are partially, 33% up to date</h4>
                </div>
                <div class="col-md-12 approve-form">
                    <form role="form">
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="first_name" placeholder="First" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="middle_name" placeholder="Middle" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="last_name" placeholder="Last" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="email" placeholder="email" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="mobile" placeholder="mobile" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="home" placeholder="home" />
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="birth" placeholder="Date of Birth" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="place" placeholder="Place of Birth" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="national" placeholder="Nationality" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="nrn" placeholder="NRN" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="passno" placeholder="Passport No" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="driverno" placeholder="Driver License No" />
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="per_addr" placeholder="Permanent Address" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="per_addr" placeholder="Permanent Address" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="per_addr" placeholder="Permanent Address" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="post_code" placeholder="Post code" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="country" placeholder="Country" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="postal_addr" placeholder="Postal Address" />
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-4 form-group">
                            &nbsp;
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="profesion" placeholder="Profesion" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="employer" placeholder="Employer" />
                        </div>
                        <div class="col-md-12 space-30"></div>
                        <div class="col-md-12 form-group approve-next-btn">
                            <a href="/user/approve2"><span class="glyphicon glyphicon-arrow-right"></span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
