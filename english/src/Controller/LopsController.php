<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lops Controller
 *
 * @property \App\Model\Table\LopsTable $Lops
 *
 * @method \App\Model\Entity\Lop[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LopsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $lops = $this->paginate($this->Lops);

        $this->set(compact('lops'));
    }

    /**
     * View method
     *
     * @param string|null $id Lop id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lop = $this->Lops->get($id, [
            'contain' => []
        ]);

        $this->set('lop', $lop);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lop = $this->Lops->newEntity();
        if ($this->request->is('post')) {
            $lop = $this->Lops->patchEntity($lop, $this->request->getData());
            if ($this->Lops->save($lop)) {
                $this->Flash->success(__('The lop has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lop could not be saved. Please, try again.'));
        }
        $this->set(compact('lop'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lop id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lop = $this->Lops->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lop = $this->Lops->patchEntity($lop, $this->request->getData());
            if ($this->Lops->save($lop)) {
                $this->Flash->success(__('The lop has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lop could not be saved. Please, try again.'));
        }
        $this->set(compact('lop'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lop id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lop = $this->Lops->get($id);
        if ($this->Lops->delete($lop)) {
            $this->Flash->success(__('The lop has been deleted.'));
        } else {
            $this->Flash->error(__('The lop could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
