<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 */
class UsuariosController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        //Por ahora se permite acceder todo sin autenticacion. Luego cambiamos esto.
        $this->Auth->allow(['index', 'view', 'display', 'home', 'add', 'edit']);
    }

    public function login()
    {
        if($this->request->is('post'))
        {
            $user = $this->Auth->identify();
            if($user)
            {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else
            {
                $this->Flash->error('Datos invalidos. Por favor inténtelo nuevamente.', ['key' => 'auth']);
            }
        }
    }
    
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    
    public function home()
    {
        $this->render();
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->active_item = "index";
        $usuarios = $this->paginate($this->Usuarios);
        //$usuarios = $this->Usuarios->find('all');
        $this->set('usuarios', $usuarios);
        
        
        /*$this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);*/
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id)
    {
        /*$usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);

        $this->set('usuario', $usuario);
        $this->set('_serialize', ['usuario']);*/
        echo "Vista de usuarios " . $id;
        exit();
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->active_item = "add";
        $usuario = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {
            debug($this->request->data);
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            debug($usuario); die;
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('El usuario ha sido guardado.'));

                return $this->redirect(['controller' => 'Usuarios','action' => 'index']);
            }
            $this->Flash->error(__('El usuario no pudo ser guardado. Por favor, inténtelo nuevamente.'));
        }
        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->active_item = "edit";
        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('El perfil fue modificado exitósamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El perfil no pudo ser modificado. Por favor, inténtelo nuevamente.'));
        }
        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('The usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
