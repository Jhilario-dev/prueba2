<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $curso = new Curso();
        $curso->nombre = 'vue';
        $curso->descripcion = 'kajdkjaksjskajks';
        $curso->categoria = 'desarrollo web';

        $curso->save();

        $curso2 = new Curso();
        $curso2->nombre = 'vue';
        $curso2->descripcion = 'kajdkjaksjskajks';
        $curso2->categoria = 'desarrollo web';

        $curso2->save();

        $curso2 = new Curso();
        $curso2->nombre = 'vue';
        $curso2->descripcion = 'kajdkjaksjskajks';
        $curso2->categoria = 'desarrollo web';

        $curso2->save();

    }
}
