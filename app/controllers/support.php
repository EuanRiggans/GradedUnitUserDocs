<?php
/**
 * Created by PhpStorm.
 * User: Euan
 * Date: 25/04/2018
 * Time: 11:00 PM
 */

class support extends controller
{

    public function login()
    {
        $this->view('support/template', 'login');
    }

    public function selectsquad()
    {
        $this->view('support/template', 'select-squad');
    }

    public function viewplayerskills()
    {
        $this->view('support/template', 'view-player-skills');
    }

    public function viewskillprogress()
    {
        $this->view('support/template', 'view-skill-progress');
    }

    public function viewplayernotes()
    {
        $this->view('support/template', 'view-player-notes');

    }

    public function editskillprogress()
    {
        $this->view('support/template', 'edit-skill-progress');

    }


}