<?php

namespace App\Controller;

class UsersController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['login', 'signup']);
    }

    public function index()
    {
    }

    public function signup()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if ($this->Users->save($user)) {
                $this->Flash->success('couleur sauvegardé');

                return $this->redirect(['action' => 'signup']);


                $this->Flash->error(__('sauvegarde impossible veuillez re-essayer'));
            }
        }
        $this->set(compact('user'));
    }

    public function login()
    {
        $user = $this->Users->newEmptyEntity();

        if ($this->request->is('post')) {
            $result = $this->Authentication->getResult();

            if ($result->isValid()) {
                //$target = $this->Authentication->getLoginRedirect() ?? '/index';
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Identifiant ou mot de passe invalide');
        }
        $this->set(compact('user'));
    }

    public function logout()
    {
        $this->Authentication->logout();
        $this->Flash->success('A bientot !');
        return $this->redirect(['controller' => 'Users', 'action' => 'index']);
    }
}
