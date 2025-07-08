<?php

namespace ScreenMatch\Calculos;

use DivisionByZeroError;
use ScreenMatch\Modelo\Avaliavel;

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        try {
        $nota = $avaliavel->media();

        return round($nota) / 2;
        } catch (DivisionByZeroError $erro ){
            echo $erro->getMessage();
            return 0;
        }
    }
}
