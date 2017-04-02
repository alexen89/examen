<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Insert_model extends CI_Model {
   public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }
   function getdata($array_data= array()){
      if(!empty($array_data['filtro'])){
         $this->db->query("SELECT a.*,b.fecha_nacimiento,b.ingresos_anuales
                         FROM data_usuario_gral a
                         LEFT JOIN 
                         data_usuario_ing b
                         ON  a.id_usuario = b.id_usuario
                         WHERE a.nombre LIKE '%$array_data[buscar]%' OR a.id LIKE '%$array_data[buscar]%';");
      }else{
          $this->db->query("SELECT a.*,b.fecha_nacimiento,b.ingresos_anuales
                         FROM data_usuario_gral a
                         LEFT JOIN 
                         data_usuario_ing b
                         ON  a.id_usuario = b.id_usuario;");
      }
      if($query->num_rows >= 1){
         return $query->result_array();
      }
      return 0;
   }
   
   function inserta_usuario($datos = array()){
      $this->db->insert('data_usuario_gral',$datos);
      return $this->db->insert_id();
   }
    function inserta_usuario_inge($datos = array()){
      if(!$this->_required(array("fecha_nacimiento","ingresos_anuales"), $datos)){
         return FALSE;
      }

      $this->db->insert('data_usuario_ing',$datos);
      return $this->db->insert_id();
   }
   
}