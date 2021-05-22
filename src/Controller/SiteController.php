<?php
declare (strict_types = 1);

namespace App\Controller;

use Cake\Mailer\Mailer;

class SiteController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->viewBuilder()->setLayout('default');

        $this->Authentication->allowUnauthenticated(['home', 'empresa', 'servicos', 'noticias', 'eventos', 'classificados', 'linksUteis', 'cursos', 'mail', 'login', 'contato', 'cotacoes']);

        $siteTopMenu = parent::getSiteTopMenu();
        $this->set(compact('siteTopMenu'));

        $siteMenu = parent::getSiteMenu();
        $this->set(compact('siteMenu'));
    }

    public function home()
    {
        $page = $this->Pages->get(1, ['contain' => []]);
        $title = $page->name;

        $crumbs = ['Home', $title];

        $this->set(compact('title', 'crumbs', 'page'));
    }

    public function servicos()
    {
        $page = $this->Pages->get(3, ['contain' => []]);
        $title = $page->name;

        $crumbs = ['Home', $title];

        $this->set(compact('title', 'crumbs', 'page'));
    }

    public function empresa()
    {
        $page = $this->Pages->get(4, ['contain' => []]);
        $title = $page->name;

        $crumbs = ['Home', $title];

        $this->set(compact('title', 'crumbs', 'page'));
    }

    public function noticias()
    {
        $page = $this->Pages->get(5, ['contain' => []]);
        $title = $page->name;

        $crumbs = ['Home', $title];

        $this->set(compact('title', 'crumbs', 'page'));
    }

    public function eventos()
    {
        $page = $this->Pages->get(6, ['contain' => []]);
        $title = $page->name;

        $crumbs = ['Home', $title];

        $this->set(compact('title', 'crumbs', 'page'));
    }

    public function linksUteis()
    {
        $page = $this->Pages->get(7, ['contain' => []]);
        $title = $page->name;

        $crumbs = ['Home', $title];

        $this->set(compact('title', 'crumbs', 'page'));
    }

    public function cursos()
    {
        $page = $this->Pages->get(8, ['contain' => []]);
        $title = $page->name;

        $crumbs = ['Home', $title];

        $this->set(compact('title', 'crumbs', 'page'));
    }

    public function cadastro()
    {
        $page = $this->Pages->get(9, ['contain' => []]);
        $title = $page->name;

        $crumbs = ['Home', $title];

        $this->set(compact('title', 'crumbs', 'page'));
    }

    public function classificados()
    {
        $page = $this->Pages->get(10, ['contain' => []]);
        $title = $page->name;

        $crumbs = ['Home', $title];

        $this->set(compact('title', 'crumbs', 'page'));
    }

    public function contato()
    {
        $page = $this->Pages->get(2, ['contain' => []]);
        $title = $page->name;

        $crumbs = ['Home', $title];

        $this->set(compact('title', 'crumbs', 'page'));

        if ($this->request->is('post')) {
            $this->loadModel('Contacts');

            $name = $this->request->getData('name');
            $email = $this->request->getData('email');
            $message = $this->request->getData('message');
            $emailReturn = "";

            if ($name && $email && $message) {

                try {
                    $mailer = new Mailer('default');
                    $mailer
                        ->setEmailFormat('html')
                        ->setSubject('Contato | Ge-Agro')
                        ->setTo('delfino.cesar@gmail.com')
                        ->setFrom([$email => $name])
                        ->viewBuilder()
                        ->setTemplate('default')
                        ->setLayout('default')
                        // ->deliver("{$name} - {$email} - {$message}")
                    ;
                    $mailer->deliver();

                    $emailReturn = "Success";
                } catch (\Throwable $th) {
                    $emailReturn = $th->getMessage();
                }

                $contact = $this->Contacts->newEmptyEntity();
                $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
                $contact->email_return = $emailReturn;
                $contact->tenant_id = $this->tenantId;

                $this->Contacts->save($contact);

                // \Cake\Log\Log::write('debug', 'Something did not work');

                $this->Flash->success("Sua mensagem foi enviada com sucesso");
                $this->redirect(['controller' => 'site', 'action' => 'contato']);
            } else {
                $this->Flash->error("Preencha todos os campos");
            }
        }
    }

    public function login()
    {
        $this->set('title', "Login");

        $crumbs = ['Home', 'Login'];
        $this->set(compact('crumbs'));

        $result = $this->Authentication->getResult();

        if ($result->isValid()) {
            $target = $this->Authentication->getLoginRedirect() ?? '/dashboard';
            return $this->redirect($target);
        }
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
    }

    public function logout()
    {
        $this->Authentication->logout();
        return $this->redirect(['controller' => 'site', 'action' => 'login']);
    }

    public function cotacoes()
    {
        $title = "Cotações";

        $crumbs = ['Home', 'Serviços', $title];

        $this->set(compact('title', 'crumbs'));
    }

    public function mail()
    {
        $this->redirect("https://cpl08.main-hosting.eu:2096/");
    }
}
