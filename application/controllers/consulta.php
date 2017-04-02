<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consulta extends CI_Controller {
	public function index(){
		$this->load->helper('url');
		$this->load->model('insert_model');
		$datos['base_url'] = base_url()."application/";
		$datos['url'] = base_url();	
		$datos['class_ni']='';
		$datos['class_re']='';
		$datos['class_con']='active';	
		$datos['script']='<script src="'.base_url().'assets/js/system/consulta.js"></script>';
		$data_user = $this->insert_model->getdata();
		$table='No se encuentra ningun Usuario registrado. Rehgistre uno para poder visualizar su informacióm, gracias';
		if(is_array($data_user)){
			$table = '<table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Nombre</th>
				        <th>Apellido Paterno</th>
				        <th>Apellido Materno</th>
				        <th>Fecha de nacimimento</th>
				        <th>Ingresos anualues</th>
				      </tr>
				    </thead>
					    <tbody>';
			foreach ($data_user as $key => $value) {
			      $table.="<tr>
			        <td>$value[nombre]</td>
			        <td>$value[paterno]</td>
			        <td>$value[materno]</td>
			        <td>$value[fecha_nacimiento]</td>
			        <td>$value[ingresos_anuales]</td>
			      </tr>";
			}
			$table.='';
		}
		
  		$datos['table']=$table;
		$this->load->view('headers/header',$datos);
		$this->load->view('consulta',$datos);
		$this->load->view('footers/footer',$datos);
	}
	public function buscar(){
		$data = $this->input->post();
		$this->load->model('insert_model');
		$array_data = array('filtro'=>$data['filtro'],
							'buscar'=>$data['buscar']);
		$data_user = $this->insert_model->getdata($array_data);
		$succes =false;
		$table="No existe ningun usuario con el nombre o id solicitado, verifique la información e intente nuevamente por favor.";
		if(is_array($data_user)){
		$succes =true;
			$table = '<table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Nombre</th>
				        <th>Apellido Paterno</th>
				        <th>Apellido Materno</th>
				        <th>Fecha de nacimimento</th>
				        <th>Ingresos anualues</th>
				      </tr>
				    </thead>
					    <tbody><tr>
				        <td>$value[nombre]</td>
				        <td>$value[paterno]</td>
				        <td>$value[materno]</td>
				        <td>$value[fecha_nacimiento]</td>
				        <td>$value[ingresos_anuales]</td>
				      </tr>
				      </tbody>
	  					</table>';
		}		
	  	 echo json_encode(array('succes'=>$succes, 
	  	 				'contenido'=>$table));
		
	}
}