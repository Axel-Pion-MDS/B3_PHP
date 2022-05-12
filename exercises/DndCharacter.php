<?php

class DndCharacter
{
    public array $character;
    public ?int $strength;
    public ?int $dexterity;
    public ?int $constitution;
    public ?int $intelligence;
    public ?int $wisdom;
    public ?int $charisma;
    public ?int $ability;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $this->strength = $this->rollDices();
        $this->dexterity = $this->rollDices();
        $this->constitution = $this->rollDices();
        $this->intelligence = $this->rollDices();
        $this->wisdom = $this->rollDices();
        $this->charisma = $this->rollDices();
        $this->ability = $this->rollDices();
        $this->hitpoints = $this->hitpoint();
    }

    /**
     * @throws Exception
     */
    public static function generate(): DndCharacter
    {
        return new DndCharacter();
    }

    public static function ability(): int
    {
        return (new DndCharacter())->ability;
    }

    /**
     * @throws Exception
     */
    private function rollDices(): int
    {
        $dice1 = $this->roll();
        $dice2 = $this->roll();
        $dice3 = $this->roll();
        $dice4 = $this->roll();
        $minFound = min($dice1, $dice2, $dice3, $dice4);
        return $dice1 + $dice2 + $dice3 + $dice4 - $minFound;
    }

    /**
     * @throws Exception
     */
    private function roll(): int
    {
        return random_int(1, 6);
    }

    public static function modifier(int $modifier): int
    {
        return floor(($modifier - 10) / 2);
    }

    private function calculateConstitutionModifier(): int
    {
        return floor(($this->constitution - 10) / 2);
    }

    private function hitpoint(): int
    {
        return 10 + $this->calculateConstitutionModifier();
    }
}
