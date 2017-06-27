<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriasController Controller
 *
 * @property \App\Model\Table\CategoriasControllerTable $CategoriasController
 */
class CategoriasControllerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $categoriasController = $this->paginate($this->CategoriasController);

        $this->set(compact('categoriasController'));
        $this->set('_serialize', ['categoriasController']);
    }

    /**
     * View method
     *
     * @param string|null $id Categorias Controller id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriasController = $this->CategoriasController->get($id, [
            'contain' => []
        ]);

        $this->set('categoriasController', $categoriasController);
        $this->set('_serialize', ['categoriasController']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriasController = $this->CategoriasController->newEntity();
        if ($this->request->is('post')) {
            $categoriasController = $this->CategoriasController->patchEntity($categoriasController, $this->request->data);
            if ($this->CategoriasController->save($categoriasController)) {
                $this->Flash->success(__('The categorias controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias controller could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriasController'));
        $this->set('_serialize', ['categoriasController']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorias Controller id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriasController = $this->CategoriasController->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriasController = $this->CategoriasController->patchEntity($categoriasController, $this->request->data);
            if ($this->CategoriasController->save($categoriasController)) {
                $this->Flash->success(__('The categorias controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias controller could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriasController'));
        $this->set('_serialize', ['categoriasController']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorias Controller id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriasController = $this->CategoriasController->get($id);
        if ($this->CategoriasController->delete($categoriasController)) {
            $this->Flash->success(__('The categorias controller has been deleted.'));
        } else {
            $this->Flash->error(__('The categorias controller could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
