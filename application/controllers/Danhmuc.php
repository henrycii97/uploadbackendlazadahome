
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Danhmuc extends CI_Controller {
    
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Danhmuc_model');
	}

	public function index()
	{   
		$iddanhmuc = $this->Danhmuc_model->get();
		$iddanhmuc = array('iddanhmuc'=>$iddanhmuc);
         
		$this->load->view('add_view', $iddanhmuc, FALSE);
		
	}	
	public function them()
	{   
		// $get = $this->new_model->get();
		// $get = array('get'=>$get);
		$this->load->view('tendanhmuc');
		 
	}
	public function add()
	{
	    $tendanhmuc = $this->input->post('tendanhmuc');
	    
	    $add = array(
	    	'tendanhmuc'=>$tendanhmuc,
	    	
	    );
	   $addwin =  $this->Danhmuc_model->insert($add);
	   if($addwin){
	   	$this->load->view('tendanhmuc', FALSE);
	   }
	}
	public function edit($id)
	{
	    $edit = $this->new_model->getByid($id);
	    
	    $edit = array('edit'=>$edit);
	    $this->load->view('Edit_test_view', $edit, FALSE);
	}
	public function update()
	{
	   $id = $this->input->post('id');
	   $name1 = $this->input->post('name1');
	   $name2 = $this->input->post('name2');
	   $update = array(
	   	'id'=>$id,
	    'name1'=>$name1,
	    'name2'=>$name2
	   );

	   $this->new_model->update($update,$id);
	}
    public function delete($id)
	{
	 $this->new_model->deleteById($id);
	}

}



/* End of file Test.php */
/* Location: ./application/models/Test.php */
/* End of file Test.php */
/* Location: ./application/controllers/Test.php */
