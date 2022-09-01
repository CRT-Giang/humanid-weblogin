<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once 'BaseController.php';

class Home extends BaseController
{
    public function index()
    {
        $this->render();
    }

    public function error()
    {
        $modal = $this->session->flashdata('modal');
        if ($modal) {
            $this->data['modal'] = $modal;
        }
        $error_message = $this->session->flashdata('error_message');
        if ($error_message) {
            $this->data['error_message'] = $error_message;
        }

        $this->render();
    }
}
