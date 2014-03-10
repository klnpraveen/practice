<?php 
	class Items_model extends CI_Model
	{
		public function dplist()
		{
			$data = array();
			$this->db->select('*');
			$this->db->from('upc');
  			$query = $this->db->get();
  			return $query->result();
		} 
		public function get_items()
		{
			$return[''] = 'please select';
    		$this->db->order_by('id', 'asc'); 
    		$query = $this->db->get('upc'); 
    		foreach($query->result_array() as $row)
    		{
       			 $return[$row['id']] = $row['item_id'];
    		}
		    return $return;
		}
		public function get_upc()
		{
			$this->db->select('*');
			$this->db->from('upc');
			$this->db->where('item_id','1');
			$query = $this->db->get();
			return $query->result();
		}
		public function getAffectedRows()
		{
    		return $this->db->affected_rows();
		}
	}

?>