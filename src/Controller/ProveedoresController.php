<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Proveedores Controller
 *
 * @property \App\Model\Table\ProveedoresTable $Proveedores
 */
class ProveedoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->active_item = "index";
        $this->loadModel('Categorias'); 
        
        
        $proveedores = $this->paginate($this->Proveedores);
        $categorias = $this->paginate($this->Categorias);

        $this->set('proveedores', $proveedores);
        $this->set('categorias', $categorias);
        $this->set(compact('proveedores'));
        $this->set('_serialize', ['proveedores']);
    }
    

    /**
     * View method
     *
     * @param string|null $id Proveedore id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->active_item = "view";
        $this->loadModel('Favoritos'); 
        $this->loadModel('FotosProveedor'); 
        $this->loadModel('ContactosProveedor'); 
        
        //Consulta para obtener los contactos del proveedor
        $query = $this->ContactosProveedor->find()
                                             ->contain(['Proveedores'])
                                             ->select(['ContactosProveedor.id',
                                             'ContactosProveedor.descripcion', 'ContactosProveedor.contacto'])
                                             ->where(['Proveedores.id' => $id]);
        
        //debug($query);
        
        $this->set('contactos', $query);
        
        //Consulta para determinar si el usuario ya tiene a un proveedor como favorito
        $query = $this->Favoritos->find()
                                 ->contain(['Proveedores'])
                                 ->select(['Favoritos.id'])
                                 ->where(['Proveedores.id' => $id ,'Favoritos.nombreUsuario' => $this->Auth->User('id')]);
        
        //debug($query);
        $results = $query->all();
        $numResults = count($results);
        $this->set('numResults', $numResults);
        
        //Consulta para cargar las imagenes del carrusel del proveedor
        
        $query = $this->FotosProveedor->find()
                                 ->contain(['Proveedores'])
                                 ->select(['FotosProveedor.id', 'FotosProveedor.foto', 'FotosProveedor.descripcion'])
                                 ->where(['Proveedores.id' => $id]);
        
        //debug($query);
        
        $this->set('providerPics', $query);
        
        
        $proveedor = $this->Proveedores->get($id, [
            'contain' => []
        ]);

        $this->set('proveedor', $proveedor);
        $this->set('_serialize', ['proveedor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proveedore = $this->Proveedores->newEntity();
        if ($this->request->is('post')) {
            $proveedore = $this->Proveedores->patchEntity($proveedore, $this->request->data);
            if ($this->Proveedores->save($proveedore)) {
                $this->Flash->success(__('The proveedore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedore could not be saved. Please, try again.'));
        }
        $this->set(compact('proveedore'));
        $this->set('_serialize', ['proveedore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proveedore id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proveedore = $this->Proveedores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proveedore = $this->Proveedores->patchEntity($proveedore, $this->request->data);
            if ($this->Proveedores->save($proveedore)) {
                $this->Flash->success(__('The proveedore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedore could not be saved. Please, try again.'));
        }
        $this->set(compact('proveedore'));
        $this->set('_serialize', ['proveedore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proveedore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proveedore = $this->Proveedores->get($id);
        if ($this->Proveedores->delete($proveedore)) {
            $this->Flash->success(__('The proveedore has been deleted.'));
        } else {
            $this->Flash->error(__('The proveedore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
