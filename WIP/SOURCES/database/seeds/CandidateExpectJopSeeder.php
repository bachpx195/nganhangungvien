<?php

use Illuminate\Database\Seeder;
use App\Model\CandidateExpectJob;

class CandidateExpectJopSeeder extends Seeder {
	
	public function run() 
	{
		DB::table('candidate_expect_job')->delete();
		
		// Manager
		CandidateExpectJob::insert([
			'candidate_id' => '3',
			'job_id' => '391',
		]);

		CandidateExpectJob::insert([
			'candidate_id' => '4',
			'job_id' => '392',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '5',
			'job_id' => '393',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '6',
			'job_id' => '394',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '7',
			'job_id' => '395',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '8',
			'job_id' => '396',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '9',
			'job_id' => '397',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '10',
			'job_id' => '398',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '10',
			'job_id' => '399',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '11',
			'job_id' => '400',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '12',
			'job_id' => '401',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '13',
			'job_id' => '402',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '14',
			'job_id' => '403',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '15',
			'job_id' => '404',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '16',
			'job_id' => '405',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '17',
			'job_id' => '406',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '18',
			'job_id' => '407',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '19',
			'job_id' => '408',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '20',
			'job_id' => '409',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '21',
			'job_id' => '410',
		]);
		CandidateExpectJob::insert([
			'candidate_id' => '22',
			'job_id' => '411',
		]);
	}
	
}