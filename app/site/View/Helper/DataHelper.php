<?php

/* /app/View/Helper/LinkHelper.php (using other helpers) */
App::uses('AppHelper', 'View/Helper');

class DataHelper extends AppHelper {

    public $helpers = array('Html');

    /*
     * Método que formata DateTime para a exibição por extenso na view  no formato "dia de mês de ano" (01 de Janeiro de 2014)
     */

    public function dataExtenso($data) {

        $date = new DateTime($data);
        $str = $date->format('Y-m-d');
        $part = explode('-', $str);
        $dia = $part[2];
        $mes = $part[1];
        $ano = $part[0];
        //$semana = $data('w');

        switch ($mes) {

            case 1: $mes = "Janeiro";
                break;
            case 2: $mes = "Fevereiro";
                break;
            case 3: $mes = "Março";
                break;
            case 4: $mes = "Abril";
                break;
            case 5: $mes = "Maio";
                break;
            case 6: $mes = "Junho";
                break;
            case 7: $mes = "Julho";
                break;
            case 8: $mes = "Agosto";
                break;
            case 9: $mes = "Setembro";
                break;
            case 10: $mes = "Outubro";
                break;
            case 11: $mes = "Novembro";
                break;
            case 12: $mes = "Dezembro";
                break;
        }

        return $dia . " de " . $mes . " de " . $ano;
    }

    public function dataDiaMes($data) {

        $date = new DateTime($data);
        $str = $date->format('Y-m-d');
        $part = explode('-', $str);
        $dia = $part[2];
        $mes = $part[1];


        return $dia . "." . $mes;
    }
    
    public function diaMesAno($data) {
        $date = new DateTime($data);
        $str = $date->format('Y-m-d');
        $part = explode('-', $str);
        $dia = $part[2];
        $mes = $part[1];
        $ano = $part[0];
        return $dia . "." . $mes . "." . $ano;
        
    }
    public function horaExtenso($data) {

        $date = new DateTime($data);
        $str = $date->format('H-i');
        $part = explode('-', $str);
        $min = $part[1];
        $hora = $part[0];


        return $hora . ":" . $min;
    }

}
