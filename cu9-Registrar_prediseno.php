<?php

require('configs/include.php');

class c_Registrar_prediseno extends super_controller {

    public function Agregar_prediseno() {

        $prediseno = new prediseno($this->post);
        if (is_null($prediseno->get('codigo'))) {
            $message1 = "Por favor ingrese el codigo";
        }
        if (($prediseno->get('idea') == "Seleccione")) {
            $message2 = "Por favor seleccione la idea";
        }
        if (!is_empty($message1) || !is_empty($message2))
            throw_exception($message1 . $message2);

        $pred = new prediseno($this->post);
        $this->orm->connect();
        $this->orm->insert_data("insert", $pred);
        $this->orm->close();

        $this->msg_warning = "Registro del prediseno Exitoso";
        $this->temp_aux = 'message.tpl';
        $this->type_warning = "Completo";
        $this->engine->assign('type_warning', $this->type_warning);
        $this->engine->assign('msg_warning', $this->msg_warning);
    }

    public function selectideas() {

        $options['idea']['lvl2'] = 'all';
        $this->orm->connect();
        $this->orm->read_data(array("idea"), $options);
        $idea = $this->orm->get_objects("idea");
        $this->orm->close();
        $this->engine->assign('ide', $idea);
        //echo $idea[1]->get('nombre');
    }

    /* public function actualizar_ideas(){
      $options['calificacion']['lvl2']="prom";
      $this->orm->connect();
      $this->orm->read_data(array("calificacion"), $options);
      $califica = $this->orm->get_objects("calificacion");
      print_r2($califica);
      foreach ($califica as $key => $cal) {
      if($cal->get('valor') < 3){
      $result = 'No aceptada';
      }else{
      $result = 'Aceptada';
      }
      $cod['idea']['nombre'] = $cal->get('idea');
      $options['idea']['lvl2']= "one";
      $this->orm->read_data(array("idea"), $options, $cod);
      $ii = $this->orm->get_objects("idea");
      $ii->set('etapa',$result);
      $this->orm->update_data("normal",$ii);
      }

      } */

    public function display() {
        $this->selectideas();
        $this->engine->display($this->temp_aux);
        $this->engine->display('cu9-Registrar_prediseno.tpl');
    }

    public function run() {
        try {
            if (isset($this->get->option)) {
                $this->{$this->get->option}();
            }
            /* $this->actualizar_ideas();
              $options['idea']['lvl2'] = "all";
              $this->orm->connect();
              $this->orm->read_data(array("idea"), $options, $cod);
              $ideas = $this->orm->get_objects("idea");
              $this->engine->assign('ideas', $ideas); */
        } catch (Exception $e) {
            $this->error = 1;
            $this->msg_warning = $e->getMessage();
            $this->temp_aux = 'message.tpl';
            $this->engine->assign('type_warning', $this->type_warning);
            $this->engine->assign('msg_warning', $this->msg_warning);
        }
        $this->display();
    }

}

$call = new c_Registrar_prediseno();
$call->run();
?>