<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insert extends CI_Controller {
	public function __construct() {
        parent::__construct();
    }

	public function index(){
		$this->load->helper('url');
		$datos['base_url'] = base_url()."application/";
		$datos['url'] = base_url();	
		$datos['script']='<script src="'.base_url().'assets/js/system/insert.js"></script>';
		$datos['class_ni']='';
		$datos['class_re']='active';
		$datos['class_con']='';
		$this->load->view('headers/header',$datos);
		$this->load->view('insert',$datos);
		$this->load->view('footers/footer',$datos);
	}
	public function insert_data(){
		$data = $this->input->post();
		$this->load->model('insert_model');
	
		$array_data = array('nombre'=>$data['nombre'],
							'paterno'=>$data['paterno'],
							'materno'=>$data['materno'],
							'timestamp'=> date("Y-m-d H:i:s"),
							'activo'=> 1);
		$id_usuario = $this->insert_model->inserta_usuario($array_data);
		if($id_usuario){
			
			
			$data_insetr = array('id_usuario'=>$id_usuario,
								  'fecha_nacimiento'=>$data['fecha_na'],
								  'ingresos_anuales'=>$data['ingreso'],
								  'timestamp'=> date("Y-m-d H:i:s"),
								  'activo'=> 1);
			$data_array = $this->insert_model->inserta_usuario($array_data);
			if($data_array){
				echo json_decode(array('succes'=>true,'msg'=>'Exito al ingresar eun registro'));
			}else{
				echo json_decode(array('succes'=>false,'msg'=>'Hubo un error al intentar registrar al nuevo usuario, intente nuevamente por favor.'));	
			}
			
		}else{
			echo json_decode(array('succes'=>false,'msg'=>'Hubo un error al intentar registrar al nuevo usuario, intente nuevamente por favor.'));
		}
	}
}