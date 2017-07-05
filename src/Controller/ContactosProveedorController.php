<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContactosProveedor Controller
 *
 * @property \App\Model\Table\ContactosProveedorTable $ContactosProveedor
 */
class ContactosProveedorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $contactosProveedor = $this->paginate($this->ContactosProveedor);

        $this->set(compact('contactosProveedor'));
        $this->set('_serialize', ['contactosProveedor']);
    }

    /**
     * View method
     *
     * @param string|null $id Contactos Proveedor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactosProveedor = $this->ContactosProveedor->get($id, [
            'contain' => []
        ]);

        $this->set('contactosProveedor', $contactosProveedor);
        $this->set('_serialize', ['contactosProveedor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactosProveedor = $this->ContactosProveedor->newEntity();
        if ($this->request->is('post')) {
            $contactosProveedor = $this->ContactosProveedor->patchEntity($contactosProveedor, $this->request->data);
            if ($this->ContactosProveedor->save($contactosProveedor)) {
                $this->Flash->success(__('The contactos proveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contactos proveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('contactosProveedor'));
        $this->set('_serialize', ['contactosProveedor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contactos Proveedor id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactosProveedor = $this->ContactosProveedor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactosProveedor = $this->ContactosProveedor->patchEntity($contactosProveedor, $this->request->data);
            if ($this->ContactosProveedor->save($contactosProveedor)) {
                $this->Flash->success(__('The contactos proveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contactos proveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('contactosProveedor'));
        $this->set('_serialize', ['contactosProveedor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contactos Proveedor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactosProveedor = $this->ContactosProveedor->get($id);
        if ($this->ContactosProveedor->delete($contactosProveedor)) {
            $this->Flash->success(__('The contactos proveedor has been deleted.'));
        } else {
            $this->Flash->error(__('The contactos proveedor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
