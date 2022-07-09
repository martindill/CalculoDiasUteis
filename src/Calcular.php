<?php

namespace Martindill\CalculoDiasUteis;

class Calcular
{

    public static function diasUteis($dataInicial, $dataFinal) {
        $diasUteis = [1, 2, 3, 4, 5]; //segunda a sexta
        $feriados = ['*-11-02', '*-11-15'];

        $dtInicial = new \DateTime($dataInicial);
        $dtFinal = new \DateTime($dataFinal);
        $dtFinal->modify('+1 day');
        $interval = new \DateInterval('P1D');
        $periods = new \DatePeriod($dtInicial, $interval, $dtFinal);

        $days = 0;
        foreach ($periods as $period) {
            if (!in_array($period->format('N'), $diasUteis)) continue;
            if (in_array($period->format('Y-m-d'), $feriados)) continue;
            if (in_array($period->format('*-m-d'), $feriados)) continue;
            $days++;
        }
        return $days;
    }

}
