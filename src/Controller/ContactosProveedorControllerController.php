<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContactosProveedorController Controller
 *
 * @property \App\Model\Table\ContactosProveedorControllerTable $ContactosProveedorController
 */
class ContactosProveedorControllerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $contactosProveedorController = $this->paginate($this->ContactosProveedorController);

        $this->set(compact('contactosProveedorController'));
        $this->set('_serialize', ['contactosProveedorController']);
    }

    /**
     * View method
     *
     * @param string|null $id Contactos Proveedor Controller id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactosProveedorController = $this->ContactosProveedorController->get($id, [
            'contain' => []
        ]);

        $this->set('contactosProveedorController', $contactosProveedorController);
        $this->set('_serialize', ['contactosProveedorController']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactosProveedorController = $this->ContactosProveedorController->newEntity();
        if ($this->request->is('post')) {
            $contactosProveedorController = $this->ContactosProveedorController->patchEntity($contactosProveedorController, $this->request->data);
            if ($this->ContactosProveedorController->save($contactosProveedorController)) {
                $this->Flash->success(__('The contactos proveedor controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contactos proveedor controller could not be saved. Please, try again.'));
        }
        $this->set(compact('contactosProveedorController'));
        $this->set('_serialize', ['contactosProveedorController']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contactos Proveedor Controller id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactosProveedorController = $this->ContactosProveedorController->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactosProveedorController = $this->ContactosProveedorController->patchEntity($contactosProveedorController, $this->request->data);
            if ($this->ContactosProveedorController->save($contactosProveedorController)) {
                $this->Flash->success(__('The contactos proveedor controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contactos proveedor controller could not be saved. Please, try again.'));
        }
        $this->set(compact('contactosProveedorController'));
        $this->set('_serialize', ['contactosProveedorController']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contactos Proveedor Controller id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactosProveedorController = $this->ContactosProveedorController->get($id);
        if ($this->ContactosProveedorController->delete($contactosProveedorController)) {
            $this->Flash->success(__('The contactos proveedor controller has been deleted.'));
        } else {
            $this->Flash->error(__('The contactos proveedor controller could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
