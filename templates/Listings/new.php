<?php ?>

<h1>ajouter nouvelle list</h1>

<?=  $this->Form->create($new) ?>

<?= $this->Form->control('title') ?>
<?= $this->Form->input('Model.name', array('type'=>'checkbox','checked'=>false)) ?>
<label for="Model_name">Mettre la liste Privé</label>
<?= $this->Form->button('Ajouter') ?>


<?= $this->Form->end() ?>