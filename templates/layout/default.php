<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <div class="top-nav-links">
                <?= $this->Html->Link('Accueil', ['controller' => 'Users', 'actions' => 'index']) ?>
            </div>

            <?php if($this->request->getAttribute('identity') == null) : ?>

            <?= $this->Html->Link('créer un compte', ['controller' => 'Users', 'action' => 'signup'], ['escape' =>false]) ?>

            <?= $this->Html->Link('se connecter', ['controller' => 'Users', 'action' => 'login'], ['escape' =>false]) ?>

            <?php else : ?>

                
                <?= $this->Html->Link('ajouter une couleur ', ['controller' => 'Listings', 'action' => 'new'], ['escape' =>false]) ?>
                <?= $this->Html->Link('Les listes', ['controller' => 'Listings', 'action' => 'index'], ['escape' =>false]) ?>
                <!-- faire les listes etc -->
            
            <?php endif; ?>

        </div>
       
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
