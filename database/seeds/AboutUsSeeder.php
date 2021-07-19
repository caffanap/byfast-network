<?php

use App\AboutUs;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUs::create([
            'desc1' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ullam debitis id. Odio qui, temporibus suscipit autem error inventore, commodi, accusamus nobis exercitationem animi neque perferendis cum assumenda tempora tenetur voluptas dicta doloremque ut quam possimus quisquam a labore? Minima, officiis cum non porro suscipit delectus omnis atque provident saepe.',
            'desc2' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ullam debitis id. Odio qui, temporibus suscipit autem error inventore, commodi, accusamus nobis exercitationem animi neque perferendis cum assumenda tempora tenetur voluptas dicta doloremque ut quam possimus quisquam a labore? Minima, officiis cum non porro suscipit delectus omnis atque provident saepe.',
            'desc3' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ullam debitis id. Odio qui, temporibus suscipit autem error inventore, commodi, accusamus nobis exercitationem animi neque perferendis cum assumenda tempora tenetur voluptas dicta doloremque ut quam possimus quisquam a labore? Minima, officiis cum non porro suscipit delectus omnis atque provident saepe.',
            'desc4' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ullam debitis id. Odio qui, temporibus suscipit autem error inventore, commodi, accusamus nobis exercitationem animi neque perferendis cum assumenda tempora tenetur voluptas dicta doloremque ut quam possimus quisquam a labore? Minima, officiis cum non porro suscipit delectus omnis atque provident saepe.',
            'desc5' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ullam debitis id. Odio qui, temporibus suscipit autem error inventore, commodi, accusamus nobis exercitationem animi neque perferendis cum assumenda tempora tenetur voluptas dicta doloremque ut quam possimus quisquam a labore? Minima, officiis cum non porro suscipit delectus omnis atque provident saepe.',
        ]);
    }
}
