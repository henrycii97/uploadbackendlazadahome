
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('test_model');
    }

    public function index()
    {   
      
        $number_one = 5000;
        $number_two = 9;
     
      
        $number_one = $number_one * $number_two;
        $test = number_format($number_one,5,",",".");
        echo $test;
    }

    public function add()
    {
       

       
    }
   

}



/* End of file Test.php */
/* Location: ./application/models/Test.php */
/* End of file Test.php */
/* Location: ./application/controllers/Test.php */
