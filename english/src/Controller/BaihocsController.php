<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Baihocs Controller
 *
 * @property \App\Model\Table\BaihocsTable $Baihocs
 *
 * @method \App\Model\Entity\Baihoc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BaihocsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $baihocs = $this->paginate($this->Baihocs);

        $this->set(compact('baihocs'));
    }

    /**
     * View method
     *
     * @param string|null $id Baihoc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $baihoc = $this->Baihocs->get($id, [
            'contain' => []
        ]);

        $this->set('baihoc', $baihoc);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $baihoc = $this->Baihocs->newEntity();
        if ($this->request->is('post')) {
            $baihoc = $this->Baihocs->patchEntity($baihoc, $this->request->getData());
            if ($this->Baihocs->save($baihoc)) {
                $this->Flash->success(__('The baihoc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The baihoc could not be saved. Please, try again.'));
        }
        $this->set(compact('baihoc'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Baihoc id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $baihoc = $this->Baihocs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $baihoc = $this->Baihocs->patchEntity($baihoc, $this->request->getData());
            if ($this->Baihocs->save($baihoc)) {
                $this->Flash->success(__('The baihoc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The baihoc could not be saved. Please, try again.'));
        }
        $this->set(compact('baihoc'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Baihoc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $baihoc = $this->Baihocs->get($id);
        if ($this->Baihocs->delete($baihoc)) {
            $this->Flash->success(__('The baihoc has been deleted.'));
        } else {
            $this->Flash->error(__('The baihoc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
