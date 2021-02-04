<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Subpages Controller
 *
 * @property \App\Model\Table\SubpagesTable $Subpages
 * @method \App\Model\Entity\Subpage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubpagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pages', 'PageStatuses', 'Tenants'],
        ];
        $subpages = $this->paginate($this->Subpages);

        $this->set(compact('subpages'));
    }

    /**
     * View method
     *
     * @param string|null $id Subpage id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subpage = $this->Subpages->get($id, [
            'contain' => ['Pages', 'PageStatuses', 'Tenants'],
        ]);

        $this->set(compact('subpage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subpage = $this->Subpages->newEmptyEntity();
        if ($this->request->is('post')) {
            $subpage = $this->Subpages->patchEntity($subpage, $this->request->getData());
            if ($this->Subpages->save($subpage)) {
                $this->Flash->successAdmin(__('The subpage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->errorAdmin(__('The subpage could not be saved. Please, try again.'));
        }
        $pages = $this->Subpages->Pages->find('list', ['limit' => 200]);
        $pageStatuses = $this->Subpages->PageStatuses->find('list', ['limit' => 200]);
        $tenants = $this->Subpages->Tenants->find('list', ['limit' => 200]);
        $this->set(compact('subpage', 'pages', 'pageStatuses', 'tenants'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Subpage id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subpage = $this->Subpages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subpage = $this->Subpages->patchEntity($subpage, $this->request->getData());
            if ($this->Subpages->save($subpage)) {
                $this->Flash->successAdmin(__('The subpage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->errorAdmin(__('The subpage could not be saved. Please, try again.'));
        }
        $pages = $this->Subpages->Pages->find('list', ['limit' => 200]);
        $pageStatuses = $this->Subpages->PageStatuses->find('list', ['limit' => 200]);
        $tenants = $this->Subpages->Tenants->find('list', ['limit' => 200]);
        $this->set(compact('subpage', 'pages', 'pageStatuses', 'tenants'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Subpage id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subpage = $this->Subpages->get($id);
        if ($this->Subpages->delete($subpage)) {
            $this->Flash->successAdmin(__('The subpage has been deleted.'));
        } else {
            $this->Flash->errorAdmin(__('The subpage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
