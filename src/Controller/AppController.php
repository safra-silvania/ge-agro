<?php
declare (strict_types = 1);

namespace App\Controller;

use App\Model\Enum;
use Cake\Cache\Cache;
use Cake\Controller\Controller;
use Cake\Core\Configure;

class AppController extends Controller
{
    protected $tenantId;
    protected $userAuthenticated;
    protected $controller;
    protected $action;

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->tenantId = Enum\TenantEnum::GeAgro;
        $this->userAuthenticated = $this->request->getAttribute('identity');
        $this->controller = $this->request->getParam('controller');
        $this->action = $this->request->getParam('action');

        $this->viewBuilder()->setLayout('admin');

        $this->set('production', Configure::read('production'));
        $this->set('userAuthenticated', $this->userAuthenticated);
        $this->set('collapsedSidebar', Cache::read('collapsedSidebar') === true);
        $this->set('controller', $this->controller);

        $this->loadModel('Users');
        $this->loadModel('Pages');
        $this->loadModel('Subpages');

        if ($this->userAuthenticated && $this->userAuthenticated->id) {
            $myself = $this->Users->get($this->userAuthenticated->id, ['contain' => ['Roles', 'UserStatuses']]);
            $this->set('myself', $myself);
        }
    }

    public function getSiteTopMenu(): array
    {
        $siteTopMenu = [];

        if (isset($this->userAuthenticated)) {
            $siteTopMenu[] = [
                'label' => $this->userAuthenticated->name,
                'active' => false,
                'submenu' => [
                    [
                        'label' => "Área Administrativa",
                        'url' => ['controller' => 'dashboard', 'action' => 'index'],
                        'options' => ['escape' => false, 'title' => 'Dashboard'],
                        'active' => false,
                    ],
                ],
            ];

            $siteTopMenu[] = [
                'label' => "Sair <i class='fas fa-sign-out-alt'></i>",
                'url' => ['controller' => 'site', 'action' => 'logout'],
                'options' => ['escape' => false, 'title' => 'Logout'],
                'active' => false,
            ];
        } else {
            $siteTopMenu[] = [
                'label' => "",
                'url' => [],
                'options' => [],
                'active' => true,
            ];
            $siteTopMenu[] = [
                'label' => "<i class='fas fa-lock'></i> Login",
                'url' => ['controller' => 'site', 'action' => 'login'],
                'options' => ['escape' => false, 'title' => 'Login'],
                'active' => false,
            ];
        }

        return $siteTopMenu;
    }

    public function getSiteMenu(): array
    {
        $menu = [];

        $pages = $this->Pages->find('all')
            ->contain(['Subpages' => function ($q) {
                return $q->where(['page_status_id' => Enum\PageStatus::Ativa]);
            }])
            ->where([
                'tenant_id' => $this->tenantId,
                'page_status_id' => Enum\PageStatus::Ativa,
            ])
            ->order(['order' => 'asc']);

        foreach ($pages as $page) {
            $submenu = [];
            if (isset($page->subpages) && count($page->subpages) > 0) {
                foreach ($page->subpages as $subpage) {
                    $submenu[] = [
                        'label' => trim($subpage->name),
                        'url' => ['controller' => 'site', 'action' => $page->action, $subpage->id],
                        'options' => [],
                        'active' => false,
                    ];
                }
            }

            $menu[] = [
                'label' => $page->name,
                'url' => ['controller' => 'site', 'action' => $page->action],
                'active' => $this->action == $page->action,
                'submenu' => $submenu,
            ];
        }

        return $menu;
    }

    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }
}
