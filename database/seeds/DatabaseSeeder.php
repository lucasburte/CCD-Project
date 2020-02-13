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
                'idrole' => 1,
            ),
            array(
                'iduser' => 2,
                'nom' => 'Achille',
                'idrole' => 2,
            ),
            array(
                'iduser' => 3,
                'nom' => 'Calypso',
                'idrole' => 3,
              ),
            array(
                'iduser' => 4,
                'nom' => 'Bacchus',
                'idrole' => 4,
            ),
            array(
                'iduser' => 5,
                'nom' => 'Diane',
                'idrole' => 5,
            ),
            array(
                'iduser' => 6,
                'nom' => 'Clark',
                'idrole' => 6,
            ),
            array(
                'iduser' => 7,
                'nom' => 'Helene',
                'idrole' => 1,
            ),
            array(
                'iduser' => 8,
                'nom' => 'Jason',
                'idrole' => 2,
            ),
            array(
                'iduser' => 9,
                'nom' => 'Bruce',
                'idrole' => 3,
            ),
            array(
                'iduser' => 10,
                'nom' => 'Pénélope',
                'idrole' => 4,
            ),
            array(
                'iduser' => 11,
                'nom' => 'Ariane',
                'idrole' => 5,
              ),
            array(
                'iduser' => 12,
                'nom' => 'Lois',
                'idrole' => 6,
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

        DB::table('creneau')->insert(array(
            array(
                'jour' => 2,
                'semaine' => 'A',
                'debut' => 10,
                'fin' => 12
            ),
            array(
                'jour' => 4,
                'semaine' => 'A',
                'debut' => 14,
                'fin' => 16
            ),
        ));
    }
}
