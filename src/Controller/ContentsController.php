<?php 

namespace App\Controller;


class ContentController extends AppController{
    public function index(){

    }

    public function new(){
        if($this->request->is(['post', 'put'])){
            $new = $this->Contents->newEmptyEntity();
            $new = $this->Contents->patchEntity($new, $this->request->getData());

            if($this->Contents->save($new))
            $this->Flash->success('contenu sauvegardé');

            else 
            $this->Flash->error('Sorry, marche pas :/ ');

            return $this->redirect(['controller' => 'Listings', 'action' => 'details', $new->listing_id]);
        }
           return $this->redirect(['controller' => 'Listings', 'action' => 'index']);
            
        }
}