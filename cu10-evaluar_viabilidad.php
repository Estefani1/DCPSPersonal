<?php

require('configs/include.php');

class c_evaluar_viabilidad extends super_controller {

    //protected $pr;
    public function add() {

        $viabilidad = new viabilidad($this->post);
        if (is_null($viabilidad->get('codigo'))) {
            $message1 = "Por favor ingrese el codigo";
        }
        if (($viabilidad->get('prediseno') == "Prediseno")) {
            $message2 = "Por favor seleccione el prediseno";
        }
        if (($viabilidad->get('resultado') == "Seleccione")) {
            $message3 = "Por favor seleccione el Resultado";
        }
        if (is_null($viabilidad->get('causa'))) {
            $message4 = "Por favor ingrese la causa";
        }
        if (!is_empty($message1) || !is_empty($message2) || !is_empty($message3) || !is_empty($message4))
            throw_exception($message1 . $message2 . $message3 . $message4);

        $viabilidad->set('analista', $this->session['id']);
        //---Obtengo la idea del prediseño que seleccone
        $options['prediseno']['lvl2'] = 'all';
        $cod['prediseno']['codigo'] = $this->post->prediseno;


        $this->orm->connect();

        $this->orm->insert_data("normal", $viabilidad);
        $this->orm->read_data(array("prediseno"), $options, $cod);
        $prediseno = $this->orm->get_objects("prediseno");

        $options1['idea']['lvl2'] = 'one';
        $cod1['idea']['nombre'] = $prediseno[0]->get('idea');

        $this->orm->read_data(array("idea"), $options1, $cod1);
        $ide = $this->orm->get_objects("idea");



        settype($idea, 'object');
        $idea->nombre = $ide[0]->get('nombre');
        $idea->etapa = $this->post->resultado;

        $idea1 = new idea($idea);
        if ($this->post->resultado == "Modificable") {
            $this->orm->update_data("modificable", $idea1);
        }
        $this->orm->close();


        $this->type_warning = "success";
        $this->msg_warning = "asiganacion exitosa";

        $this->temp_aux = 'message.tpl';
        $this->engine->assign('type_warning', $this->type_warning);
        $this->engine->assign('msg_warning', $this->msg_warning);
    }

    public function selectprediseno() {
        $options['prediseno']['lvl2'] = 'sinviabilidad';
        $this->orm->connect();
        $this->orm->read_data(array("prediseno"), $options);
        $predis = $this->orm->get_objects("prediseno");
        $this->orm->close();
        $this->engine->assign('predis', $predis);
    }

    public function display() {
        $this->selectprediseno();
        $this->engine->assign('title', 'Evaluar viabilidad');
        $this->engine->display($this->temp_aux);
        $this->engine->display('cu10-evaluar_viabilidad.tpl');
    }

    public function run() {
        try {
            if (!isset($this->session['id'])) {
                header('Location: login.php');
            } else {
                if ($this->session['tipo2'] == "analista de negocios") {
                    if (isset($this->get->option)) {
                        $this->{$this->get->option}();
                    }
                } else {
                    header('Location: opciones_analista.php');
                }
            }
        } catch (Exception $e) {
            $this->error = 1;
            $this->msg_warning = $e->getMessage();
            $this->engine->assign('type_warning', $this->type_warning);
            $this->engine->assign('msg_warning', $this->msg_warning);
            $this->temp_aux = 'message.tpl';
        }
        $this->display();
    }

}

$ob = new c_evaluar_viabilidad();
$ob->run();
?>