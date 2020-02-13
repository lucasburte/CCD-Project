<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert(array(
            array(
                'iduser' => 1,
                'nom' => 'Cassandre',
            ),
            array(
                'iduser' => 2,
                'nom' => 'Achille',
            ),
            array(
                'iduser' => 3,
                'nom' => 'Calypso',
              ),
            array(
                'iduser' => 4,
                'nom' => 'Bacchus',
            ),
            array(
                'iduser' => 5,
                'nom' => 'Diane',
            ),
            array(
                'iduser' => 6,
                'nom' => 'Clark',
            ),
            array(
                'iduser' => 7,
                'nom' => 'Helene',
            ),
            array(
                'iduser' => 8,
                'nom' => 'Jason',
            ),
            array(
                'iduser' => 9,
                'nom' => 'Bruce',
            ),
            array(
                'iduser' => 10,
                'nom' => 'Pénélope',
            ),
            array(
                'iduser' => 11,
                'nom' => 'Ariane',
              ),
            array(
                'iduser' => 12,
                'nom' => 'Lois',
            ),
        ));

        DB::table('role')->insert(array(
            array(
                'idrole' => 1,
                'label' => 'Caissier titulaire',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor, nulla eu massa nunc.',
            ),
            array(
                'idrole' => 2,
                'label' => 'Caissier assistant',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor, nulla eu massa nunc.',
            ),
            array(
                'idrole' => 3,
                'label' => 'Gestionnaire de vrac titulaire',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor, nulla eu massa nunc.',
            ),
            array(
                'idrole' => 4,
                'label' => 'Gestionnaire de vrac assistant',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor, nulla eu massa nunc.',
            ),
            array(
                'idrole' => 5,
                'label' => 'Chargé d\'accueil titulaire',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor, nulla eu massa nunc.',
            ),
            array(
                'idrole' => 6,
                'label' => 'Chargé d\'accueil assistant',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor, nulla eu massa nunc.',
            ),
        ));
    }
}
