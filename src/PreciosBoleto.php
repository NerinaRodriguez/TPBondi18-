<?php

namespace TrabajoTarjeta;

class PreciosBoleto implements PrecioBoletoInterface
{
	public $boleto = 32;

    public function devolverPrecioBoleto()
    {
        return $this->boleto;
    }
}
