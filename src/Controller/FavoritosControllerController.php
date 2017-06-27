<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FavoritosController Controller
 *
 * @property \App\Model\Table\FavoritosControllerTable $FavoritosController
 */
class FavoritosControllerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $favoritosController = $this->paginate($this->FavoritosController);

        $this->set(compact('favoritosController'));
        $this->set('_serialize', ['favoritosController']);
    }

    /**
     * View method
     *
     * @param string|null $id Favoritos Controller id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $favoritosController = $this->FavoritosController->get($id, [
            'contain' => []
        ]);

        $this->set('favoritosController', $favoritosController);
        $this->set('_serialize', ['favoritosController']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $favoritosController = $this->FavoritosController->newEntity();
        if ($this->request->is('post')) {
            $favoritosController = $this->FavoritosController->patchEntity($favoritosController, $this->request->data);
            if ($this->FavoritosController->save($favoritosController)) {
                $this->Flash->success(__('The favoritos controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The favoritos controller could not be saved. Please, try again.'));
        }
        $this->set(compact('favoritosController'));
        $this->set('_serialize', ['favoritosController']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Favoritos Controller id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $favoritosController = $this->FavoritosController->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $favoritosController = $this->FavoritosController->patchEntity($favoritosController, $this->request->data);
            if ($this->FavoritosController->save($favoritosController)) {
                $this->Flash->success(__('The favoritos controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The favoritos controller could not be saved. Please, try again.'));
        }
        $this->set(compact('favoritosController'));
        $this->set('_serialize', ['favoritosController']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Favoritos Controller id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $favoritosController = $this->FavoritosController->get($id);
        if ($this->FavoritosController->delete($favoritosController)) {
            $this->Flash->success(__('The favoritos controller has been deleted.'));
        } else {
            $this->Flash->error(__('The favoritos controller could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
