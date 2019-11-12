<?php

namespace TrabajoTarjeta;

interface BoletoInterface
{

    /**
     * Devuelve el valor del boleto.
     *
     * @return int
     */
    public function obtenerValor();

    /**
     * Devuelve un objeto que respresenta el colectivo donde se viajó.
     *
     * @return ColectivoInterface
     */
    public function obtenerColectivo();

    public function obtenerFecha();

    public function obtenerTarjeta();

    public function obtenerLinea();

    public function obtenerAbonado();

    public function obtenerIdTarjeta();

    public function obtenerSaldo();

    public function obtenerTipo();

    public function obtenerDescripcion();
}
