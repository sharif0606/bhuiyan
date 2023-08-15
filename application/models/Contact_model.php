<?php   if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function send_contact() {
       
       	$data = array();
        $data['contact_name'] = $this->input->post('contact_name', true);
        $data['contact_email'] = $this->input->post('contact_email', true);		
        $data['contact_subject'] = $this->input->post('contact_subject', true);
        $data['contact_message'] = $this->input->post('contact_message', true);

        // Check reCAPTCHA
        $recaptchaResponse = $this->input->post('g-recaptcha-response');
        $recaptchaSecretKey = '6LeelaknAAAAAFVtq6uDuCL7ZfrbHLECVoi6kagF'; // Replace with your reCAPTCHA secret key

        $recaptchaVerification = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecretKey&response=$recaptchaResponse");
        $recaptchaResult = json_decode($recaptchaVerification);

        if ($this->form_validation->run() === FALSE || !$recaptchaResult->success) {
            // Validation or reCAPTCHA failed, reload the form
            //$this->load->view('contact_form');
            return false;
        } else {
            // Validation and reCAPTCHA passed, process the form
            // Send the email or save the data
            // Redirect to a success page
            //redirect('contact/success');
            $this->db->insert('tbl_contacts', $data);
       	
            $to = "sohelbhuiyan1213@gmail.com";
            $subject = $data['contact_subject'];
            
                    
            
            $message = "From: ".$data['contact_name']." <".$data['contact_email'].">\r\n \r\nSubject: ".$data['contact_subject']."\r\n \r\nMessage: \r\n".$data['contact_message'];
            
            
            mail($to,$subject,$message);
        }


		
    }
    public function all_contact_info(){
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('show_front',1);
        $this->db->where('category_type',3);
        $this->db->order_by('category_id', 'desc');
        $query_result = $this->db->get();
        $category_info = $query_result->result();
        return $category_info;
    }
}
