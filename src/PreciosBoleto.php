<?php

namespace TrabajoTarjeta;

class PreciosBoleto implements PrecioBoletoInterface
{
	public $boleto = 14.8;

    public function devolverPrecioBoleto()
    {
        return $boleto;
    }
}
