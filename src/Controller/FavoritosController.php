<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Favoritos Controller
 *
 * @property \App\Model\Table\FavoritosTable $Favoritos
 */
class FavoritosController extends AppController
{


    public function isAuthorized($usuario)
    {
            if(in_array($this->request->action, ['add', 'index']))
            {
                return true;
            }
            if (in_array($this->request->action, ['edit', 'delete']))
            {
                $id = $this->request->params['pass'][0];
                $favorito = $this->Favoritos->get($id);
                if ($favorito->nombreUsuario == $usuario['id'])
                {
                    return true;
                }
            }
        
        return parent::isAuthorized($usuario);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
     
      /* $this->loadModel ('Proveedores');
        $proveedores2= $this->Proveedores->find('all';
        */
        
        /*debug($providers
                ->find()
                ->contain(['Favoritos'])
                ->select(['Proveedores.nombre', 'idProveedor'])
                ->where(['Proveedores.id' => $this->idProveedor]));*/
    public function index()
    {
        $providers = TableRegistry::get('Proveedores');
        $favourites = TableRegistry::get('Favoritos');
        
        $this->loadModel('Proveedores'); 
        
       
                
        $query = $this->Favoritos->find()
                                 ->contain(['Proveedores'])
                                 ->select(['Proveedores.nombre'])
                                 ->where(['Favoritos.nombreUsuario' => $this->Auth->User('id')]);

        debug($query);
        foreach ($query as $article) {
            debug($article->created);
        }
        $favoritos = $this->paginate($query);
        //$favoritos = $query->toArray();
        //debug($favoritos);
        $this->set('favoritos', $favoritos);
        
        /*$query = $providers->find()
        ->select(['Proveedores.nombre'])
        
        ->where(['Proveedores.id' => $this->idProveedor, 'Favoritos.nombreUsuario' => $this->Auth->User('id')])
        ->order(['Favoritos.id' => 'desc']);*/
        
        
        /*$this->set('favoritos', $this->Favoritos->find('all', ['contain' => ['favoritos.idProveedor'], 'order' => ['favoritos.name' => 'ASC']]));

        $proveedor = $providers->find('all', ['conditions' => ['Proveedores.nombre' => 'favoritos']]);
        //$this->set('page', $page->first());

        $this->set(compact('favoritos','proveedores'));
        $this->set('_serialize', ['favoritos','proveedores']);*/
        
        //Best result so far
        /*$query = $providers->find()->contain(['Favoritos' => function ($q) {
                    return $q->where(['Favoritos.nombreUsuario' => $this->Auth->User('id')]);
                },
                                            'Proveedores' => function ($q) {
                    return $q->where(['Proveedores.id' => 'Favoritos.idProveedor']);
                }]);*/
        
        //$this->paginate = [$query, 'maxLimit' => 10];
        
        //Best result so far
        /*$this->paginate = [
            'conditions'  => ['nombreUsuario' => $this->Auth->User('id')],
            'order' => ['id' => 'desc']
        ];*/
        
        //Best result so far
        /*$favoritos = $this->paginate($this->Favoritos);
        $this->set('favoritos', $favoritos);*/
        
        
        //$this->set(compact('favoritos'));
        /*$this->set('_serialize', ['favoritos']);*/
    }

    /**
     * View method
     *
     * @param string|null $id Favorito id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $favorito = $this->Favoritos->get($id, [
            'contain' => ['Usuarios', 'Proveedores']
        ]);

        $this->set('favorito', $favorito);
        $this->set('_serialize', ['favorito']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $favorito = $this->Favoritos->newEntity();
        if ($this->request->is('post')) {
            $favorito = $this->Favoritos->patchEntity($favorito, $this->request->data);
            if ($this->Favoritos->save($favorito)) {
                $this->Flash->success(__('El proveedor ha sido guardado como favorito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El proveedor no pudo ser guardado como favorito. Por favor inténtelo de nuevo.'));
        }
        $usuarios = $this->Favoritos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('favorito', 'usuarios'));
        $this->set('_serialize', ['favorito']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Favorito id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $favorito = $this->Favoritos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $favorito = $this->Favoritos->patchEntity($favorito, $this->request->data);
            if ($this->Favoritos->save($favorito)) {
                $this->Flash->success(__('The favorito has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The favorito could not be saved. Please, try again.'));
        }
        $usuarios = $this->Favoritos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('favorito', 'usuarios'));
        $this->set('_serialize', ['favorito']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Favorito id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $favorito = $this->Favoritos->get($id);
        if ($this->Favoritos->delete($favorito)) {
            $this->Flash->success(__('El favorito fue eliminado.'));
        } else {
            $this->Flash->error(__('El proveedor no pudo ser eliminado como favorito. Por favor inténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
