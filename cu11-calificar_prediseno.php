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
       
        $this->engine->assign('title', 'calificar prediseño');
     
        $this->engine->display($this->temp_aux);
        $this->engine->display('cu11-calificar_prediseno.tpl');
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