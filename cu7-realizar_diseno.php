<?php

require('configs/include.php');

class c_realizar_diseno extends super_controller {

    public function add() {

        if (is_empty($this->post->codigo)) {
            $message1 = "Por favor ingrese el codigo";
        }
        if ($this->post->dispositivo == "Seleccione") {
            $message2 = "Por favor seleccione el dispositivo";
        }
        if ($this->post->software == "Seleccione") {
            $message3 = "Por favor seleccione el software";
        }
        if (!is_empty($message1) || !is_empty($message2) || !is_empty($message3))
            throw_exception($message1 . $message2 . $message3);


        settype($disen, 'object');
        $disen->codigo = $this->post->codigo;
        $disen->dispositivo = $this->post->dispositivo;
        $disen->software = $this->post->software;
        $disen->imagen = $_FILES['imagen']['name'];

        $diseno = new diseno($disen);
        $this->orm->connect();
        $this->orm->insert_data("normal", $diseno);
        $this->orm->close();
        if ($_FILES['imagen']["error"] > 0) {

            echo "Error: " . $_FILES['imagen']['error'] . "<br>";
        } else {

            move_uploaded_file($_FILES['imagen']['tmp_name'], 'C:/wamp/www/ProyectoDCPS/images/' . $_FILES['imagen']['name']);
        }

        $this->type_warning = "success";
        $this->msg_warning = "Diseño exitoso";

        $this->temp_aux = 'message.tpl';
        $this->engine->assign('type_warning', $this->type_warning);
        $this->engine->assign('msg_warning', $this->msg_warning);
    }

    public function select_dispositivo_software() {
        $options['dispositivo']['lvl2'] = 'all';
        $options1['software']['lvl2'] = 'all';
        $this->orm->connect();
        $this->orm->read_data(array("dispositivo"), $options);
        $this->orm->read_data(array("software"), $options1);
        $dispositivo = $this->orm->get_objects("dispositivo");
        $software = $this->orm->get_objects("software");
        $this->engine->assign('dispositivo', $dispositivo);
        $this->engine->assign('software', $software);
    }

    public function display() {
        $this->select_dispositivo_software();
        $this->engine->display($this->temp_aux);
        $this->engine->display('cu7-realizar_diseno.tpl');
        $this->orm->close();
    }

    public function run() {
        try {
            if (!isset($this->session['id'])) {
                header('Location: login.php');
            } else {
                if ($this->session['tipo2'] == "ingeniero de hardware" || $this->session['tipo1'] == "disenador grafico") {
                    if (isset($this->get->option)) {
                        $this->{$this->get->option}();
                    }
                } else {
                    header($this->session['header']);
                }
            }
        } catch (Exception $e) {
            $this->error = 1;
            $this->type_warning = "error";
            $this->msg_warning = $e->getMessage();
            $this->temp_aux = 'message.tpl';
            $this->engine->assign('type_warning', $this->type_warning);
            $this->engine->assign('msg_warning', $this->msg_warning);
        }
        $this->display();
    }

}

$call = new c_realizar_diseno();
$call->run();
?>