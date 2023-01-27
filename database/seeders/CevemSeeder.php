<?php

namespace Database\Seeders;
use App\Models\State;
use App\Models\Cevem;

use Illuminate\Database\Seeder;

class CevemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        $url="https://cenacom.ine.mx/cevems/data/cevems.jsp";
            $json = html_entity_decode(file_get_contents($url));
            //echo $json;
            $json_data = json_decode($json, true);

            foreach ( $json_data as $states ) {
                //echo "<br > Se genera el estado ".$states["nombre"];
                $state = new State();
                //$state->id= $states['id'];
                $state->state = $states["nombre"];
                $state->users_id=1;
                $state->save();

                foreach ($states['listaCevems'] as $cevems ) {
                    # code...
                    $cevem = new Cevem();
                    $cevem->id = $cevems['idCevem'];
                    $cevem->cevem =   $cevems['nombre'];
                    $cevem->ip =  substr($cevems['ipCevem'],0,-2);
                    $cevem->state_id = $cevems['idEstado'];
                  
                    $cevem->save();
                }

            }
    }
}
