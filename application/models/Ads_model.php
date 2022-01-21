
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  Ads_model extends CI_Model {
    const TABLE_NAME = 'ads';
	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert(Array $data) {
        if ($this->db->insert(self::TABLE_NAME, $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }
    public function get()
    {
    $this->db->select('*');
    return   $this->db->get(self::TABLE_NAME)->result_array();


    }
   public function getById($id)
   {   
   	    $this->db->select('*');
       $this->db->where('id',$id);
       return  $this->db->get(self::TABLE_NAME)->result_array();
   }

   public function update(Array $data,$id) {
       $this->db->where('id', $id);
       return $this->db->update(self::TABLE_NAME, $data);
    }
   	public function deleteById($id)
	{
	    $this->db->where('id', $id);
	    return $this->db->delete(self::TABLE_NAME);
	}

}

/* End of file  */
/* Location: ./application/models/ */
