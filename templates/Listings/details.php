<h1>detail de vos listes</h1>
<div class="row">
    <div class="column-responsive column-80">
        <div class="listenings view content">

            <tr>
                <td><?= $listing->title ?></td>        
            </td>
            <td>
                        <?php 
                            
                         if($this->request->getAttribute('identity') == null):
                            echo '<p> Voud devez etre connecté pour pouvoir commenter </p>';
                            
                            else : 
                            

                                echo $this->Form->create($new);
                                echo $this->Form->control('contents', ['label' => 'Ajouter un commentaire']);
                                echo $this->Form->button('ok');
                                echo $this->Form->end();

                                echo $this->Form->end();


                            endif; ?>

                    </td>


            </tr>
            
        
    </div>
</div>