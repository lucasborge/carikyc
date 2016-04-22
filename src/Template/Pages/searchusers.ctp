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
    <?= $this->Html->script('search.js') ?>
</head>
<body>
    <div id="main" class="search-page">
        <div class="container">
            <div class="row search-container">
                <div class="col-md-12 approve-title">
                    <h2>Search for an Individual</h2>
                    <h4></h4>
                </div>
                <div class="col-md-12 search-form">
                    <form role="form" id="search_form" name="search_form" method="post">
                        <div class="col-md-12">
                            <div class="col-md-4 search-country-select">
                                <select id="country" name="country">
                                    <option selected>Babados</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 space-20"></div>
                        <div class="col-md-12 search-form-item">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <span class="search-space">Or</span>
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-12" >
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" id="nrn" name="nrn" placeholder="YYMMDD-NNNN" />
                            </div>
                        </div>
                        <div class="col-md-12 space-30"></div>
                        <div class="col-md-12">
                            <div class="col-md-12 form-group search-btn">
                                <input type="button" id="search_users" name="" class="form-control" value="Search Individuals" />
                            </div>
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-12">
                            <span>By clicking this button, you agree to our <a>Terms of Service.</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
