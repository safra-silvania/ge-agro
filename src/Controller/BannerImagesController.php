<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BannerImages Controller
 *
 * @property \App\Model\Table\BannerImagesTable $BannerImages
 * @method \App\Model\Entity\BannerImage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BannerImagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Banners'],
        ];
        $bannerImages = $this->paginate($this->BannerImages);

        $this->set(compact('bannerImages'));
    }

    /**
     * View method
     *
     * @param string|null $id Banner Image id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bannerImage = $this->BannerImages->get($id, [
            'contain' => ['Banners'],
        ]);

        $this->set(compact('bannerImage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bannerImage = $this->BannerImages->newEmptyEntity();
        if ($this->request->is('post')) {
            $bannerImage = $this->BannerImages->patchEntity($bannerImage, $this->request->getData());
            if ($this->BannerImages->save($bannerImage)) {
                $this->Flash->successAdmin(__('The banner image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->errorAdmin(__('The banner image could not be saved. Please, try again.'));
        }
        $banners = $this->BannerImages->Banners->find('list', ['limit' => 200]);
        $this->set(compact('bannerImage', 'banners'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Banner Image id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bannerImage = $this->BannerImages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bannerImage = $this->BannerImages->patchEntity($bannerImage, $this->request->getData());
            if ($this->BannerImages->save($bannerImage)) {
                $this->Flash->successAdmin(__('The banner image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->errorAdmin(__('The banner image could not be saved. Please, try again.'));
        }
        $banners = $this->BannerImages->Banners->find('list', ['limit' => 200]);
        $this->set(compact('bannerImage', 'banners'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Banner Image id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bannerImage = $this->BannerImages->get($id);
        if ($this->BannerImages->delete($bannerImage)) {
            $this->Flash->successAdmin(__('The banner image has been deleted.'));
        } else {
            $this->Flash->errorAdmin(__('The banner image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
