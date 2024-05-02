<?php

use Jugador;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

// Testear si se instancia
// Testear si funciona el método moverse
// Testear si funcionan los métodos particulares de cada tipo de jugador


final class JugadorTest extends TestCase
{
  #[Test]
  public function istanciarJugadorDeCualquierTipo(): void
  {
    $guerrero = new Guerrero('Forzudón', 'MalditaBastarda');

    $mensajeGuerrero = (string) $guerrero;

    $valorEsperado = "Este jugador se llama $guerrero->nickname";

    $this->assertEquals($valorEsperado, $mensajeGuerrero);
  }


  #[Test]
  public function probarCantidadFlechasDelArqueroAlInicio(): void
  {
    $cantidadFlechasInicial = Arquero::$flechas;
    $valorEsperado = 100;

    $this->assertEquals($valorEsperado, $cantidadFlechasInicial);
  }

  #[Test]
  public function probarDisparoDeFlecha(): void
  {
    $arquero = new Arquero('Asquerosín Certero', 'Ojo de Halcón psicópata');

    $arquero->dispararFlecha();

    $cantidadFlechasDespuesDeDisparo = Arquero::$flechas;
    $valorEsperado = 99;

    $this->assertEquals($valorEsperado, $cantidadFlechasDespuesDeDisparo);
  }
}
