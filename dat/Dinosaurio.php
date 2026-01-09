<?php
class Dinosaurio {
    private $id;
    private $nombre;
    private $nombre_era;
    private $nombre_periodo;
    private $tiempo_vida;
    private $ubicacion;
    private $alimentacion;
    private $agresividad;
    private $familia;
    private $especie;
    private $total_votos;
    private $tipo;

    function __get($atributo){
        if(property_exists($this, $atributo)) {
            return $this->$atributo;
        }
    }
    function __set($atributo, $valor){
        if(property_exists($this, $atributo)) {
            $this->$atributo = $valor;
        }
    }
}
?>