<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Contact;

class make_contact extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'do:make_contact';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make Contact';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo"Starting make_contact\n";
        $user = new Contact();
        $user->name = "testcron";
        $user->email = "testtest@testtest.be";
        $user->save();
        echo"make_contact done\n";
    }
}
