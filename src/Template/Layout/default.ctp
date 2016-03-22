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
?>
<!DOCTYPE html>
<html>
<head>
<?= $this->Html->charset() ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
    <?= $this->fetch('title') ?>
</title>
<?= $this->Html->meta('icon') ?>

<?= $this->Html->css('bootstrap.css') ?>
<?= $this->Html->css('bootstrap-theme.min.css') ?>
<?= $this->Html->script('jquery-1.12.2.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
             
<?= $this->fetch('script') ?>
</head>
<body>
<nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- mobile friendly navbar toggle. gotta make this work on iphone!! -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="main_nav">
                        <span class="sr-only">Open Nav</span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                    </button>
                    <a class="navbar-brand" href="#">MARVIN</a>
                </div>
                
                <!-- actual links here -->
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="nav navbar-nav">
                        <li><?= $this->Html->link(__('New Asset'), ['controller'=>'Assets', 'action' => 'add'])?></li>
                        <li><a href="#">Find Asset</a></li>
                        <li><a href="#">Reporting</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Manage System<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><?= $this->Html->link(__('Asset Types'), ['controller'=>'AssetTypes', 'action' => 'index'])?></li>
                                <li><?= $this->Html->link(__('Asset Models'), ['controller'=>'AssetModels', 'action' => 'index'])?></li>
                                <li><?= $this->Html->link(__('Asset Uses'), ['controller'=>'AssetUses', 'action' => 'index'])?></li>
                                <li role="seperator" class="divider"></li>
                                <li><?= $this->Html->link(__('Locations'), ['controller'=>'Locations', 'action' => 'index'])?></li>
                                <li role="seperator" class="divider"></li>
                                <li><?= $this->Html->link(__('Manufacturers'), ['controller'=>'Manufacturers', 'action' => 'index'])?></li>
                                <li><?= $this->Html->link(__('Departments'), ['controller'=>'Departments', 'action' => 'index'])?></li>
                            </ul>
                        </li>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" name="tag_search" placeholder="Search by Asset Tag">
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
                <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
        </div>
    <footer>
    </footer>
</body>
</html>
