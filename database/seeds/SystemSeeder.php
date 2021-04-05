<?php

use Illuminate\Database\Seeder;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Personagens 
        - Perícias
        - Proficiências
        - Equipamento
        - História Pregressa, FIliação, Tesouro, Conhecidos.
        */
        //rollDice(value, msg);
        $attributes = [
            ['id' => 1, 'name' => 'strength', 'acronym' => 'str', 'value' => 12, 'modifier' => '+1', 'listener' => ['click' => 'rollDice("1d20+this.modifier", "Strength Test!")']],
            ['id' => 2, 'name' => 'dexterity', 'acronym' => 'dex', 'value' => 10, 'modifier' => 0, 'listener' => ['click' => 'rollDice("1d20+this.modifier", "Dexterity Test!")']],
            ['id' => 3, 'name' => 'constitution', 'acronym' => 'con', 'value' => 10, 'modifier' => 0, 'listener' => ['click' => 'rollDice("1d20+this.modifier", "Constitution Test!")']],
            ['id' => 4, 'name' => 'intelligence', 'acronym' => 'int', 'value' => 10, 'modifier' => 0, 'listener' => ['click' => 'rollDice("1d20+this.modifier", "Inteligence Test!")']],
            ['id' => 5, 'name' => 'wisdom', 'acronym' => 'wis', 'value' => 10, 'modifier' => 0, 'listener' => ['click' => 'rollDice("1d20+this.modifier", "Wisdom Test!")']],
            ['id' => 6, 'name' => 'charisma', 'acronym' => 'cha', 'value' => 10, 'modifier' => 0, 'listener' => ['click' => 'rollDice("1d20+this.modifier", "Charism Test!")']],
        ];

        //$stats

        /*$skills = [
            ['name' => 'acrobatics', 'attr_id' => 2, 'is_proficient' => false],
        ];*/
        
        $array_stardad_sheet = [
            'attributes' => $attributes,
        ];

        $json_standard_sheet = json_encode($array_stardad_sheet);

        DB::table('table_system')->insert([
            'name' => 'D&D 5e',
            'standard_sheet' => $json_standard_sheet,
            'standard_item' => 'Item Incrível',
        ]);
    }
}
