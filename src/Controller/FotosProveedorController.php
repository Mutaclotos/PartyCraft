<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FotosProveedor Controller
 *
 * @property \App\Model\Table\FotosProveedorTable $FotosProveedor
 */
class FotosProveedorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $fotosProveedor = $this->paginate($this->FotosProveedor);

        $this->set(compact('fotosProveedor'));
        $this->set('_serialize', ['fotosProveedor']);
    }

    /**
     * View method
     *
     * @param string|null $id Fotos Proveedor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fotosProveedor = $this->FotosProveedor->get($id, [
            'contain' => []
        ]);

        $this->set('fotosProveedor', $fotosProveedor);
        $this->set('_serialize', ['fotosProveedor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fotosProveedor = $this->FotosProveedor->newEntity();
        if ($this->request->is('post')) {
            $fotosProveedor = $this->FotosProveedor->patchEntity($fotosProveedor, $this->request->data);
            if ($this->FotosProveedor->save($fotosProveedor)) {
                $this->Flash->success(__('The fotos proveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fotos proveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('fotosProveedor'));
        $this->set('_serialize', ['fotosProveedor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fotos Proveedor id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fotosProveedor = $this->FotosProveedor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fotosProveedor = $this->FotosProveedor->patchEntity($fotosProveedor, $this->request->data);
            if ($this->FotosProveedor->save($fotosProveedor)) {
                $this->Flash->success(__('The fotos proveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fotos proveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('fotosProveedor'));
        $this->set('_serialize', ['fotosProveedor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fotos Proveedor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fotosProveedor = $this->FotosProveedor->get($id);
        if ($this->FotosProveedor->delete($fotosProveedor)) {
            $this->Flash->success(__('The fotos proveedor has been deleted.'));
        } else {
            $this->Flash->error(__('The fotos proveedor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
