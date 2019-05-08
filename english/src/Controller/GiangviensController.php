<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Giangviens Controller
 *
 * @property \App\Model\Table\GiangviensTable $Giangviens
 *
 * @method \App\Model\Entity\Giangvien[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GiangviensController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $giangviens = $this->paginate($this->Giangviens);

        $this->set(compact('giangviens'));
    }

    /**
     * View method
     *
     * @param string|null $id Giangvien id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $giangvien = $this->Giangviens->get($id, [
            'contain' => []
        ]);

        $this->set('giangvien', $giangvien);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $giangvien = $this->Giangviens->newEntity();
        if ($this->request->is('post')) {
            $giangvien = $this->Giangviens->patchEntity($giangvien, $this->request->getData());
            if ($this->Giangviens->save($giangvien)) {
                $this->Flash->success(__('The giangvien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The giangvien could not be saved. Please, try again.'));
        }
        $this->set(compact('giangvien'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Giangvien id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $giangvien = $this->Giangviens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $giangvien = $this->Giangviens->patchEntity($giangvien, $this->request->getData());
            if ($this->Giangviens->save($giangvien)) {
                $this->Flash->success(__('The giangvien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The giangvien could not be saved. Please, try again.'));
        }
        $this->set(compact('giangvien'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Giangvien id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $giangvien = $this->Giangviens->get($id);
        if ($this->Giangviens->delete($giangvien)) {
            $this->Flash->success(__('The giangvien has been deleted.'));
        } else {
            $this->Flash->error(__('The giangvien could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
