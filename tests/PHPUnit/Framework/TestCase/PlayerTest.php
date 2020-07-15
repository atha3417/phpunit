<?php
use App\Models\Player;
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase {
    public $player;
    public function setUp()
    {
        $this->player = new Player('Atha');
    }

    /** @test */
    public function checkPlayerName() {
        $this->assertEquals($this->player->getName(), 'Atha');
    }

    /** @test */
    public function hashNoPokemonAsDefault()
    {
        $this->assertEmpty($this->player->pokemons);
    }

    /** @test */
    public function canCatchPokemon()
    {
        $this->player->catch('Pikachu');
        $this->assertCount(1, $this->player->pokemons);
    }

    /** @test */
    public function catchedPokemonIsInLists()
    {
        $this->player->catch('Pikachu');
        $this->player->catch('Charmender');
        $this->assertContains('Pikachu', $this->player->pokemons);
    }

    /** @test */
    public function uncatchedPokemonIsInLists()
    {
        $this->player->catch('Charmender');
        $this->assertNotContains('Pikachu', $this->player->pokemons);
    }
}