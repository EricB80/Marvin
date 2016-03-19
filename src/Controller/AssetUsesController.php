<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AssetUses Controller
 *
 * @property \App\Model\Table\AssetUsesTable $AssetUses
 */
class AssetUsesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $assetUses = $this->paginate($this->AssetUses);

        $this->set(compact('assetUses'));
        $this->set('_serialize', ['assetUses']);
    }

    /**
     * View method
     *
     * @param string|null $id Asset Use id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assetUse = $this->AssetUses->get($id, [
            'contain' => []
        ]);

        $this->set('assetUse', $assetUse);
        $this->set('_serialize', ['assetUse']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assetUse = $this->AssetUses->newEntity();
        if ($this->request->is('post')) {
            $assetUse = $this->AssetUses->patchEntity($assetUse, $this->request->data);
            if ($this->AssetUses->save($assetUse)) {
                $this->Flash->success(__('The asset use has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asset use could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('assetUse'));
        $this->set('_serialize', ['assetUse']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Asset Use id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assetUse = $this->AssetUses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assetUse = $this->AssetUses->patchEntity($assetUse, $this->request->data);
            if ($this->AssetUses->save($assetUse)) {
                $this->Flash->success(__('The asset use has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asset use could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('assetUse'));
        $this->set('_serialize', ['assetUse']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Asset Use id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assetUse = $this->AssetUses->get($id);
        if ($this->AssetUses->delete($assetUse)) {
            $this->Flash->success(__('The asset use has been deleted.'));
        } else {
            $this->Flash->error(__('The asset use could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
