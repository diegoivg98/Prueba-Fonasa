<?php
class Hospitales extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hospital_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$data = array('hospital' => $this->Hospital_model->gethospital(),);
		$this->load->view("template/header");
		$this->load->view("template/footer");
		$this->load->view("hospital/listar", $data);
	}

	public function add()
	{
		$this->load->view("template/header");
		$this->load->view("template/footer");
		$this->load->view("hospital/crear");
	}

	public function store()
	{
		$nom_hospital = $this->input->post("nom_hospital");
		$direccion = $this->input->post("direccion");

		$this->form_validation->set_rules("nom_hospital", "nombre", "required");
		$this->form_validation->set_rules("direccion", "direccion", "required");

		if ($this->form_validation->run()) {
			$data = array(
				'nom_hospital' => $nom_hospital,
				'direccion' => $direccion
			);

			if ($this->Hospital_model->guardar($data)) {
				//guarda con exito y manda a la tabla con la lista de los hospitales
				redirect(base_url() . "Hospitales");
			} else {
				//error al guardar
				redirect(base_url() . "hospital/crear");
			}
		} else {
			$this->add();
		}
	}

	public function edit($id_hospital)
	{
		$data2 = array('hospital' => $this->Hospital_model->getidhosp($id_hospital));
		$this->load->view("template/header");
		$this->load->view("hospital/editar", $data2);
		$this->load->view("template/footer");
	}

	public function update()
	{
		$id_hospital = $this->input->post("id_hospital");
		$nom_hospital = $this->input->post("nom_hospital");
		$direccion = $this->input->post("direccion");

		$this->form_validation->set_rules("nom_hospital", "Nombre Hospital", "trim|required");
		$this->form_validation->set_rules("direccion", "Direccion", "trim|required");

		if ($this->form_validation->run()) {
			$data = array(
				'id_hospital' => $id_hospital,
				'nom_hospital' => $nom_hospital,
				'direccion' => $direccion
			);

			if ($this->Hospital_model->update($id_hospital, $data)) {
				redirect(base_url() . "Hospitales");
			} else {
				$this->session->set_flashdata("error", "No se pudo actualizar la informacion");
				redirect(base_url() . "hospital/editar");
			}
		} else {
			$this->edit($id_hospital);
		}
	}
}
