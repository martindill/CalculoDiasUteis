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
    }

    public function testCalculaIntervaloDiasUteisPassandoFeriados(): void
    {
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-11-02', ['2022-11-02', '2022-11-15']), 1);
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-11-03', ['2022-11-02', '2022-11-15']), 2);
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-11-05', ['2022-11-02', '2022-11-15']), 3);
        $this->assertEquals(Calcular::diasUteis('2022-11-02', '2022-11-15', ['2022-11-02', '2022-11-15']), 8);
        $this->assertEquals(Calcular::diasUteis('2022-11-02', '2022-11-16', ['2022-11-02', '2022-11-15']), 9);
        $this->assertEquals(Calcular::diasUteis('2022-11-02', '2022-11-19', ['2022-11-02', '2022-11-15']), 11);
        $this->assertEquals(Calcular::diasUteis('2022-11-13', '2022-11-15', ['2022-11-02', '2022-11-15']), 1);
        $this->assertEquals(Calcular::diasUteis('2022-11-13', '2022-11-16', ['2022-11-02', '2022-11-15']), 2);
        $this->assertEquals(Calcular::diasUteis('2022-11-13', '2022-11-19', ['2022-11-02', '2022-11-15']), 4);
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-11-30', ['2022-11-02', '2022-11-15']), 20);
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-12-01', ['2022-11-02', '2022-11-15']), 21);
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-12-02', ['2022-11-02', '2022-11-15']), 22);
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-12-03', ['2022-11-02', '2022-11-15']), 22);
        $this->assertEquals(Calcular::diasUteis('2022-11-01', '2022-12-04', ['2022-11-02', '2022-11-15']), 22);
    }

}