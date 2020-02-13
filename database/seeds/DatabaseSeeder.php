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
                'pp' => '1.jpg'
            ),
            array(
                'iduser' => 2,
                'nom' => 'Achille',
                'idrole' => 2,
                'pp' => '2.jpg'
            ),
            array(
                'iduser' => 3,
                'nom' => 'Calypso',
                'idrole' => 3,
                'pp' => '3.jpg'
              ),
            array(
                'iduser' => 4,
                'nom' => 'Bacchus',
                'idrole' => 4,
                'pp' => '4.jpg'
            ),
            array(
                'iduser' => 5,
                'nom' => 'Diane',
                'idrole' => 5,
                'pp' => '5.jpg'
            ),
            array(
                'iduser' => 6,
                'nom' => 'Clark',
                'idrole' => 6,
                'pp' => '6.jpg'
            ),
            array(
                'iduser' => 7,
                'nom' => 'Helene',
                'idrole' => 1,
                'pp' => '7.jpg'
            ),
            array(
                'iduser' => 8,
                'nom' => 'Jason',
                'idrole' => 2,
                'pp' => '8.jpg'
            ),
            array(
                'iduser' => 9,
                'nom' => 'Bruce',
                'idrole' => 3,
                'pp' => '9.jpg'
            ),
            array(
                'iduser' => 10,
                'nom' => 'Pénélope',
                'idrole' => 4,
                'pp' => '10.jpg'
            ),
            array(
                'iduser' => 11,
                'nom' => 'Ariane',
                'idrole' => 5,
                'pp' => '11.jpg'
              ),
            array(
                'iduser' => 12,
                'nom' => 'Lois',
                'idrole' => 6,
                'pp' => '12.jpg'
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
            array(
                'jour' => 4,
                'semaine' => 'A',
                'debut' => 17,
                'fin' => 19
            ),
        ));

        DB::table('inscrit')->insert(array(
            array(
                'idcreneau' => 2,
                'idrole' => 2
            ),
            array(
                'idcreneau' => 2,
                'idrole' => 1
            ),
            array(
                'idcreneau' => 2,
                'idrole' => 4
            ),
            array(
                'idcreneau' => 1,
                'idrole' => 4
            ),
            array(
                'idcreneau' => 1,
                'idrole' => 1
            )
        ));
    }
}
