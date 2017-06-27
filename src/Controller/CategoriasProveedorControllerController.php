<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriasProveedorController Controller
 *
 * @property \App\Model\Table\CategoriasProveedorControllerTable $CategoriasProveedorController
 */
class CategoriasProveedorControllerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $categoriasProveedorController = $this->paginate($this->CategoriasProveedorController);

        $this->set(compact('categoriasProveedorController'));
        $this->set('_serialize', ['categoriasProveedorController']);
    }

    /**
     * View method
     *
     * @param string|null $id Categorias Proveedor Controller id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriasProveedorController = $this->CategoriasProveedorController->get($id, [
            'contain' => []
        ]);

        $this->set('categoriasProveedorController', $categoriasProveedorController);
        $this->set('_serialize', ['categoriasProveedorController']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriasProveedorController = $this->CategoriasProveedorController->newEntity();
        if ($this->request->is('post')) {
            $categoriasProveedorController = $this->CategoriasProveedorController->patchEntity($categoriasProveedorController, $this->request->data);
            if ($this->CategoriasProveedorController->save($categoriasProveedorController)) {
                $this->Flash->success(__('The categorias proveedor controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias proveedor controller could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriasProveedorController'));
        $this->set('_serialize', ['categoriasProveedorController']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorias Proveedor Controller id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriasProveedorController = $this->CategoriasProveedorController->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriasProveedorController = $this->CategoriasProveedorController->patchEntity($categoriasProveedorController, $this->request->data);
            if ($this->CategoriasProveedorController->save($categoriasProveedorController)) {
                $this->Flash->success(__('The categorias proveedor controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias proveedor controller could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriasProveedorController'));
        $this->set('_serialize', ['categoriasProveedorController']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorias Proveedor Controller id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriasProveedorController = $this->CategoriasProveedorController->get($id);
        if ($this->CategoriasProveedorController->delete($categoriasProveedorController)) {
            $this->Flash->success(__('The categorias proveedor controller has been deleted.'));
        } else {
            $this->Flash->error(__('The categorias proveedor controller could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
