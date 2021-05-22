<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pages Controller
 *
 * @property \App\Model\Table\PagesTable $Pages
 * @method \App\Model\Entity\Page[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PagesController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->set('arrayBreadCrumb', [
            0 => ['label' => "Páginas"],
            1 => [
                'label' => __($this->action),
                'link' => [
                    'controller' => $this->controller,
                    'action' => $this->action,
                    'params' => []
                ]
            ],
        ]);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PageStatuses', 'Tenants'],
        ];
        $pages = $this->paginate($this->Pages, ['order' => [
            'Pages.page_status_id' => 'asc',
            'Pages.id' => 'asc'
        ]]);

        $this->set(compact('pages'));
    }

    /**
     * View method
     *
     * @param string|null $id Page id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $page = $this->Pages->get($id, [
            'contain' => ['PageStatuses', 'Tenants', 'Subpages'],
        ]);

        $this->set(compact('page'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $page = $this->Pages->newEmptyEntity();
        if ($this->request->is('post')) {
            $page = $this->Pages->patchEntity($page, $this->request->getData());
            if ($this->Pages->save($page)) {
                $this->Flash->successAdmin(__('The page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->errorAdmin(__('The page could not be saved. Please, try again.'));
        }
        $pageStatuses = $this->Pages->PageStatuses->find('list', ['limit' => 200]);
        $tenants = $this->Pages->Tenants->find('list', ['limit' => 200]);
        $this->set(compact('page', 'pageStatuses', 'tenants'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Page id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $page = $this->Pages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $page = $this->Pages->patchEntity($page, $this->request->getData());
            if ($this->Pages->save($page)) {
                $this->Flash->successAdmin(__('The page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->errorAdmin(__('The page could not be saved. Please, try again.'));
        }
        $pageStatuses = $this->Pages->PageStatuses->find('list', ['limit' => 200]);
        $tenants = $this->Pages->Tenants->find('list', ['limit' => 200]);
        $this->set(compact('page', 'pageStatuses', 'tenants'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Page id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $page = $this->Pages->get($id);
        if ($this->Pages->delete($page)) {
            $this->Flash->successAdmin(__('The page has been deleted.'));
        } else {
            $this->Flash->errorAdmin(__('The page could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
