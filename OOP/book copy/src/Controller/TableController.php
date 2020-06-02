<?php

namespace Controller;

use Model\CRUDInterface;
use View\View;

class TableController extends AbstractController
{
    protected $table; //CRUDInterface
    protected $view; //View

    public function __construct(CRUDInterface $table, View $view)
    {
        $this->table = $table;
        $this->view = $view;
        $this->view->setTemplate('table');
    }
    public function actionShow()
    {

        // print_r($this->table->get());
        $this
            ->view
            ->setData(['table' => $this->table->get()])
            ->view();
    }


    public function actionAdd(array $data)
    {
        $this->table->add($data['post']);
        $this->redirect('?action=show');
    }


    public function actionDel(array $data)
    {
        // print_r($data);
        if (isset($data['get']['id'])) {
            $this->table->del($data['get']['id']);
        }
        $this->redirect('?action=show');
    }

    public function actionShowEdit(array $data)
    {
        $id = $data['get']['id'];
        $viewData = $this->table->get($id)[0];
        unset($viewData['id']);

        $this
            ->view
            ->setTemplate('edit')
            ->setData([
                'data' => $viewData,
                'id' => $id
            ])
            ->view();

        // print_r($viewData);
    }

    public function actionEdit(array $data)
    {
        // print_r($data);
        $editData = $data['post'];
        unset($editData['id']);
        $this->table->edit($data['post']['id'], $editData);
        $this->redirect('?action=show');
    }


    public function actionDefault()
    {
        $this
            ->view
            ->setTemplate('default')
            ->view();
    }
}
