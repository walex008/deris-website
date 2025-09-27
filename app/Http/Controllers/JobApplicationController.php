<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class JobApplicationController extends Controller
{
    public function show($careerPageId)
    {
        $careerPage = Career::findOrFail($careerPageId);
        return view('job-application.form', compact('careerPage'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'career_id' => 'required|exists:careers,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postal_code' => 'nullable|string|max:10',
            'date_of_birth' => 'nullable|date|before:today',
            'gender' => 'nullable|in:male,female,other,prefer_not_to_say',
            'current_position' => 'nullable|string|max:255',
            'current_company' => 'nullable|string|max:255',
            'expected_salary' => 'nullable|numeric|min:0',
            'notice_period' => 'nullable|string|max:255',
            'employment_type' => 'required|in:full_time,part_time,contract,internship',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120',
            'cover_letter' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            'why_join_company' => 'nullable|string',
            'additional_information' => 'nullable|string',
            'willing_to_relocate' => 'boolean',
            'has_valid_work_permit' => 'boolean',
            'education.*.degree' => 'required|string',
            'education.*.institution' => 'required|string',
            'education.*.year' => 'required|integer|min:1950|max:' . (date('Y') + 10),
            'work_experience.*.company' => 'required|string',
            'work_experience.*.position' => 'required|string',
            'work_experience.*.start_date' => 'required|date',
            'work_experience.*.end_date' => 'nullable|date|after:start_date',
            'work_experience.*.current' => 'boolean',
            'skills.*' => 'string',
            'languages.*.language' => 'required|string',
            'languages.*.proficiency' => 'required|in:beginner,intermediate,advanced,native',
            'portfolio_links.*' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = $validator->validated();
        //$data = $request->validated();

        // Handle file uploads
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
            $data['resume_path'] = $resumePath;
        }

        if ($request->hasFile('cover_letter')) {
            $coverLetterPath = $request->file('cover_letter')->store('cover_letters', 'public');
            $data['cover_letter_path'] = $coverLetterPath;
        }

        // Process education data
        $education = [];
        if ($request->has('education')) {
            foreach ($request->education as $edu) {
                if (!empty($edu['degree']) && !empty($edu['institution'])) {
                    $education[] = [
                        'degree' => $edu['degree'],
                        'institution' => $edu['institution'],
                        'year' => $edu['year'],
                        'grade' => $edu['grade'] ?? null,
                    ];
                }
            }
        }
        $data['education'] = $education;

        // Process work experience data
        $workExperience = [];
        if ($request->has('work_experience')) {
            foreach ($request->work_experience as $exp) {
                if (!empty($exp['company']) && !empty($exp['position'])) {
                    $workExperience[] = [
                        'company' => $exp['company'],
                        'position' => $exp['position'],
                        'start_date' => $exp['start_date'],
                        'end_date' => $exp['end_date'] ?? null,
                        'current' => isset($exp['current']) && $exp['current'],
                        'description' => $exp['description'] ?? null,
                    ];
                }
            }
        }
        $data['work_experience'] = $workExperience;

        // Process skills
        $skills = array_filter($request->skills ?? []);
        $data['skills'] = $skills;

        // Process languages
        $languages = [];
        if ($request->has('languages')) {
            foreach ($request->languages as $lang) {
                if (!empty($lang['language']) && !empty($lang['proficiency'])) {
                    $languages[] = [
                        'language' => $lang['language'],
                        'proficiency' => $lang['proficiency'],
                    ];
                }
            }
        }
        $data['languages'] = $languages;

        // Process portfolio links
        $portfolioLinks = array_filter($request->portfolio_links ?? []);
        $data['portfolio_links'] = $portfolioLinks;

        // Create the job application
        JobApplication::create($data);

        // In JobApplicationController@store method, replace the return statement with:
        return redirect()->route('job-applications.success')->with('success', 'Your application has been submitted successfully!');

        //return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }


}
