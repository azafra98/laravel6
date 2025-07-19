<?php

use App\Corte;
use App\Horario;
use App\User;
use App\Reserva;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->seedCortes();
        $this->seedTramosHorarios();
    }

    public function seedTramosHorarios(){
        Horario::create(array("turno"=> "mañana", "horaComienzo" => "09:00"));
        Horario::create(array("turno"=> "mañana", "horaComienzo" => "09:30"));
        Horario::create(array("turno"=> "mañana", "horaComienzo" => "10:00"));
        Horario::create(array("turno"=> "mañana", "horaComienzo" => "10:30"));
        Horario::create(array("turno"=> "mañana", "horaComienzo" => "11:00"));
        Horario::create(array("turno"=> "mañana", "horaComienzo" => "11:30"));
        Horario::create(array("turno"=> "mañana", "horaComienzo" => "12:00"));
        Horario::create(array("turno"=> "mañana", "horaComienzo" => "12:30"));
        Horario::create(array("turno"=> "mañana", "horaComienzo" => "13:00"));
        Horario::create(array("turno"=> "mañana", "horaComienzo" => "13:30"));

        Horario::create(array("turno"=> "tarde", "horaComienzo" => "17:00"));
        Horario::create(array("turno"=> "tarde", "horaComienzo" => "17:30"));
        Horario::create(array("turno"=> "tarde", "horaComienzo" => "18:00"));
        Horario::create(array("turno"=> "tarde", "horaComienzo" => "18:30"));
        Horario::create(array("turno"=> "tarde", "horaComienzo" => "19:00"));
        Horario::create(array("turno"=> "tarde", "horaComienzo" => "19:30"));
        Horario::create(array("turno"=> "tarde", "horaComienzo" => "20:00"));
        Horario::create(array("turno"=> "tarde", "horaComienzo" => "20:30"));
    }


    public function seedCortes(){
        Corte::create(array("tipoPelado" => "Corte", "precio" => 6.50));
        Corte::create(array("tipoPelado" => "Barba", "precio" => 2.00));
        Corte::create(array("tipoPelado" => "Corte + Barba", "precio" => 8.00));
    }
}
