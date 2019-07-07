<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontroller extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }
    public function dashboard()
    {
        $data['accounts'] = $this->Adminmodel->useraccounts($this->session->userdata('user_id'));
        $this->load->view('admin/admin_inc/admin_header', $data);
        $this->load->view('admin/admin_inc/admin_sidesection');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/admin_inc/admin_footer');
    }
    public function composeemail()
    {
        $data['accounts'] = $this->Adminmodel->useraccounts($this->session->userdata('user_id'));
        $this->load->view('admin/admin_inc/admin_header', $data);
        $this->load->view('admin/admin_inc/admin_sidesection');
        $this->load->view('admin/compose_email');
        $this->load->view('admin/admin_inc/admin_footer');
    }

    public function addemailaccount()
    {
        $data['server'] = $this->Adminmodel->selectserver();
        $data['accounts'] = $this->Adminmodel->selectemailaccounts();
        $this->load->view('admin/admin_inc/admin_header', $data);
        $this->load->view('admin/admin_inc/admin_sidesection');
        $this->load->view('admin/addemail_account');
        $this->load->view('admin/admin_inc/admin_footer');
    }

    public function ajax_request()
    {
        if (isset($_POST['server'])) {
            $server_id = $_POST['server'];
            $qry = $this->Adminmodel->specifichost($server_id);
            if ($qry) {
                foreach ($qry as $data) {
                    ?>
                    <option value="<?php echo $data['smtp_host']; ?>"><?php echo $data['smtp_host']; ?></option>
                    <?php
                }
            }
        }
    }

    public function ajax_request1()
    {
        if (isset($_POST['server'])) {
            $server_id = $_POST['server'];

            $qry = $this->Adminmodel->specificport($server_id);
            foreach ($qry as $data) {
                ?>
                <option value="<?php echo $data['smtp_port']; ?>"><?php echo $data['smtp_port']; ?></option>
                <?php
            }
        }
    }

    public function createemailaccounts()
    {
        if (isset($_POST['createemailaccount_btn'])) {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'smtp_host' => $this->input->post('host'),
                'smtp_port' => $this->input->post('port'),
                'created_by' => $this->session->userdata['user_id']
            );
            $result = $this->Adminmodel->createemailaccount($data);
            if ($result) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"><button class="close" data-dismiss="alert">&times;</button><strong>Success! </strong>Email account successfully created.</div>');
                redirect('Admincontroller/addemailaccount');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"><button class="close" data-dismiss="alert">&times;</button><strong>Error! </strong>Email account not created. Please try again.</div>');
                redirect('Admincontroller/addemailaccount');
            }
        }
    }

    public function upload_file($file)
    {
        $field_name = $file;
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'doc|docx|pdf';
        $config['max_size'] = '2048';
        $config['max_width'] = '3000';
        $config['max_height'] = '2900';
        //$config['encrypt_name'] = true;

        // $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($field_name))
        {
            $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
        }
        else {
            $file_data = $this->upload->data();
            $filename = $file_data['file_name'];
            return $filename;

        }
    }


    public function sendemail()
    {
        if (isset($_POST['compose_btn'])) {
            $details = $this->Adminmodel->accountsdetails($this->input->post('account'));
            /*if(is_array($file_data)){
                $fin_mess='
                <h4>Message Details</h4>
                <table border="1" cellpadding="5" width="100%" >
                <tr>
                <td width="30%">Sender</td>
                <td width="70%">'.$this->input->post("account").'</td>
                </tr>
                <tr>
                <td width="30%">Subject</td>
                <td width="70%">'.$this->input->post("subject").'</td>
                </tr>
                <tr>
                <td width="30%">Message</td>
                <td width="70%">'.$this->input->post("message").'</td>
                </tr>
                </table>
                ';
            }
            else{
                $this->session->set_flashdata('message','there is an error in the attachment file');
            }*/
            foreach ($details as $det) {
                $p = $det['password'];
                $h = $det['smtp_host'];//server host
                $po = $det['smtp_port'];//port number

                $myfile='attachment';
                $myfile2=$this->upload_file($myfile);

                $sender = $this->input->post('account');
                $mail_pass = $p;
                $receiver = $this->input->post('recipient');
                $sub = $this->input->post('subject');
                $mess = $this->input->post('message');

                // Configure email library
                $config['protocol'] = 'smtp';
                $config['smtp_host'] = $h;//ssl://smtp.googlemail.com 465 ssl://smtp.mail.yahoo.com
                $config['smtp_port'] = $po;
                $config['smtp_user'] = $sender;
                $config['smtp_pass'] = $mail_pass;
                // load email library
                $this->load->library('email');
                // Loading email library and passing configured values to email library
                $config['mailtype'] = 'html';
                $config['charset'] = 'iso-8859-1';
                $config['wordwrap'] = TRUE;
                $config['newline'] = "\r\n"; //use double quotes

                $this->email->initialize($config);

                // Sender email address
                $this->email->from($sender);
                // Receiver email address(recipient)
                $email = $receiver;
                $this->email->to($email);
                // Email subject
                $subject = $sub;
                $message = $mess;
                $this->email->subject($subject);
                // Message in email
                $this->email->message($message);
                //$this->email->attach('uploads/mannual.pd');
                $this->email->attach('uploads/'.$myfile2);
              // $this->email->attach($file_data['full_path']);

                $sending_mail = $this->email->send();

                //end of smtp
                if ($sending_mail) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>SUCCESS</strong> You have successfully sent the message to ' . $receiver . '</div>');
                    redirect('Admincontroller/composeemail');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">SORRY! An error occurred while sending the email. Please try again.</div>');
                    redirect('Admincontroller/composeemail');
                }
            }


        }
    }

    public function updatehost()
    {
        if (isset($_POST['updatehost_btn'])) {
            $id = $this->uri->segment(3);
            $data = array(
                'smtp_host' => $this->input->post('smtp_host')
            );
            $qry = $this->Adminmodel->updatehost($id, $data);
            if ($qry) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>SUCCESS</strong> Data successfully updated.</div>');
                redirect('Admincontroller/addemailaccount');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">SORRY! Data no updated. Please try again.</div>');
                redirect('Admincontroller/addemailaccount');
            }
        }
    }


}