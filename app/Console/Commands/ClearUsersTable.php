<?php

namespace App\Console\Commands;

use App\Helpers;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ClearUsersTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears and repopulates user\'s table' ;

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $fields = [
            'test1@site.test',
            'test2@site.test',
            'test3@site.test',
            'test4@site.test',
            'test5@site.test'
        ];
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'email'=>'admin@site.test',
            'password'=>\Hash::make('password'),
            'username'=>'admin1',
            'is_admin'=>1,
            'password_text'=>'password'
        ]);

        for ($i=0;$i < count($fields); $i++)
        {
            DB::table('users')->insert([
                'email'=>$fields[$i],
                'password'=>\Hash::make('password'),
                'username'=>Helpers::extractText($fields[$i]),
                'password_text'=>'password'
            ]);
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
        $this->info('Generated email and password');
       $this->table(
            ['Email', 'Username','Password'],
            User::all(['email', 'username','password_text'])->toArray()
        );
       $this->info('Command executed successfully');
    }
}
