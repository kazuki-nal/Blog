<?php
/**
 * Created by PhpStorm.
 * User: kazuki
 * Date: 2018/02/22
 * Time: 16:47
 */

class Front extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('front/home');
    }
}