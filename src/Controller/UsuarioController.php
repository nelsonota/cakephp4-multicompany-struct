<?php
declare(strict_types=1);

namespace App\Controller;

use Firebase\JWT\JWT;

/**
 * Usuario Controller
 *
 * @property \App\Model\Table\UsuaUsuarioTable $UsuaUsuario
 * @method \App\Model\Entity\UsuaUsuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuarioController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('UsuaUsuario');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login']);
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Usuario', 'action' => 'login']);
        }
    }

    public function login()
    {   
        if ($this->RequestHandler->accepts('json')) {
            $this->jwtLogin();
        } else {
            $this->htmlLogin();
        }        
    }

    private function htmlLogin()
    {
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            // redirect to /articles after login success
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Usuario',
                'action' => 'index',
            ]);

            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
    }

    private function jwtLogin()
    {
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            $privateKey = file_get_contents(CONFIG . 'jwt.key');
            $user = $result->getData();
            $payload = [
                'iss' => 'portal-crawler',
                'sub' => $user->usua_codigo,
                'exp' => time() + 6000,
            ];
            $json = [
                'token' => JWT::encode($payload, $privateKey, 'RS256'),
            ];
        } else {
            $this->response = $this->response->withStatus(401);
            $json = [];
        }
        $this->set(compact('json'));
        $this->viewBuilder()->setOption('serialize', 'json');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $usuaUsuario = $this->paginate($this->UsuaUsuario);

        if ($this->RequestHandler->accepts('json')) {
            $data = [];
            foreach ($usuaUsuario as $key => $value) {
                $data[] = $value->toJson();
            }
            $this->set([
                'data' => $data,
                'paging' => $this->request->getAttribute('paging')['UsuaUsuario'],
                '_serialize' => ['success','data', 'paging']
            ]);
        } else {
            $this->set(compact('usuaUsuario'));
        }
        
    }

    /**
     * View method
     *
     * @param string|null $id Usua Usuario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuaUsuario = $this->UsuaUsuario->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('usuaUsuario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuaUsuario = $this->UsuaUsuario->newEmptyEntity();
        if ($this->request->is('post')) {
            $usuaUsuario = $this->UsuaUsuario->patchEntity($usuaUsuario, $this->request->getData());
            if ($this->UsuaUsuario->save($usuaUsuario)) {
                $this->Flash->success(__('The usua usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usua usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('usuaUsuario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usua Usuario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuaUsuario = $this->UsuaUsuario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuaUsuario = $this->UsuaUsuario->patchEntity($usuaUsuario, $this->request->getData());
            if ($this->UsuaUsuario->save($usuaUsuario)) {
                $this->Flash->success(__('The usua usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usua usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('usuaUsuario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usua Usuario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuaUsuario = $this->UsuaUsuario->get($id);
        if ($this->UsuaUsuario->delete($usuaUsuario)) {
            $this->Flash->success(__('The usua usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The usua usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
