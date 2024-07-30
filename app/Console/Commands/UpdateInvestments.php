<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Addinvest;

class UpdateInvestments extends Command
{
    protected $signature = 'investments:update';
    protected $description = 'Update investment amounts for Bronze Plan';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $investments = Addinvest::where('investment_plan', 'Bronze Plan')->get();

        foreach ($investments as $investment) {
            $investment->updateInvestmentAmount();
        }

        return 0;
    }
}
