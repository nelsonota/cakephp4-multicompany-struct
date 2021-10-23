<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * JdetJournalDetail Controller
 *
 * @property \App\Model\Table\JdetJournalDetailTable $JdetJournalDetail
 * @method \App\Model\Entity\JdetJournalDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JdetJournalDetailController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $jdetJournalDetail = $this->paginate($this->JdetJournalDetail);

        $this->set(compact('jdetJournalDetail'));
    }

    /**
     * View method
     *
     * @param string|null $id Jdet Journal Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jdetJournalDetail = $this->JdetJournalDetail->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('jdetJournalDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jdetJournalDetail = $this->JdetJournalDetail->newEmptyEntity();
        if ($this->request->is('post')) {
            $jdetJournalDetail = $this->JdetJournalDetail->patchEntity($jdetJournalDetail, $this->request->getData());
            if ($this->JdetJournalDetail->save($jdetJournalDetail)) {
                $this->Flash->success(__('The jdet journal detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jdet journal detail could not be saved. Please, try again.'));
        }
        $this->set(compact('jdetJournalDetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jdet Journal Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jdetJournalDetail = $this->JdetJournalDetail->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jdetJournalDetail = $this->JdetJournalDetail->patchEntity($jdetJournalDetail, $this->request->getData());
            if ($this->JdetJournalDetail->save($jdetJournalDetail)) {
                $this->Flash->success(__('The jdet journal detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jdet journal detail could not be saved. Please, try again.'));
        }
        $this->set(compact('jdetJournalDetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jdet Journal Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jdetJournalDetail = $this->JdetJournalDetail->get($id);
        if ($this->JdetJournalDetail->delete($jdetJournalDetail)) {
            $this->Flash->success(__('The jdet journal detail has been deleted.'));
        } else {
            $this->Flash->error(__('The jdet journal detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
