<?php
declare(strict_types=1);

namespace App\Controller;

class CmsController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->set('title', "Páginas");
        $this->viewBuilder()->setLayout('admin');

        $this->set('arrayBreadCrumb', [
            0 => ['label' => "Páginas"],
            1 => [
                'label' => $this->action,
                'link' => [
                    'controller' => $this->controller,
                    'action' => $this->action,
                    'params' => []
                ]
            ],
        ]);
    }

    public function contact()
    {
        $crumbs = ['Home', 'Contato'];
        $this->set(compact('crumbs'));

        $this->set('pageHead', "Contato");
    }
}