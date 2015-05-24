<?php

require ('configs/include.php');

class c_proponeridea extends super_controller {

    public function add() {
        $idea = new idea($this->post);

        if (is_empty($idea->get('nombre')) || is_empty($idea->get('descripcion')) || ($idea->get('necesidad') == "Seleccione necesidad")) {
            throw_exception("Campos incompletos");
        }
        if ($this->session['tipo1'] == "miembro") {
            $idea->set('cliente', 'NULL');
            $idea->set('miembro', $this->session['id']);
        } else {
            $idea->set('miembro', 'NULL');
            $idea->set('cliente', $this->session['id']);
        }

        $this->orm->connect();
        $this->orm->insert_data("normal", $idea);
        $this->orm->close();
        $this->type_warning = "success";
        $this->msg_warning = "Idea propuesta correctamente";

        $this->temp_aux = 'message.tpl';
        $this->engine->assign('type_warning', $this->type_warning);
        $this->engine->assign('msg_warning', $this->msg_warning);
    }

    public function display() {
        $this->engine->assign('title', 'proponer idea');
        $this->engine->display($this->temp_aux);
        $this->engine->display('cu2-proponeridea.tpl');
    }

    public function run() {

        try {
            if (!isset($this->session['id'])) {
                header('Location: login.php');
            } else {
                if ($this->session['tipo1'] == "cliente" || $this->session['tipo1'] == "miembro") {
                    if (isset($this->get->option)) {
                        $this->{$this->get->option}();
                    }
                    $options['necesidad']['lvl2'] = "all";
                    $this->orm->connect();
                    $this->orm->read_data(array("necesidad"), $options);
                    $necesidad = $this->orm->get_objects("necesidad");
                    $this->orm->close();
                    $this->engine->assign('necesidad', $necesidad);
                } else {
                    header('Location: disenador.php');
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

$call = new c_proponeridea();
$call->run();
?>