<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase {
    private $calculator;

    protected function setUp(): void {
        $this->calculator = new Calculator();
    }

    /** -------- TESTE DE SOMAR NORMAL -------- */
    public function testSomar() {
        $resultado = $this->calculator->somar(5, 5);
        $this->assertEquals(10, $resultado);
    }

    /** -------- TESTE DE SOMAR COM ZERO -------- */
    public function testSomarComZero() {
        $resultado = $this->calculator->somar(3, 9);
        $this->assertEquals(12, $resultado);
    }

    /** -------- SUBTRAIR NORMAL -------- */
    public function testSubtrair() {
        $resultado = $this->calculator->subtrair(20, 8);
        $this->assertEquals(12, $resultado);
    }

    /** -------- SUBTRAIR PARA DAR NEGATIVO -------- */
    public function testSubtrairNegativo() {
        $resultado = $this->calculator->subtrair(7, 10);
        $this->assertEquals(-3, $resultado);
    }

    /** -------- MULTIPLICAR NORMAL -------- */
    public function testMultiplicar() {
        $resultado = $this->calculator->multiplicar(7, 2);
        $this->assertEquals(14, $resultado);
    }

    /** -------- MULTIPLICAR POR ZERO -------- */
    public function testMultiplicarComZero() {
        $resultado = $this->calculator->multiplicar(7, 0);
        $this->assertEquals(0, $resultado);
    }

    /** -------- DIVIDIR  NORMAL-------- */
    public function testDividirExato() {
        $resultado = $this->calculator->dividir(8, 2);
        $this->assertEquals(4, $resultado);
    }

 /** -------- DIVIDIR COM RESULTADO QUEBRADO-------- */
    public function testDividirDecimal() {
        $resultado = $this->calculator->dividir(5, 2);
        $this->assertEquals(2.5, $resultado);
    }

/** -------- DIVIDIR POR ZERO-------- */
    public function testDividirPorZero() {
        $this->expectException(\InvalidArgumentException::class);
        $this->calculator->dividir(5, 0);
    }

    /** -------- POTÊNCIA NORMAL -------- */
    public function testPotencia() {
        $resultado = $this->calculator->potencia(4, 2);
        $this->assertEquals(16, $resultado);
    }

  /** -------- POTÊNCIA POR ZERO -------- */
    public function testPotenciaZero() {
        $resultado = $this->calculator->potencia(3, 0);
        $this->assertEquals(1, $resultado);
    }

    /** -------- RAIZ QUADRADA NORMAL -------- */
    public function testRaizQuadrada() {
        $resultado = $this->calculator->raizQuadrada(144);
        $this->assertEquals(12, $resultado);
    }

    /** -------- RAIZ QUADRADA POR ZERO -------- */
    public function testRaizQuadradaZero() {
        $resultado = $this->calculator->raizQuadrada(0);
        $this->assertEquals(0, $resultado);
    }

/** -------- RAIZ QUADRADA PARA DAR NEGATIVO-------- */
    public function testRaizQuadradaNegativo() {
        $this->expectException(\InvalidArgumentException::class); /*Esse teste só vai passar se, em algum momento, for lançada uma exceção do tipo InvalidArgumentException */
        $this->calculator->raizQuadrada(-16);
        /*Percebe que foi lançada exatamente a exceção esperada (InvalidArgumentException).
Então considera o teste aprovado.*/
    }

    /** -------- FATORIAL DE ZERO-------- */
    public function testFatorialZero() {
        $resultado = $this->calculator->fatorial(0);
        $this->assertEquals(1, $resultado);
    } /*Espero que o resultado seja exatamente 1*/ 

    /** -------- FATORIAL NORMAL-------- */
    public function testFatorialPositivo() {
        $resultado = $this->calculator->fatorial(3);/* puxa a função de fatorial e faz por 3*/
        $this->assertEquals(6, $resultado);
    }
}

