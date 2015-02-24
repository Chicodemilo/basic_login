<?php
class Email_model extends CI_Model{


    
    function send_password($email, $time){

            function generateRandomString($length = 6) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
                }  

            $new_password = generateRandomString(9);
        
            $data = array(
                    'email' => $email,
                    'time' => $time,
                    'new_password' => $new_password);


        
            $this->load->library('email');
            
            $this->email->set_newline("\r\n");

            $this->email->from('do_not_reply@sanangeloseniors.com', 'Do No Reply');
            $this->email->to($email);
            $this->email->subject('Password Reset');
            $this->email->message($this->load->view('email/email_contact',$data, true));

//            $path = $this->config->item('server_root');
//            $file = $path.'/a_seniors/attachments/sendme.txt';

//            $this->email->attach($file);

            if($this->email->send())
                {
                    $this->load->model('membership_model', 'membership_model');
                    $this->membership_model->insert_new_password($email, $new_password);
                    return true;
                }
                else
                {
                    return false;
                }
    }


    
                
}
?>