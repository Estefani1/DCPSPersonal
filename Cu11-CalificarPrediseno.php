<?php
require('configs/include.php');
class c_calificar_prediseno extends super_controller {
    public function calificar()
	{
            $prediseno = new prediseno($this->post);
            if(is_empty($prediseno))
            {throw_exception("Error, falta seleccionar prediseño");}
            $prediseno->set('gerente',$this->session['id']);
            
            $this->orm->connect();
            $this->orm->update_data("calificar",$prediseno);
            $this->orm->close();
            
            $this->type_warning = "success";
            $this->msg_warning = "calificacion exitosa";
            
            $this->temp_aux = 'message.tpl';
            $this->engine->assign('type_warning',  $this->type_warning);
            $this->engine->assign('msg_warning',  $this->msg_warning);
	}
    public function display() {
        $option['viabilidad']['lvl2']="all";
        $option1['prediseno']['lvl2']="all";
        $option1['dispositivo']['lvl2']="all";
        $option2['prediseno']['lvl2']="all";
        $option2['software']['lvl2']="all";
        
        $components1['dispositivo']['prediseno']=array("d_p");
        $components2['software']['prediseno']=array("s_p");
        $this->orm->connect();
        $this->orm->read_data(array("viabilidad"),$option);
        $viabilidad = $this->orm->get_objects("viabilidad");
        $this->orm->read_data(array("dispositivo","prediseno"),$option1);
        $dispositivo = $this->orm->get_objects("dispositivo",$components1);
        $this->orm->read_data(array("software","prediseno"),$option2);
        $software = $this->orm->get_objects("software",$components2);
        $this->orm->close();
        
        if(!isset($viabilidad)){
            $this->error=1;  $this->msg_warning="No hay prediseños para calificar";
            $this->engine->assign('type_warning',$this->type_warning);
            $this->engine->assign('msg_warning',$this->msg_warning);
            $this->temp_aux = 'message.tpl';
            header('Location: opciones_gerente.php');
            }
            
        $this->engine->assign('viabilidad', $viabilidad);
        $this->engine->assign('dispositivo', $dispositivo);
        $this->engine->assign('software', $software);
        $this->engine->assign('title', 'calificar prediseño');
     
        $this->engine->display($this->temp_aux);
        $this->engine->display('Cu11-CalificarPrediseno.tpl');
    }
    public function run() {
        try {if(!isset($this->session['id'])){
                header('Location: login.php');
            }else{
                if($this->session['tipo2']=="gerente de negocios"){
                if (isset($this->get->option)){$this->{$this->get->option}();}
                }else{
                    header('Location: opciones_gerente.php');
                }
            }
        }catch (Exception $e){
            $this->error=1;  $this->msg_warning=$e->getMessage();
            $this->engine->assign('type_warning',$this->type_warning);
            $this->engine->assign('msg_warning',$this->msg_warning);
            $this->temp_aux = 'message.tpl';
        }
        $this->display();
    }
}
$ob = new c_calificar_prediseno();
$ob->run();
?>