<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AssetTypes Controller
 *
 * @property \App\Model\Table\AssetTypesTable $AssetTypes
 */
class AssetTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $assetTypes = $this->paginate($this->AssetTypes);

        $this->set(compact('assetTypes'));
        $this->set('_serialize', ['assetTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Asset Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assetType = $this->AssetTypes->get($id, [
            'contain' => ['AssetModels']
        ]);

        $this->set('assetType', $assetType);
        $this->set('_serialize', ['assetType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assetType = $this->AssetTypes->newEntity();
        if ($this->request->is('post')) {
            $assetType = $this->AssetTypes->patchEntity($assetType, $this->request->data);
            if ($this->AssetTypes->save($assetType)) {
                $this->Flash->success(__('The asset type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asset type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('assetType'));
        $this->set('_serialize', ['assetType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Asset Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assetType = $this->AssetTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assetType = $this->AssetTypes->patchEntity($assetType, $this->request->data);
            if ($this->AssetTypes->save($assetType)) {
                $this->Flash->success(__('The asset type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asset type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('assetType'));
        $this->set('_serialize', ['assetType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Asset Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assetType = $this->AssetTypes->get($id);
        if ($this->AssetTypes->delete($assetType)) {
            $this->Flash->success(__('The asset type has been deleted.'));
        } else {
            $this->Flash->error(__('The asset type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
