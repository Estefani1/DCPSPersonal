<?php

require ('configs/include.php');

class c_definirsoftware extends super_controller {

    public function add() {
        $software = new software($this->post);
 
       if (is_null($software->get('codigo'))) {
            $message1 = "Por favor ingrese el codigo";
        }
          if (($software->get('prediseno') == "Prediseno")) {
            $message2 = "Por favor seleccione el prediseno";
        }

        if (($software->get('lenguaje') == "Lenguaje")) {
            $message3 = "Por favor seleccione el lenguaje";
        }
        if (!is_empty($message1) || !is_empty($message2) || !is_empty($message3) )
            throw_exception($message1 . $message2 . $message3 );

        $this->orm->connect();
        $this->orm->insert_data("normal", $software);
        $this->orm->close();

        $this->type_warning = "success";
        $this->msg_warning = "software definido correctamente";
        $this->temp_aux = 'message.tpl';
        $this->engine->assign('type_warning', $this->type_warning);
        $this->engine->assign('msg_warning', $this->msg_warning
        );
    }


    public function selectprediseno() {
        $options['prediseno']['lvl2'] = 'todospredisenos';
        $this->orm->connect();
        $this->orm->read_data(array("prediseno"), $options);
        $predis = $this->orm->get_objects("prediseno");
        $this->orm->close();
        $this->engine->assign('predis', $predis);
    }

    public function display() {
        $this->selectprediseno();
        $this->engine->assign('title', 'Definir Software');
        $this->engine->display($this->temp_aux);
        $this->engine->display('cu6-definirrsoftware.tpl');
    }

    public function run() {
      try {
            if(!isset($this->session['id'])){
                header('Location: login.php');
            }else{
                if($this->session['tipo1']=="miembro"){
                    if (isset($this->get->option)){$this->{$this->get->option}();}
                }else{
                    header($this->session['header']);
                }
            }
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

$call = new c_definirsoftware();
$call->run();
?>

