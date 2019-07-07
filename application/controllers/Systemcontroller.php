<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Systemcontroller extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /dashboard.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('index');
    }

    public function create_account()
    {
        $this->load->view('forgot_password');
    }

    public function createaccount()
    {
        if (isset($_POST['account_btn'])) {
            $data = array(
                'full_name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')

            );
            $result = $this->Adminmodel->createaccount($data);
            if ($result) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"><button class="close" data-dismiss="alert">&times;</button><strong>Success! </strong>Account successfully created.</div>');
                redirect('Systemcontroller/index');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"><button class="close" data-dismiss="alert">&times;</button><strong>Error! </strong>Account no created. Please try again.</div>');
                redirect('Systemcontroller/recoverpassword');
            }
        }
    }

    public function login()
    {
        if (isset($_POST['login_btn'])) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->Adminmodel->checkuser($email);

            if ($user) {
                $user_id = $this->Adminmodel->userid($email);
                $pass = $this->Adminmodel->userpassword($email);//$email
                if ($pass) {
                    $data = array(
                        'email' => $email,
                        'password' => $password,
                        'user_id' => $user_id,
                        'isloggedin' => 1
                    );
                    $this->session->set_userdata($data);
                    redirect('Admincontroller/composeemail');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">SORRY! your password is incorrect!</div>');
                    redirect('Systemcontroller/index');
                }
            }
            else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">SORRY! the email provided is Invalid!</div>');
                redirect('Systemcontroller/index');
            }
        }
    }

    //Session logout
    public function logout()
    {
        $this->session->unset_userdata('email');
        //$this->session->unset_userdata('isloggedin');
        $this->session->sess_destroy();
        redirect('Systemcontroller/index');
    }
}
