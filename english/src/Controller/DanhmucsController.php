<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Danhmucs Controller
 *
 * @property \App\Model\Table\DanhmucsTable $Danhmucs
 *
 * @method \App\Model\Entity\Danhmuc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DanhmucsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $danhmucs = $this->paginate($this->Danhmucs);

        $this->set(compact('danhmucs'));
    }

    /**
     * View method
     *
     * @param string|null $id Danhmuc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $danhmuc = $this->Danhmucs->get($id, [
            'contain' => []
        ]);

        $this->set('danhmuc', $danhmuc);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $danhmuc = $this->Danhmucs->newEntity();
        if ($this->request->is('post')) {
            $danhmuc = $this->Danhmucs->patchEntity($danhmuc, $this->request->getData());
            if ($this->Danhmucs->save($danhmuc)) {
                $this->Flash->success(__('The danhmuc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The danhmuc could not be saved. Please, try again.'));
        }
        $this->set(compact('danhmuc'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Danhmuc id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $danhmuc = $this->Danhmucs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $danhmuc = $this->Danhmucs->patchEntity($danhmuc, $this->request->getData());
            if ($this->Danhmucs->save($danhmuc)) {
                $this->Flash->success(__('The danhmuc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The danhmuc could not be saved. Please, try again.'));
        }
        $this->set(compact('danhmuc'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Danhmuc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $danhmuc = $this->Danhmucs->get($id);
        if ($this->Danhmucs->delete($danhmuc)) {
            $this->Flash->success(__('The danhmuc has been deleted.'));
        } else {
            $this->Flash->error(__('The danhmuc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
