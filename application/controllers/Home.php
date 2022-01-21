
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Danhmuc_model');
		$this->load->model('Home_model');
		$this->load->model('SlideBanner_model');
	}

	public function index()
	{   
		$get = $this->Danhmuc_model->get();
		$get = array('get'=>$get);
		$this->load->view('add_view',$get);
	}
	public function get()
	{   
		$product = $this->Home_model->get();
		$get = $this->SlideBanner_model->get();

		$product = array(
			'product'=>$product,
			'get'=>$get
		);
		$this->load->view('Lazada',$product);
	}	
	public function show()
	{   
		$product = $this->Home_model->get();
		$get = $this->SlideBanner_model->get();
    // $catefory = $this->Home_model->getByIdctr($id);

		$product = array(
			'product'=>$product,
			'get'=>$get,
		);
		$this->load->view('showhome',$product);
	}
	public function add()
	{
// upload video
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["video"]["name"]);
$uploadOk = 1;
$videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["video"]["tmp_name"]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    // echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  // echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["video"]["size"] > 50000000) {
  // echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($videoFileType != "avi" && $videoFileType != "mp4" && $videoFileType != "flv"
&& $videoFileType != "wmv" && $videoFileType != "webm"  ) {
  // echo "Sorry, only AVI, MP4, FLV, WMV & WebM files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["video"]["name"])). " has been uploaded.";
  } else {
    // echo "Sorry, there was an error uploading your file.";
  }
}
		// upload image
$target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    // echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  // echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 500000000) {
  // echo "Sorry, your file is too large.";
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
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
  } else {
    // echo "Sorry, there was an error uploading your file.";
  }
}
		//$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.

       // Count # of uploaded files in array
       $total = count($_FILES['images']['name']);

       // Loop through each file
      $tmp =  array();
       for( $i=0 ; $i < $total ; $i++ ) {

       //Get the temp file path
       $tmpFilePath = $_FILES['images']['tmp_name'][$i];

     //Make sure we have a file path
      if ($tmpFilePath != ""){
     //Setup our new file path
      $newFilePath = "./uploads/". $_FILES['images']['name'][$i];
      $imgAds['img'] = base_url().'uploads/'.$_FILES['images']['name'][$i];
	   
	    array_push( $tmp, $imgAds);
    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here

       }
     }
    }     
          $image =  base_url().'uploads/'.basename($_FILES["image"]["name"]);
          $productname =  $this->input->post('productname');
          $idcategory =  $this->input->post('idcategory');
          $video =  base_url().'uploads/'.basename($_FILES["video"]["name"]);
          $images = $tmp;
          $images = json_encode($images);
          $price =  $this->input->post('price');
          $prices =  $this->input->post('prices');
          $description =  $this->input->post('description');
	       $add = array(
	    	'image'=>$image,
	    	'productname'=>$productname,
	    	'idcategory'=>$idcategory,
	    	'video'=>$video,
	    	'images'=>$images,
	    	'price'=>$price,
	    	'prices'=>$prices,
	    	'description'=>$description
	    	
	       );
	         
	     $add = $this->Home_model->insert($add);
       $product = $this->Home_model->get();
       $product = array('product'=>$product);
     if ($add) {
         $this->load->view('showhome', $product, FALSE);
       }  

	}
	public function edit($id)
	{
	    $edit = $this->Home_model->getByid($id);
      $list = $this->Danhmuc_model->get();
      $catefory = $this->Home_model->getByIdctr($id);
     
            // echo("<pre>");
            // var_dump($catefory);
            // echo("</pre>");
	    $edit = array(
        'edit'=>$edit,
        'list'=>$list,
        'catefory'=>$catefory
      );
	     $this->load->view('edit_view', $edit, FALSE);
	}
	public function update()
	{  
		// upload video
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["video"]["name"]);
$uploadOk = 1;
$videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["video"]["tmp_name"]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    // echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  // echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["video"]["size"] > 5000000000) {
  // echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($videoFileType != "avi" && $videoFileType != "mp4" && $videoFileType != "flv"
&& $videoFileType != "wmv" && $videoFileType != "webm"  ) {
  // echo "Sorry, only AVI, MP4, FLV, WMV & WebM files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["video"]["name"])). " has been uploaded.";
  } else {
    // echo "Sorry, there was an error uploading your file.";
  }
}
		// upload image
$target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    // echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  // echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 500000000) {
  // echo "Sorry, your file is too large.";
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
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
  } else {
    // echo "Sorry, there was an error uploading your file.";
  }
}
		//$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.

       // Count # of uploaded files in array
       $total = count($_FILES['images']['name']);

       // Loop through each file
      $tmp =  array();
      $tmp2 = array();
       for( $i=0 ; $i < $total ; $i++ ) {

       //Get the temp file path
       $tmpFilePath = $_FILES['images']['tmp_name'][$i];
       if ($tmpFilePath == "") {
           $images = "";
          array_push($tmp2,$images);
       }
     //Make sure we have a file path
      if ($tmpFilePath != ""){
     //Setup our new file path
      $newFilePath = "./uploads/". $_FILES['images']['name'][$i];
      $imgAds['img'] = base_url().'uploads/'.$_FILES['images']['name'][$i];
      $imgAds2['img'] = $_FILES['images']['name'][$i];
      
     
	   
	    array_push( $tmp, $imgAds);
      array_push( $tmp2, $imgAds);
      
    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here

       }
     }
    }     
          $id = $this->input->post('id');
          $image =  basename($_FILES["image"]["name"]);
          $productname =  $this->input->post('productname');
          $idcategory =  $this->input->post('idcategory');
          $video =  basename($_FILES["video"]["name"]);
          // $images =  basename($_FILES["image"]["name"]);
          $images = $tmp2[0];
          
          $price =  $this->input->post('price');
          $prices =  $this->input->post('prices');
          $description =  $this->input->post('description');
          if ($image) {
             $image =  base_url().'uploads/'.basename($_FILES["image"]["name"]);
          }
          else{
            $image =  $this->input->post('image_old');
          } 
   
          if($video) {
             $video =  base_url().'uploads/'.basename($_FILES["video"]["name"]);
          }
          else{
             $video =  $this->input->post('video_old');
          } 
          if($images) {
            $images = $tmp;
            $images = json_encode($images);
          }
          if($images == null){
            $images = $this->input->post('images_old');
          }
          
	       $update = array(
	       'id'=>$id,
	    	'image'=>$image,
	    	'productname'=>$productname,
	    	'idcategory'=>$idcategory,
	    	'video'=>$video,
	    	'images'=>$images,
	    	'price'=>$price,
	    	'prices'=>$prices,
	    	'description'=>$description
	       );
            
            
           
	   $update = $this->Home_model->update($update,$id);
     $product = $this->Home_model->get();
     $product = array(
      'product'=>$product
     );
     if($update){
      $this->load->view('showhome',$product);
     }

	}
  public function delete($id)
	{
	$delete = $this->Home_model->deleteById($id);
   $product = $this->Home_model->get();
     $product = array(
      'product'=>$product
     );
     if($delete){
      $this->load->view('showhome',$product);
     }
	}

}



/* End of file Test.php */
/* Location: ./application/models/Test.php */
/* End of file Test.php */
/* Location: ./application/controllers/Test.php */
