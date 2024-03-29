<h1>Voici vos lists</h1>

<table>
    <head>
        <tr>
            <th>titre</th>
            <th>status</th>
        </tr>
    </head>

    <body>
        <?php foreach ($allListings as $l): ?>
            <tr>
                <td><?= $this->Html->link($l->title, ['action' => 'details', $l->id]) ?></td>
                <td><?= $this->Html->link($l->status, ['action' => 'details', $l->status]) ?>
                <?= $this->html->link('<i class="fa-solid fa-pen"></i>', ['action' => 'details', $l->id], ['class' => 'button', 'escape' => false]) ?>
            
            </td>
            </tr>
            
            <?php endforeach; ?>
    </body>
</table>