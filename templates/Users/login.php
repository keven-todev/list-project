<?php ?> ?>

<h1>Se connecter</h1>
<?= $this->Form->create($user) ?>


<?= $this->Form->control('username') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->submit('valider') ?>

<?= $this->Form->end() ?>