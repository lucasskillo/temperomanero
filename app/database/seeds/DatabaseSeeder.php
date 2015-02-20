<?php
 
class DatabaseSeeder extends Seeder {
 
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
 
        $this->call('TabelaUserSeeder');
    }
 
}
 
class TabelaUserSeeder extends Seeder {
 
    public function run()
    {
        $users = User::get();
 
        if($users->count() == 0) {
            User::create(array(
                'email' => 'lucas_skillo@hotmail.com',
                'password' => Hash::make('demolay08'),
                'name'  => 'Lucas',
            ));
        }
    }
 
}