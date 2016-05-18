<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\ICandidateRepo;
use App\Model\Candidate;

class CandidateController extends Controller {

    protected $candidateRepo;
    protected $roleRepo;

    /**
     * CandidateController constructor.
     *
     * @param ICandidateRepo $candidateRepo
     */
    public function __construct(ICandidateRepo $candidateRepo) {

        $this->candidateRepo = $candidateRepo;
    }

    /**
     * Build a candidate's form
     *
     * @param Request $request
     * @return mixed
     */
    public function candidateForm(Request $request) {

        // get method
        if ($request->isMethod('get')) {
            $candidate = new Candidate;

            return view('front/candidate/candidate_form')
                ->with('candidate', $candidate);
        } else {
            // get form input data
            $input = $request->all();

            $candidate = new Candidate;

            $candidate->save();

            return redirect(route('candidate.form'));
        }
    }

    /**
     * Delete a candidate
     *
     * @param Request $request
     * @param $id
     * @return array
     */
    public function delete(Request $request, $id) {

        $data = [];

        if ($request->ajax()) {

            Candidate::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
    }
}
