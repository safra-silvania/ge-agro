<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Banners Controller
 *
 * @property \App\Model\Table\BannersTable $Banners
 * @method \App\Model\Entity\Banner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BannersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tenants'],
        ];
        $banners = $this->paginate($this->Banners);

        $this->set(compact('banners'));
    }

    /**
     * View method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => ['Tenants', 'BannerImages'],
        ]);

        $this->set(compact('banner'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $banner = $this->Banners->newEmptyEntity();
        if ($this->request->is('post')) {
            $banner = $this->Banners->patchEntity($banner, $this->request->getData());
            if ($this->Banners->save($banner)) {
                $this->Flash->successAdmin(__('The banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->errorAdmin(__('The banner could not be saved. Please, try again.'));
        }
        $tenants = $this->Banners->Tenants->find('list', ['limit' => 200]);
        $this->set(compact('banner', 'tenants'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $banner = $this->Banners->patchEntity($banner, $this->request->getData());
            if ($this->Banners->save($banner)) {
                $this->Flash->successAdmin(__('The banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->errorAdmin(__('The banner could not be saved. Please, try again.'));
        }
        $tenants = $this->Banners->Tenants->find('list', ['limit' => 200]);
        $this->set(compact('banner', 'tenants'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banner = $this->Banners->get($id);
        if ($this->Banners->delete($banner)) {
            $this->Flash->successAdmin(__('The banner has been deleted.'));
        } else {
            $this->Flash->errorAdmin(__('The banner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
