<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AssetModels Controller
 *
 * @property \App\Model\Table\AssetModelsTable $AssetModels
 */
class AssetModelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Manufacturers', 'AssetTypes']
        ];
        $assetModels = $this->paginate($this->AssetModels);

        $this->set(compact('assetModels'));
        $this->set('_serialize', ['assetModels']);
    }

    /**
     * View method
     *
     * @param string|null $id Asset Model id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assetModel = $this->AssetModels->get($id, [
            'contain' => ['Manufacturers', 'AssetTypes']
        ]);

        $this->set('assetModel', $assetModel);
        $this->set('_serialize', ['assetModel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assetModel = $this->AssetModels->newEntity();
        if ($this->request->is('post')) {
            $assetModel = $this->AssetModels->patchEntity($assetModel, $this->request->data);
            if ($this->AssetModels->save($assetModel)) {
                $this->Flash->success(__('The asset model has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asset model could not be saved. Please, try again.'));
            }
        }
        $manufacturers = $this->AssetModels->Manufacturers->find('list');
        $assetTypes = $this->AssetModels->AssetTypes->find('list');
        $this->set(compact('assetModel', 'manufacturers', 'assetTypes'));
        $this->set('_serialize', ['assetModel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Asset Model id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assetModel = $this->AssetModels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assetModel = $this->AssetModels->patchEntity($assetModel, $this->request->data);
            if ($this->AssetModels->save($assetModel)) {
                $this->Flash->success(__('The asset model has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asset model could not be saved. Please, try again.'));
            }
        }
        $manufacturers = $this->AssetModels->Manufacturers->find('list', ['limit' => 200]);
        $assetTypes = $this->AssetModels->AssetTypes->find('list', ['limit' => 200]);
        $this->set(compact('assetModel', 'manufacturers', 'assetTypes'));
        $this->set('_serialize', ['assetModel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Asset Model id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assetModel = $this->AssetModels->get($id);
        if ($this->AssetModels->delete($assetModel)) {
            $this->Flash->success(__('The asset model has been deleted.'));
        } else {
            $this->Flash->error(__('The asset model could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
