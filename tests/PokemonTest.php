<?php

use PHPUnit\Framework\TestCase;
use App\Models\Pokemon;

class PokemonTest extends TestCase {
    /** @test */
    public function cekPokemonFirstName()
    {
        $pokemon = new Pokemon;
        $pokemon->setFirstName('Pikachu');
        $this->assertEquals($pokemon->getFirstName(), 'Pikachu');
    }
}
