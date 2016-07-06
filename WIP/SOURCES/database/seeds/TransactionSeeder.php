<?php

use App\Model\Candidate;
use App\Model\Employer;
use App\Model\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        DB::table('transaction')->truncate();

        $candidates = Candidate::all();

        foreach ($candidates as $candidate) {
            Transaction::insert([
                'employer_id' => 166,
                'candidate_id' => $candidate['id'],
                'payment_type' => rand(0, 10),
                'type' => rand(0, 1),
                'balance' => rand(50, 100) * 1000,
                'amount' => 100000,
                'created_at' => '2016-06-14',
                'updated_at' => '2016-06-14'
            ]);
        }
    }
}