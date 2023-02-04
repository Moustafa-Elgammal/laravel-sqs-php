<?php

namespace App\Console\Commands;

use App\Jobs\SendAWSMessage;
use Illuminate\Console\Command;

class QueueSendMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'queue:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send message to aws queu';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = [
            'id' => 1,
            'name' => 'moustafa',
            'age' => 29
        ];

        SendAWSMessage::dispatch($data);

        return Command::SUCCESS;
    }
}
