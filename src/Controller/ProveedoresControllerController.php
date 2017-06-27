<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProveedoresController Controller
 *
 * @property \App\Model\Table\ProveedoresControllerTable $ProveedoresController
 */
class ProveedoresControllerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $proveedoresController = $this->paginate($this->ProveedoresController);

        $this->set(compact('proveedoresController'));
        $this->set('_serialize', ['proveedoresController']);
    }

    /**
     * View method
     *
     * @param string|null $id Proveedores Controller id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proveedoresController = $this->ProveedoresController->get($id, [
            'contain' => []
        ]);

        $this->set('proveedoresController', $proveedoresController);
        $this->set('_serialize', ['proveedoresController']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proveedoresController = $this->ProveedoresController->newEntity();
        if ($this->request->is('post')) {
            $proveedoresController = $this->ProveedoresController->patchEntity($proveedoresController, $this->request->data);
            if ($this->ProveedoresController->save($proveedoresController)) {
                $this->Flash->success(__('The proveedores controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedores controller could not be saved. Please, try again.'));
        }
        $this->set(compact('proveedoresController'));
        $this->set('_serialize', ['proveedoresController']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proveedores Controller id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proveedoresController = $this->ProveedoresController->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proveedoresController = $this->ProveedoresController->patchEntity($proveedoresController, $this->request->data);
            if ($this->ProveedoresController->save($proveedoresController)) {
                $this->Flash->success(__('The proveedores controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedores controller could not be saved. Please, try again.'));
        }
        $this->set(compact('proveedoresController'));
        $this->set('_serialize', ['proveedoresController']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proveedores Controller id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proveedoresController = $this->ProveedoresController->get($id);
        if ($this->ProveedoresController->delete($proveedoresController)) {
            $this->Flash->success(__('The proveedores controller has been deleted.'));
        } else {
            $this->Flash->error(__('The proveedores controller could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
