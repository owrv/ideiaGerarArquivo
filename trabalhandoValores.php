<?php

class trabalhandoValores {
    public function incrementarNumerico($nomeArquivo , $quantidade)
    {
        $quantidade++;
        $nomeArquivo = $nomeArquivo.$quantidade;
        return $nomeArquivo;
    }

    public function decrementoNumerico($nomeArquivo , $quantidade)
    {
        $quantidade--; 
        $nomeArquivo = $nomeArquivo.$quantidade;
        return $nomeArquivo;
    }

    public function incrementarAlfabetico($nomeArquivo , $quantidade)
    {
        $alfabeto = range('A' , 'Z');
        foreach ($alfabeto as $key => $value) {
            if (strtoupper($quantidade) == "Z") {                
                $decremento = "Z";
            } elseif ($value == strtoupper($quantidade)) {
                $key++;
                $decremento = $alfabeto[$key];
            }
        }
        $nomeArquivo = $nomeArquivo.$decremento;
        return $nomeArquivo;
    }

    public function decrementoAlfabetico($nomeArquivo , $quantidade)
    {
        $alfabeto = range('A' , 'Z');
        foreach ($alfabeto as $key => $value) {
            if (strtoupper($quantidade) == "A") {
                $decremento = "A";
            } elseif ($value == strtoupper($quantidade)) {
                $key--;
                $decremento = $alfabeto[$key];
            }             
        }
        $nomeArquivo = $nomeArquivo.$decremento;
        return $nomeArquivo;
    }
}
