<?php

namespace Mediator;

class Controller implements Mediator
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @var View
     */
    protected $view;

    public function setColleague(Model $model, View $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function addUser($user)
    {
        $this->model->addUser($user);
    }

    public function getUserList()
    {
        return $this->model->getUserList();
    }

    public function delUser($user)
    {
        $this->model->delUser($user);
    }

    public function show($result)
    {
        $this->view->show($result);
    }
}
