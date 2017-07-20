<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriasProveedor Controller
 *
 * @property \App\Model\Table\CategoriasProveedorTable $CategoriasProveedor
 */
class CategoriasProveedorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $categoriasProveedor = $this->paginate($this->CategoriasProveedor);

        $this->set(compact('categoriasProveedor'));
        $this->set('_serialize', ['categoriasProveedor']);
    }

    /**
     * View method
     *
     * @param string|null $id Categorias Proveedor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriasProveedor = $this->CategoriasProveedor->get($id, [
            'contain' => []
        ]);

        $this->set('categoriasProveedor', $categoriasProveedor);
        $this->set('_serialize', ['categoriasProveedor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriasProveedor = $this->CategoriasProveedor->newEntity();
        if ($this->request->is('post')) {
            $categoriasProveedor = $this->CategoriasProveedor->patchEntity($categoriasProveedor, $this->request->data);
            if ($this->CategoriasProveedor->save($categoriasProveedor)) {
                $this->Flash->success(__('The categorias proveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias proveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriasProveedor'));
        $this->set('_serialize', ['categoriasProveedor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorias Proveedor id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriasProveedor = $this->CategoriasProveedor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriasProveedor = $this->CategoriasProveedor->patchEntity($categoriasProveedor, $this->request->data);
            if ($this->CategoriasProveedor->save($categoriasProveedor)) {
                $this->Flash->success(__('The categorias proveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias proveedor could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriasProveedor'));
        $this->set('_serialize', ['categoriasProveedor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorias Proveedor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriasProveedor = $this->CategoriasProveedor->get($id);
        if ($this->CategoriasProveedor->delete($categoriasProveedor)) {
            $this->Flash->success(__('The categorias proveedor has been deleted.'));
        } else {
            $this->Flash->error(__('The categorias proveedor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    /*
    public function search($search = null)
        {
                // Action logic goes here.
                 if ($this->request->is('post')) {
                $pes = '%'.$this->request->data('search').'%';
                $categoriasProveedor = $categoriasProveedor->where(['OR' => ['nombre LIKE' => $pes, 'categorias LIKE' => $pes]]);
            }
        }*/
        
      
        
        
   
}
