<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();

        Utils::no_cache();
        if ($this->session->userdata('logged_in')) {
            redirect(base_url('Admin_hotel'));
            exit;
        }
    }

    /**
     *     Sara1984      
     */
    public function index() {
        redirect(base_url('auth/login'));
    }

    /**
     *           
     */
    public function login() {
        $data['title'] = 'Login';
        $this->load->model('auth_model');

        if (count($_POST)) {
            $this->load->helper('security');
            $this->form_validation->set_rules('email', 'Email address', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

            if ($this->form_validation->run() == false) {
                $data['notif']['message'] = validation_errors();
                $data['notif']['type'] = 'danger';
            } 
            else {
                $data['notif'] = $this->auth_model->Authentification();
            }
        }

        if ($this->session->userdata('logged_in')) {
            redirect(base_url('Admin_hotel'));
            exit;
        }

        /*
         * Load view
         */
        $this->load->view('auth/includes/header', $data);
        $this->load->view('auth/login');
        $this->load->view('auth/includes/footer');
    }

    /**
     *           
     */
    // public function register() {
    //     $data['title'] = 'Register';
    //     $this->load->model('auth_model');

    //     if (count($_POST)) {
    //         $this->load->helper('security');

    //         $this->form_validation->set_rules('first_name', 'First name', 'trim|required');
    //         $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
    //         $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');

    //         $this->form_validation->set_rules('password', 'Password', 'trim|required');
    //         $this->form_validation->set_rules('confirm_password', 'Password', 'trim|required|matches[password]|min_length[6]|alpha_numeric|callback_password_check');
            
    //         if ($this->form_validation->run() == false) {
    //             $data['notif']['message'] = validation_errors();
    //             $data['notif']['type'] = 'danger';
    //         } 
    //         else {
    //             $data['notif'] = $this->auth_model->register();
    //         }
    //     }

    //     if ($this->session->userdata('logged_in')) {
    //         redirect(base_url('Admin_hotel'));
    //         exit;
    //     }


    //     /*
    //      * Load view
    //      */
    //     $this->load->view('auth/includes/header', $data);
    //     $this->load->view('auth/register');
    //     $this->load->view('auth/includes/footer');
    // }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect(base_url('hotel'));
    }

}
