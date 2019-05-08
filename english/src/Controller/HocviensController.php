<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hocviens Controller
 *
 * @property \App\Model\Table\HocviensTable $Hocviens
 *
 * @method \App\Model\Entity\Hocvien[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HocviensController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $hocviens = $this->paginate($this->Hocviens);

        $this->set(compact('hocviens'));
    }

    /**
     * View method
     *
     * @param string|null $id Hocvien id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hocvien = $this->Hocviens->get($id, [
            'contain' => []
        ]);

        $this->set('hocvien', $hocvien);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hocvien = $this->Hocviens->newEntity();
        if ($this->request->is('post')) {
            $hocvien = $this->Hocviens->patchEntity($hocvien, $this->request->getData());
            if ($this->Hocviens->save($hocvien)) {
                $this->Flash->success(__('The hocvien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hocvien could not be saved. Please, try again.'));
        }
        $this->set(compact('hocvien'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hocvien id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hocvien = $this->Hocviens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hocvien = $this->Hocviens->patchEntity($hocvien, $this->request->getData());
            if ($this->Hocviens->save($hocvien)) {
                $this->Flash->success(__('The hocvien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hocvien could not be saved. Please, try again.'));
        }
        $this->set(compact('hocvien'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hocvien id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hocvien = $this->Hocviens->get($id);
        if ($this->Hocviens->delete($hocvien)) {
            $this->Flash->success(__('The hocvien has been deleted.'));
        } else {
            $this->Flash->error(__('The hocvien could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
