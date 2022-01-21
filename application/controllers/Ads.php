
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ads extends CI_Controller {
    
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ads_model');
	
	}

	public function index()
	{ 
		$this->load->view('Ads_view');
	}	
	public function get()
	{   
		$get = $this->Ads_model->get();
		
  
    
	 
	$get = array('get'=>$get);
	$this->load->view('xem_view', $get, FALSE);
     	   
       
		
		
	}
	public function add()
	{    
   
      //$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.

// Count # of uploaded files in array
   $total = count($_FILES['upload']['name']);

// Loop through each file
   $tmp =  array();
    for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
     $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "./uploads/". $_FILES['upload']['name'][$i];
     $imgAds['img'] = base_url().'uploads/'.$_FILES['upload']['name'][$i];
	   
	    array_push( $tmp, $imgAds);
    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here

       }
     }
    }
	    $imgAds = json_encode($tmp);
	    var_dump($imgAds);
	    
	     $add = array(
	     	'imgAds'=>$imgAds
	     );
	     $this->Ads_model->insert($add);
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
