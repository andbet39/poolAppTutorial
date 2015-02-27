<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Pool;
use App\PoolOptions;


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('PoolDataSeeder');


	}

}

		class PoolDataSeeder extends Seeder {

			public function run()
			{
				DB::table('pools')->delete();
				DB::table('pooloptions')->delete();

				$pool1 = Pool::create(array('title' => 'Best PHP framework'));
				$pool2 = Pool::create(array('title' => 'Favourite Pizza'));
				$pool3 = Pool::create(array('title' => 'Your development skills'));

				PoolOptions::create(array('title'=>'Laravel 5','vote'=>0,'pool_id'=>$pool1->id));
				PoolOptions::create(array('title'=>'Yii 2','vote'=>0,'pool_id'=>$pool1->id));
				PoolOptions::create(array('title'=>'Codeigniter','vote'=>0,'pool_id'=>$pool1->id));
				PoolOptions::create(array('title'=>'Other','vote'=>0,'pool_id'=>$pool1->id));

				PoolOptions::create(array('title'=>'Margherite','vote'=>0,'pool_id'=>$pool2->id));
				PoolOptions::create(array('title'=>'Capricciosa','vote'=>0,'pool_id'=>$pool2->id));
				PoolOptions::create(array('title'=>'Napoli','vote'=>0,'pool_id'=>$pool2->id));

				PoolOptions::create(array('title'=>'Poor','vote'=>0,'pool_id'=>$pool3->id));
				PoolOptions::create(array('title'=>'Good','vote'=>0,'pool_id'=>$pool3->id));
				PoolOptions::create(array('title'=>'Top','vote'=>0,'pool_id'=>$pool3->id));


			}

		}
