
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SlideBanner extends CI_Controller {
    
	public function __construct()
	{
		parent::__construct();
		$this->load->model('SlideBanner_model');
	}
    
	public function index()
	{  
		$get = $this->SlideBanner_model->get();
		$get = array('get'=>$get);
		$this->load->view('SlideBanner_view',$get);
	}	
	public function get()
	{   
		$get = $this->SlideBanner_model->get();
		$get = array('get'=>$get);
		$this->load->view('Lazada',$get);
	}	
	public function getbanner()
	{   
		$get = $this->SlideBanner_model->get();
		$get = array('get'=>$get);
		$this->load->view('showbanner',$get);
	}
	public function add()
	{   
	$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["images"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["images"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  // echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["images"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["images"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
	    $images =   base_url().'uploads/'.basename($_FILES["images"]["name"]);
	    $backgroundcolor = $this->input->post('backgroundcolor');
	    $add = array(
	    	'images'=>$images,
	    	'backgroundcolor'=>$backgroundcolor
	    );
	   $add = $this->SlideBanner_model->insert($add);
	    if ($add) {
	    	$this->load->view('SlideBanner_view');
	    	
	    }
	}
	public function edit($id)
	{
	    $edit = $this->SlideBanner_model->getByid($id);
	    
	    $edit = array('edit'=>$edit);
	    $this->load->view('edit_banner', $edit, FALSE);
	}
	public function update()
	{
		 $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["images"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["images"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  // echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["images"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["images"]["name"])). " has been uploaded.";
  } else {
    // echo "Sorry, there was an error uploading your file.";
  }
}
	    $images = basename($_FILES["images"]["name"]);
	   $id = $this->input->post('id');
	  
	   $backgroundcolor = $this->input->post('backgroundcolor');
	   if($images){
         $images =   base_url().'uploads/'.basename($_FILES["images"]["name"]);
	   }
	   else {
	   	  $images = $this->input->post('images2');
	   }
	   $update = array(
	   	'id'=>$id,
	    'images'=>$images,
	    'backgroundcolor'=>$backgroundcolor
	   );

	  $update = $this->SlideBanner_model->update($update,$id);
	  $get = $this->SlideBanner_model->get();
		$get = array('get'=>$get);
	  if ($update) {
	  	$this->load->view('showbanner',$get);
	  }
	}
    public function delete($id)
	{
	 $this->SlideBanner_model->deleteById($id);
	}

}



/* End of file Test.php */
/* Location: ./application/models/Test.php */
/* End of file Test.php */
/* Location: ./application/controllers/Test.php */
