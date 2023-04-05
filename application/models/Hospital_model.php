<?php 

class Hospital_Model extends CI_Model
{	
	public function gethospital()
	{
		$this->db->order_by('id_hospital', 'ASC');
		$resultado = $this->db->get("hospital"); 
		if ($resultado->num_rows() > 0) {
			return $resultado->result();
		} else {
			return false;
		}
	}

	public function guardar($data)
	{
		return $this->db->insert('hospital', $data);
	}
	
	public function getidhosp($id_hospital)
	{
		$this->db->where("id_hospital", $id_hospital);
		$resultado = $this->db->get("hospital");
		return $resultado->row();
	}

	public function update($id_hospital, $data)
	{
		$this->db->where("id_hospital", $id_hospital);
		return $this->db->update("hospital", $data);
	}
}
?>
