<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * JourJournal Controller
 *
 * @property \App\Model\Table\JourJournalTable $JourJournal
 * @method \App\Model\Entity\JourJournal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JourJournalController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $jourJournal = $this->paginate($this->JourJournal);

        $this->set(compact('jourJournal'));
    }

    /**
     * View method
     *
     * @param string|null $id Jour Journal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jourJournal = $this->JourJournal->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('jourJournal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jourJournal = $this->JourJournal->newEmptyEntity();
        if ($this->request->is('post')) {
            $jourJournal = $this->JourJournal->patchEntity($jourJournal, $this->request->getData());
            if ($this->JourJournal->save($jourJournal)) {
                $this->Flash->success(__('The jour journal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jour journal could not be saved. Please, try again.'));
        }
        $this->set(compact('jourJournal'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jour Journal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jourJournal = $this->JourJournal->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jourJournal = $this->JourJournal->patchEntity($jourJournal, $this->request->getData());
            if ($this->JourJournal->save($jourJournal)) {
                $this->Flash->success(__('The jour journal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jour journal could not be saved. Please, try again.'));
        }
        $this->set(compact('jourJournal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jour Journal id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jourJournal = $this->JourJournal->get($id);
        if ($this->JourJournal->delete($jourJournal)) {
            $this->Flash->success(__('The jour journal has been deleted.'));
        } else {
            $this->Flash->error(__('The jour journal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
