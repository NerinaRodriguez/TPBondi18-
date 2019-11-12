<?php

namespace TrabajoTarjeta;

class PreciosBoleto implements PrecioBoletoInterface
{
	public const boleto = 32;
    public const medio = 16;

    public function devolverPrecioBoleto()
    {
        return self::boleto;
    }
}
