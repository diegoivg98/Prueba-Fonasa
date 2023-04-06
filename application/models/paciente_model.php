<?php
class paciente_model extends CI_Model
{
  public function getpacientenino()
  {
    $this->db->select('*');
    $this->db->from('paciente');
    $this->db->where('edad <= 15'); //condicion edad "niño"(1-15)
    $query = $this->db->get();
    return $query->result();
  }

  public function getpacientejoven()
  {
    $this->db->select('*');
    $this->db->from('paciente');
    $this->db->where('edad >= 16 and edad <=40'); //condicion edad "joven"(16-40)
    $query2 = $this->db->get();
    return $query2->result();
  }

  public function getpacienteanciano()
  {
    $this->db->select('*');
    $this->db->from('paciente');
    $this->db->where('edad >= 41'); //condicion edad "anciano"(41-100)
    $query3 = $this->db->get();
    return $query3->result();
  }

  public function getpacienteriesgo()
  {
    $this->db->select('*');
    $this->db->from('paciente');
    $this->db->order_by('riesgo', 'desc');
    $query4 = $this->db->get();
    return $query4->result();
  }

  public function getpacientefum()
  {
    $this->db->select('*');
    $this->db->from('paciente');
    $this->db->where('fumador', 1);
    $query5 = $this->db->get();
    return $query5->result();
  }

  public function guardar($data)
  {
    return $this->db->insert('paciente', $data); //INSERT INTO hospital
  }
}
