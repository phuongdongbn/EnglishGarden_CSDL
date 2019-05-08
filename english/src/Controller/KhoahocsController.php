<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Khoahocs Controller
 *
 * @property \App\Model\Table\KhoahocsTable $Khoahocs
 *
 * @method \App\Model\Entity\Khoahoc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KhoahocsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $khoahocs = $this->paginate($this->Khoahocs);

        $this->set(compact('khoahocs'));
    }

    /**
     * View method
     *
     * @param string|null $id Khoahoc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $khoahoc = $this->Khoahocs->get($id, [
            'contain' => []
        ]);

        $this->set('khoahoc', $khoahoc);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $khoahoc = $this->Khoahocs->newEntity();
        if ($this->request->is('post')) {
            $khoahoc = $this->Khoahocs->patchEntity($khoahoc, $this->request->getData());
            if ($this->Khoahocs->save($khoahoc)) {
                $this->Flash->success(__('The khoahoc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The khoahoc could not be saved. Please, try again.'));
        }
        $this->set(compact('khoahoc'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Khoahoc id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $khoahoc = $this->Khoahocs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $khoahoc = $this->Khoahocs->patchEntity($khoahoc, $this->request->getData());
            if ($this->Khoahocs->save($khoahoc)) {
                $this->Flash->success(__('The khoahoc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The khoahoc could not be saved. Please, try again.'));
        }
        $this->set(compact('khoahoc'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Khoahoc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $khoahoc = $this->Khoahocs->get($id);
        if ($this->Khoahocs->delete($khoahoc)) {
            $this->Flash->success(__('The khoahoc has been deleted.'));
        } else {
            $this->Flash->error(__('The khoahoc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
