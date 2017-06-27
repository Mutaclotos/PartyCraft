<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ComentariosController Controller
 *
 * @property \App\Model\Table\ComentariosControllerTable $ComentariosController
 */
class ComentariosControllerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $comentariosController = $this->paginate($this->ComentariosController);

        $this->set(compact('comentariosController'));
        $this->set('_serialize', ['comentariosController']);
    }

    /**
     * View method
     *
     * @param string|null $id Comentarios Controller id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comentariosController = $this->ComentariosController->get($id, [
            'contain' => []
        ]);

        $this->set('comentariosController', $comentariosController);
        $this->set('_serialize', ['comentariosController']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comentariosController = $this->ComentariosController->newEntity();
        if ($this->request->is('post')) {
            $comentariosController = $this->ComentariosController->patchEntity($comentariosController, $this->request->data);
            if ($this->ComentariosController->save($comentariosController)) {
                $this->Flash->success(__('The comentarios controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comentarios controller could not be saved. Please, try again.'));
        }
        $this->set(compact('comentariosController'));
        $this->set('_serialize', ['comentariosController']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Comentarios Controller id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comentariosController = $this->ComentariosController->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comentariosController = $this->ComentariosController->patchEntity($comentariosController, $this->request->data);
            if ($this->ComentariosController->save($comentariosController)) {
                $this->Flash->success(__('The comentarios controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comentarios controller could not be saved. Please, try again.'));
        }
        $this->set(compact('comentariosController'));
        $this->set('_serialize', ['comentariosController']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Comentarios Controller id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comentariosController = $this->ComentariosController->get($id);
        if ($this->ComentariosController->delete($comentariosController)) {
            $this->Flash->success(__('The comentarios controller has been deleted.'));
        } else {
            $this->Flash->error(__('The comentarios controller could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
