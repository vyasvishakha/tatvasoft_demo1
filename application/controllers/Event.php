<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
    public function __construct()
       {
            parent::__construct();
            $this->load->model('Event_model');
           
       }

	public function index()
	{
        if($this->input->post('save')){
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('start_date', 'start_date', 'required');
        $this->form_validation->set_rules('end_date', 'end_date', 'required');
        
        if($this->form_validation->run() == true){
            
            if($this->input->post('recurrence_type') == 0){
                $recurrence = array(
                    'recurrence_type' => $this->input->post('recurrence_type'),
                    'every_type' => $this->input->post('every_type'),
                    'every_day' => $this->input->post('every_day'),
                );
            }
            else{
                $recurrence = array(
                    'recurrence_type' => $this->input->post('recurrence_type'),
                    'number' => $this->input->post('number'),
                    'week_day' => $this->input->post('week_day'),
                    'month_day' => $this->input->post('month_day'),
                );
            }
                $data = array(
                    'title' => $this->input->post('title'),
                    'start_date' => $this->input->post('start_date'),
                    'end_date' => $this->input->post('end_date'),
                    'recurrence' => json_encode($recurrence),
                );
                $last_insert_id = $this->Event_model->save_event($data);

                $event_recurrence = array(
                    'event_id' => $last_insert_id,
                );
    
               
        }
    }
		$this->load->view('event/add_event');
    }
    
     function view_all_event(){

        $data['events'] = $this->Event_model->view_all_event();
        $this->load->view('event/view_all_event',$data);
     }

     function view_event($id){
       
        $data['event_view'] = $this->Event_model->view_event($id);
        $this->load->view('event/view_event',$data);
     }
}
