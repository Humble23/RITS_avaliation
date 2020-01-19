<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Candidate;

class CandidateController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name'          => ['required', 'string'],
            'email'         => ['required'],
            'phone'         => ['required'],
            'motivation'    => ['required'],
            'linkedin_link' => ['required', 'string'],
            'github_link'   => ['required', 'string'],
            'english_level' => ['required', 'string'],
            'salary'        => ['required'],
            'curriculum'    => ['required']
        ]);

        isset($data['curriculum']) && $data['curriculum'] = $request->file('curriculum')->store('candidates', 'public');

        $candidate = Candidate::create([
            'name'          => $data['name'],
            'email'         => $data['email'],
            'phone'         => $data['phone'],
            'motivation'    => $data['motivation'],
            'linkedin_link' => $data['linkedin_link'],
            'github_link'   => $data['github_link'],
            'english_level' => $data['english_level'],
            'salary'        => $data['salary'],
            'curriculum'    => $data['curriculum']
        ]);

        return $candidate;
    }
}
