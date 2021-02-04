<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PageStatuses Controller
 *
 * @property \App\Model\Table\PageStatusesTable $PageStatuses
 * @method \App\Model\Entity\PageStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PageStatusesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $pageStatuses = $this->paginate($this->PageStatuses);

        $this->set(compact('pageStatuses'));
    }

    /**
     * View method
     *
     * @param string|null $id Page Status id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pageStatus = $this->PageStatuses->get($id, [
            'contain' => ['Pages'],
        ]);

        $this->set(compact('pageStatus'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pageStatus = $this->PageStatuses->newEmptyEntity();
        if ($this->request->is('post')) {
            $pageStatus = $this->PageStatuses->patchEntity($pageStatus, $this->request->getData());
            if ($this->PageStatuses->save($pageStatus)) {
                $this->Flash->successAdmin(__('The page status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->errorAdmin(__('The page status could not be saved. Please, try again.'));
        }
        $this->set(compact('pageStatus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Page Status id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pageStatus = $this->PageStatuses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pageStatus = $this->PageStatuses->patchEntity($pageStatus, $this->request->getData());
            if ($this->PageStatuses->save($pageStatus)) {
                $this->Flash->successAdmin(__('The page status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->errorAdmin(__('The page status could not be saved. Please, try again.'));
        }
        $this->set(compact('pageStatus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Page Status id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pageStatus = $this->PageStatuses->get($id);
        if ($this->PageStatuses->delete($pageStatus)) {
            $this->Flash->successAdmin(__('The page status has been deleted.'));
        } else {
            $this->Flash->errorAdmin(__('The page status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
