<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Addinvest;

class UpdateInvestments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'investments:update';

    protected $commands = [
        UpdateInvestments::class
    ];

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update investment amounts for all plans';

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

        // Get all investments with the Basic Plan
        $investments = Addinvest::where('status', 'Approved')->get();

        foreach ($investments as $investment) {

            // Define the base amount and the percentage
            $baseAmount = $investment->investment_amount;
            $percentage = $investment->plan->daily_interest;

            // Calculate the amount of the percentage
            $percentageAmount = $baseAmount * ($percentage / 100);

            logger($percentageAmount);

            //add to the investment table
            $investment->investment_profit = $investment->investment_profit + $percentageAmount;
            $investment->save();
        }

        $this->info('Investment amounts updated successfully.');

        logger('Investment amounts updated successfully');
    }
}
