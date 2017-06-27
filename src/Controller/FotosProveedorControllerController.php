<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FotosProveedorController Controller
 *
 * @property \App\Model\Table\FotosProveedorControllerTable $FotosProveedorController
 */
class FotosProveedorControllerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $fotosProveedorController = $this->paginate($this->FotosProveedorController);

        $this->set(compact('fotosProveedorController'));
        $this->set('_serialize', ['fotosProveedorController']);
    }

    /**
     * View method
     *
     * @param string|null $id Fotos Proveedor Controller id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fotosProveedorController = $this->FotosProveedorController->get($id, [
            'contain' => []
        ]);

        $this->set('fotosProveedorController', $fotosProveedorController);
        $this->set('_serialize', ['fotosProveedorController']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fotosProveedorController = $this->FotosProveedorController->newEntity();
        if ($this->request->is('post')) {
            $fotosProveedorController = $this->FotosProveedorController->patchEntity($fotosProveedorController, $this->request->data);
            if ($this->FotosProveedorController->save($fotosProveedorController)) {
                $this->Flash->success(__('The fotos proveedor controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fotos proveedor controller could not be saved. Please, try again.'));
        }
        $this->set(compact('fotosProveedorController'));
        $this->set('_serialize', ['fotosProveedorController']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fotos Proveedor Controller id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fotosProveedorController = $this->FotosProveedorController->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fotosProveedorController = $this->FotosProveedorController->patchEntity($fotosProveedorController, $this->request->data);
            if ($this->FotosProveedorController->save($fotosProveedorController)) {
                $this->Flash->success(__('The fotos proveedor controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fotos proveedor controller could not be saved. Please, try again.'));
        }
        $this->set(compact('fotosProveedorController'));
        $this->set('_serialize', ['fotosProveedorController']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fotos Proveedor Controller id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fotosProveedorController = $this->FotosProveedorController->get($id);
        if ($this->FotosProveedorController->delete($fotosProveedorController)) {
            $this->Flash->success(__('The fotos proveedor controller has been deleted.'));
        } else {
            $this->Flash->error(__('The fotos proveedor controller could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
