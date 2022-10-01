<?php 

class subject extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('adminid')=="")
		{
			redirect('Login');
		}

		$this->load->view('templates/header');
		$this->load->model('subjectModel');
		$data['list']=$this->subjectModel->getList();
		$this->load->view('templates/subject/list',$data);
		$this->load->view('templates/footer');
	}
	public function detail($id)
	{
		$this->load->view('templates/header');
		$this->load->model('subjectModel');
		$data['list']=$this->subjectModel->detail($id);
		$this->load->view('templates/subject/detail',$data);
		$this->load->view('templates/footer');
	}
	public function add()
	{
		$this->load->view('templates/header');
		$this->load->model('streamModel');
		$data['streamlist']=$this->streamModel->getList();
		$this->load->model('SemesterModel');
		$data['semesterlist']=$this->SemesterModel->getList();
		$this->load->view('templates/subject/add',$data);
		$this->load->view('templates/footer');
	}
	public function addrow()
	{
		$this->session->set_flashdata('Msg','1 Record Inserted');
		$this->load->model('SubjectModel');
		$this->SubjectModel->add();
		redirect('Subject');
	}
	public function delete($id)
	{
		$this->load->model('SubjectModel');
		$this->SubjectModel->delete($id);
		$this->session->set_flashdata('errMsg','1 Record Deleted');
		redirect('Subject');
	}
	public function activedeactive($id)
	{
		$this->load->model('SubjectModel');
		$data=$this->SubjectModel->
		edit($id);
		if ($data['subject_status']=="Active")
		{
			$this->SubjectModel->activestatus($id);
			$this->session->set_flashdata('errMsg','1 record Deactivated');
		}
		elseif ($data['subject_status']=="Deactive")
		{
			$this->SubjectModel->deactivestatus($id);
			$this->session->set_flashdata('Msg','1 record Activated');
		}
		redirect('subject');
	}
	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('SubjectModel');
		$edit['subjectlist']=$this->SubjectModel->edit($id);
		$this->load->model('streamModel');
		$edit['streamlist']=$this->streamModel->getList();
		$this->load->model('SemesterModel');
		$edit['semesterlist']=$this->SemesterModel->getList();
		$this->load->view('templates/subject/edit',$edit);
		$this->load->view('templates/footer');

	}
	public function update($id)
	{
		$this->load->model('subjectModel');
		$this->subjectModel->update($id);
		$this->session->set_flashdata('Msg','1 record Updated');
		redirect('subject');
	}
}
 ?>