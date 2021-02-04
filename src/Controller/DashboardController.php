<?php
declare (strict_types = 1);

namespace App\Controller;

use Cake\Routing\Router;

class DashboardController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->viewBuilder()->setLayout('admin');
        
        $this->set('pageHead', "Dashboard");
    }

    public function index()
    {
    }
}