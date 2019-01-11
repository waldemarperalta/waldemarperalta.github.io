<?php

function __autoload($f) {
    if (file_exists("../../../Apllication/core/" . $f . ".php"))
        require("../../../Apllication/core/" . $f . ".php");
    else if (file_exists("../../../Apllication/controller/" . $f . ".php"))
        require("../../../Apllication/controller/" . $f . ".php");
    else if (file_exists("../../../Apllication/model/" . $f . ".php"))
        require("../../../Apllication/model/" . $f . ".php");
    else if (file_exists("../../../Apllication/core/util/" . $f . ".php"))
        require("../../../Apllication/core/util/" . $f . ".php");

    if (file_exists("../../Apllication/core/" . $f . ".php"))
        require("../../Apllication/core/" . $f . ".php");
    else if (file_exists("../../Apllication/controller/" . $f . ".php"))
        require("../../Apllication/controller/" . $f . ".php");
    else if (file_exists("../../Apllication/model/" . $f . ".php"))
        require("../../Apllication/model/" . $f . ".php");
    else if (file_exists("../../Apllication/core/util/" . $f . ".php"))
        require("../../Apllication/core/util/" . $f . ".php");

    if (file_exists("../Apllication/core/" . $f . ".php"))
        require("../Apllication/core/" . $f . ".php");
    else if (file_exists("../Apllication/controller/" . $f . ".php"))
        require("../Apllication/controller/" . $f . ".php");
    else if (file_exists("../Apllication/model/" . $f . ".php"))
        require("../Apllication/model/" . $f . ".php");
    else if (file_exists("../Apllication/core/util/" . $f . ".php"))
        require("../Apllication/core/util/" . $f . ".php");

    if (file_exists("Apllication/core/" . $f . ".php"))
        require("Apllication/core/" . $f . ".php");
    else if (file_exists("Apllication/controller/" . $f . ".php"))
        require("Apllication/controller/" . $f . ".php");
    else if (file_exists("Apllication/model/" . $f . ".php"))
        require("Apllication/model/" . $f . ".php");
    else if (file_exists("Apllication/core/util/" . $f . ".php"))
        require("Apllication/core/util/" . $f . ".php");
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FacadePrincipal
 *
 * @author Nakassony.Bernardo
 */
class FacadePrincipal {

    public function clienteController() {
        return new ClienteController();
    }
    
    public function administradorController() {
        return new AdministradorController;
    }
     public function registrosController() {
        return new RegistrosController;
    }
}

$facadePrincipal = new FacadePrincipal();
?>
