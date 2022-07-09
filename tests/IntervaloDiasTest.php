<?php declare(strict_types=1);

use Martindill\CalculoDiasUteis\Calcular;
use PHPUnit\Framework\TestCase;

final class IntervaloDiasTest extends TestCase
{

    public function testCalculaIntervaloDiasUteis(): void
    {
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-11-02'), 1);
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-11-03'), 2);
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-11-05'), 3);
        $this->assertEquals(Calcular::diasUteis('2022-11-02', '2022-11-15'), 8);
        $this->assertEquals(Calcular::diasUteis('2022-11-02', '2022-11-16'), 9);
        $this->assertEquals(Calcular::diasUteis('2022-11-02', '2022-11-19'), 11);
        $this->assertEquals(Calcular::diasUteis('2022-11-13', '2022-11-15'), 1);
        $this->assertEquals(Calcular::diasUteis('2022-11-13', '2022-11-16'), 2);
        $this->assertEquals(Calcular::diasUteis('2022-11-13', '2022-11-19'), 4);
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-11-30'), 20);
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-12-01'), 21);
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-12-02'), 22);
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-12-03'), 22);
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-12-04'), 22);

        /**
         * dia inicio	dia fim	dias uteis (manual)
            01/11/2022	02/11/2022	1
            01/11/2022	03/11/2022	2
            01/11/2022	05/11/2022	3
            02/11/2022	15/11/2022	8
            02/11/2022	16/11/2022	9
            02/11/2022	19/11/2022	11
            13/11/2022	15/11/2022	1
            13/11/2022	16/11/2022	2
            13/11/2022	19/11/2022	4
         */

         


    }

}