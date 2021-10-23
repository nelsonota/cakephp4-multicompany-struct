<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cliente Controller
 *
 * @property \App\Model\Table\ClieClienteTable $ClieCliente
 * @method \App\Model\Entity\ClieCliente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClienteController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('ClieCliente');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['add']);
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $clieCliente = $this->paginate($this->ClieCliente);

        $this->set(compact('clieCliente'));
    }

    /**
     * View method
     *
     * @param string|null $id Clie Cliente id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clieCliente = $this->ClieCliente->get($id, [
            'contain' => ['UsuaUsuario'],
        ]);

        $this->set(compact('clieCliente'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clieCliente = $this->ClieCliente->newEmptyEntity();
        if ($this->request->is('post')) {
            $clieCliente = $this->ClieCliente->patchEntity($clieCliente, $this->request->getData());
            if ($this->ClieCliente->save($clieCliente)) {
                $this->Flash->success(__('The clie cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clie cliente could not be saved. Please, try again.'));
        }
        $this->set(compact('clieCliente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Clie Cliente id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clieCliente = $this->ClieCliente->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clieCliente = $this->ClieCliente->patchEntity($clieCliente, $this->request->getData());
            if ($this->ClieCliente->save($clieCliente)) {
                $this->Flash->success(__('The clie cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clie cliente could not be saved. Please, try again.'));
        }
        $this->set(compact('clieCliente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Clie Cliente id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clieCliente = $this->ClieCliente->get($id);
        if ($this->ClieCliente->delete($clieCliente)) {
            $this->Flash->success(__('The clie cliente has been deleted.'));
        } else {
            $this->Flash->error(__('The clie cliente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
