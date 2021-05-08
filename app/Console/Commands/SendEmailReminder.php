<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\User;
use App\Models\Children;
use App\Models\Vaccine;
use App\Mail\ReminderEmail;

use Illuminate\Support\Facades\Mail;

class SendEmailReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email vaccine reminder';

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
     * @return int
     */
    public function handle()
    {
    //     $childs = Children::all();
    //     $data = [];
    //     // $vaccDate = [];
    //    foreach($childs as $child)
    //     {
    //         if($child->date_of_birth === now()->format('Y-m-d'))
    //         {
    //             $data[$child->id][] = $child->user_id;
    //         }
    //     }
    //     dd($data);

    //     $users = User::find($data); 
    //     foreach($users as $user){
    //         Mail::to($user)->send(new ReminderEmail($user));
            
    //     }
        $childs = Children::all();
        $vaccines = Vaccine::all();
        $datag = [];
        foreach ($childs as $child){
            foreach ($vaccines as $vac){
                 $vaccine_day = date('Y/m/d', strtotime('+'.$vac['day'].' day', strtotime($child->date_of_birth))); 
                 if($vaccine_day === now()->format('Y/m/d')){
                    $datag[] = array(
                        "lname" => $child->lname,
                        "vaccine" => $vac->name,
                        "user_id" => $child->user_id,
                        "give_date" => $vaccine_day
                     );
                 }
                 
            }
                
        }
     
        // dd($datag);
        $data = [];
     
        foreach($childs as $child){
            $data[$child->id][] = $child->id;
            $data[$child->id][] = $child->lname;
                $data[$child->id][] = date('Y/m/d', strtotime("+ 10 day", strtotime($child->date_of_birth)));
          
            
            $data[$child->id][] = $child->user_id;
        }
        // dd($data);
        $result = [];
        // dd(now()->format('Y/m/d'));
        foreach($data as $db)
        {   
            if($db[2] === now()->format('Y/m/d'))
            {
                $result[$db[0]][] = $db[3];
            }
        }
        // dd($result);
        // $users = User::find($result); 
        // foreach($users as $item){
        //     // dd($user);
        //     Mail::to($item)->send(new ReminderEmail($item));
        // }
        foreach($datag as $item){
            // dd($item);
            Mail::to("test@yahoo.com")->send(new ReminderEmail($item));
        }
    }
}
