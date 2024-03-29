<?php 

namespace App\Controller;


Class ListingsController extends AppController{
    public function index()
    {
        $allListings = $this->Listings->Find('all');
        $this->set(compact('allListings'));
    }

    public function details(int $id =null)
    {
        if(empty($id)){
            $this->Flash->Error('Cette liste est introuvable sans numéros');
            return $this->redirect(['action' => 'index']);
        }

        $fc = $this->Listings->findById($id)->contain(['Users'])->all();

        if($fc->isEmpty()){
            $this->Flash->Error('Cette iste est introuvable');

            return $this->redirect(['action' => 'index']);
        }

        $listing = $fc->first();

        
        //il faut ajouter contents pour pouvoir le push sur contents et
        $new = $this->Listings->newEmptyEntity();



        $this->set(compact('listing', 'new'));
    }

   

    public function new()
    {
        $new = $this->Listings->newEmptyEntity();
        if($this->request->is('post')):
            $new = $this->Listings->patchEntity($new, $this->request->getData());

            $new->user_id = $this->request->getAttribute('identity')->id;
    
            if($this->Listings->save($new)):
    
                $this->Flash->success('liste sauvgardé');
    
                return $this->redirect(['controller' => 'Listings', 'action' => 'index']);
    
            endif;
            $this->Flash->error('sauvegarde impossible');
    
        endif;
        $this->set(compact('new'));
        }
    
    
    
}
