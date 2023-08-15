<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller{
    //put your code here
     public function __construct() {
        parent::__construct();
      
    }  
  // News information
    public function index()
    {
        $data=array();
		
		$data['all_meta_data'] = $this->meta_model->all_meta_data();
		$data['pro_cats']=$this->master_model->pro_cats();
		
        $data['all_brand']=$this->blog_model->all_brand();
        $data['home_page_product_popular']=$this->master_model->home_page_product('popular_item');
        
        $data['main_content']=$this->load->view('frontend/pages/contact_us',$data,true);
        $this->load->view('frontend/master', $data);
    } 
    
	public function contact_send()
    {
        if($this->contact_model->send_contact()){
            $sdata=array();
            $sdata['message']="Sent successfully";
            $this->session->set_userdata($sdata);
        }
        
		redirect('contact-us');
    }

    public function all_contact_info(){
        $data=array();
        
        $data['all_contact_info']=$this->contact_model->all_contact_info();
        
        $data['admin_main_content']=$this->load->view('backend/pages/contact_info_list',$data,true);
        $this->load->view('backend/admin_master', $data);
    }
	
}
