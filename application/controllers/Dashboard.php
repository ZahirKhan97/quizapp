<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboardview');
	}

    public function questions()
    {
        $this->load->model('Quizmodel');
        $results=$this->Quizmodel->readdata();
        $result['rows']= $results;        
        $this->load->view('phpquiz', $result);
    }

    public function resultdisplay()
    {
        $data['checks'] = array(

            'ques1' => $this->input->post('qid1'),
            'ques2' => $this->input->post('qid2'),
            'ques3' => $this->input->post('qid3'),
            'ques4' => $this->input->post('qid4'),
            'ques5' => $this->input->post('qid5'),
        );

        $this->load->model('Quizmodel');
        $results = $this->Quizmodel->readdata();
        $data['result'] = $results;
        $this->load->view('result', $data);
        
    }

}
