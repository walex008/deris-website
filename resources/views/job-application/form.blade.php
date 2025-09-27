<x-app-layout>
    @section('title', 'Apply for ' . $careerPage->title)
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow">
                        <div class="card-header bg-warning text-white">
                            <h3 class="mb-0 text-light">Apply for: {{ $careerPage->title }}</h3>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            <form action="{{ route('job-applications.store') }}" method="POST" enctype="multipart/form-data" id="jobApplicationForm">
                                @csrf
                                <input type="hidden" name="career_id" value="{{ $careerPage->id }}">

                                <!-- Personal Information -->
                                <div class="section-header">
                                    <h4 class="text-secondary border-bottom pb-2 mb-4">Personal Information</h4>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address') }}</textarea>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state" class="form-label">State <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="postal_code" class="form-label">Postal Code <span class="text-danger"></span></label>
                                        <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ old('postal_code') }}">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" id="gender" name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                            <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                            <option value="prefer_not_to_say" {{ old('gender') == 'prefer_not_to_say' ? 'selected' : '' }}>Prefer not to say</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Professional Information -->
                                <div class="section-header">
                                    <h4 class="text-secondary border-bottom pb-2 mb-4">Professional Information</h4>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="current_position" class="form-label">Current Position</label>
                                        <input type="text" class="form-control" id="current_position" name="current_position" value="{{ old('current_position') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="current_company" class="form-label">Current Company</label>
                                        <input type="text" class="form-control" id="current_company" name="current_company" value="{{ old('current_company') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="expected_salary" class="form-label">Expected Salary (₦)</label>
                                        <input type="number" class="form-control" id="expected_salary" name="expected_salary" step="0.01" value="{{ old('expected_salary') }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="notice_period" class="form-label">Notice Period</label>
                                        <input type="text" class="form-control" id="notice_period" name="notice_period" placeholder="e.g., 2 weeks, 1 month" value="{{ old('notice_period') }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="employment_type" class="form-label">Preferred Employment Type <span class="text-danger">*</span></label>
                                        <select class="form-select" id="employment_type" name="employment_type" required>
                                            <option value="">Select Type</option>
                                            <option value="full_time" {{ old('employment_type') == 'full_time' ? 'selected' : '' }}>Full Time</option>
                                            <option value="part_time" {{ old('employment_type') == 'part_time' ? 'selected' : '' }}>Part Time</option>
                                            <option value="contract" {{ old('employment_type') == 'contract' ? 'selected' : '' }}>Contract</option>
                                            <option value="internship" {{ old('employment_type') == 'internship' ? 'selected' : '' }}>Internship</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Education Section -->
                                <div class="section-header">
                                    <h4 class="text-secondary border-bottom pb-2 mb-4">Education</h4>
                                </div>

                                <div id="education-container">
                                    <div class="education-item border rounded p-3 mb-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-label">Degree <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="education[0][degree]" placeholder="e.g., Bachelor of Science" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Institution <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="education[0][institution]" placeholder="University name" required>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">Year <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="education[0][year]" min="1950" max="2035" required>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">Grade/GPA</label>
                                                <input type="text" class="form-control" name="education[0][grade]" placeholder="Optional">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary btn-sm mb-4" onclick="addEducation()">
                                    <i class="bi bi-plus"></i> Add Another Education
                                </button>

                                <!-- Work Experience Section -->
                                <div class="section-header">
                                    <h4 class="text-secondary border-bottom pb-2 mb-4">Work Experience</h4>
                                </div>

                                <div id="experience-container">
                                    <div class="experience-item border rounded p-3 mb-3">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Company <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="work_experience[0][company]" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Position <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="work_experience[0][position]" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label class="form-label">Start Date <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" name="work_experience[0][start_date]" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">End Date</label>
                                                <input type="date" class="form-control" name="work_experience[0][end_date]">
                                            </div>
                                            <div class="col-md-4 d-flex align-items-end">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="work_experience[0][current]" value="1">
                                                    <label class="form-check-label">Currently working here</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Job Description</label>
                                            <textarea class="form-control" name="work_experience[0][description]" rows="3" placeholder="Describe your role and achievements"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary btn-sm mb-4" onclick="addExperience()">
                                    <i class="bi bi-plus"></i> Add Another Experience
                                </button>

                                <!-- Skills Section -->
                                <div class="section-header">
                                    <h4 class="text-secondary border-bottom pb-2 mb-4">Skills</h4>
                                </div>

                                <div id="skills-container" class="mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control mb-2" name="skills[]" placeholder="Enter a skill">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control mb-2" name="skills[]" placeholder="Enter a skill">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary btn-sm mb-4" onclick="addSkill()">
                                    <i class="bi bi-plus"></i> Add More Skills
                                </button>

                                <!-- Languages Section -->
                                <div class="section-header">
                                    <h4 class="text-secondary border-bottom pb-2 mb-4">Languages</h4>
                                </div>

                                <div id="languages-container">
                                    <div class="language-item row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Language</label>
                                            <input type="text" class="form-control" name="languages[0][language]" placeholder="e.g., English">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Proficiency Level</label>
                                            <select class="form-select" name="languages[0][proficiency]">
                                                <option value="">Select Level</option>
                                                <option value="beginner">Beginner</option>
                                                <option value="intermediate">Intermediate</option>
                                                <option value="advanced">Advanced</option>
                                                <option value="native">Native</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary btn-sm mb-4" onclick="addLanguage()">
                                    <i class="bi bi-plus"></i> Add Another Language
                                </button>

                                <!-- File Uploads -->
                                <div class="section-header">
                                    <h4 class="text-secondary border-bottom pb-2 mb-4">Documents</h4>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="resume" class="form-label">Resume/CV <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                                        <div class="form-text">Accepted formats: PDF, DOC, DOCX (Max: 5MB)</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cover_letter" class="form-label">Cover Letter</label>
                                        <input type="file" class="form-control" id="cover_letter" name="cover_letter" accept=".pdf,.doc,.docx">
                                        <div class="form-text">Accepted formats: PDF, DOC, DOCX (Max: 5MB)</div>
                                    </div>
                                </div>

                                <!-- Portfolio Links -->
                                <div class="mb-4">
                                    <label class="form-label">Portfolio Links</label>
                                    <div id="portfolio-container">
                                        <input type="url" class="form-control mb-2" name="portfolio_links[]" placeholder="https://portfolio-link.com">
                                        <input type="url" class="form-control mb-2" name="portfolio_links[]" placeholder="https://portfolio-link.com">
                                    </div>
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="addPortfolioLink()">
                                        <i class="bi bi-plus"></i> Add Another Link
                                    </button>
                                </div>

                                <!-- Additional Information -->
                                <div class="section-header">
                                    <h4 class="text-secondary border-bottom pb-2 mb-4">Additional Information</h4>
                                </div>

                                <div class="mb-3">
                                    <label for="why_join_company" class="form-label">Why do you want to join our company?</label>
                                    <textarea class="form-control" id="why_join_company" name="why_join_company" rows="4" placeholder="Tell us what motivates you to apply for this position...">{{ old('why_join_company') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="additional_information" class="form-label">Additional Information</label>
                                    <textarea class="form-control" id="additional_information" name="additional_information" rows="3" placeholder="Any additional information you'd like to share...">{{ old('additional_information') }}</textarea>
                                </div>

                                <!-- Checkboxes -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="willing_to_relocate" value="1" id="willing_to_relocate" {{ old('willing_to_relocate') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="willing_to_relocate">
                                                I am willing to relocate if required
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="has_valid_work_permit" value="1" id="has_valid_work_permit" checked {{ old('has_valid_work_permit', true) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="has_valid_work_permit">
                                                I have a valid work permit/authorization
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">
                                        <i class="bi bi-send"></i> Submit Application
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            let educationCount = 1;
            let experienceCount = 1;
            let languageCount = 1;

            function addEducation() {
                const container = document.getElementById('education-container');
                const educationHtml = `
        <div class="education-item border rounded p-3 mb-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="fw-bold">Education #${educationCount + 1}</span>
                <button type="button" class="btn btn-outline-danger btn-sm" onclick="removeEducation(this)">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label">Degree <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="education[${educationCount}][degree]" placeholder="e.g., Bachelor of Science" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Institution <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="education[${educationCount}][institution]" placeholder="University name" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Year <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="education[${educationCount}][year]" min="1950" max="2035" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Grade/GPA</label>
                    <input type="text" class="form-control" name="education[${educationCount}][grade]" placeholder="Optional">
                </div>
            </div>
        </div>
    `;
                container.insertAdjacentHTML('beforeend', educationHtml);
                educationCount++;
            }

            function removeEducation(button) {
                button.closest('.education-item').remove();
            }

            function addExperience() {
                const container = document.getElementById('experience-container');
                const experienceHtml = `
        <div class="experience-item border rounded p-3 mb-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="fw-bold">Experience #${experienceCount + 1}</span>
                <button type="button" class="btn btn-outline-danger btn-sm" onclick="removeExperience(this)">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Company <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="work_experience[${experienceCount}][company]" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Position <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="work_experience[${experienceCount}][position]" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Start Date <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="work_experience[${experienceCount}][start_date]" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">End Date</label>
                    <input type="date" class="form-control" name="work_experience[${experienceCount}][end_date]">
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="work_experience[${experienceCount}][current]" value="1">
                        <label class="form-check-label">Currently working here</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Job Description</label>
                <textarea class="form-control" name="work_experience[${experienceCount}][description]" rows="3" placeholder="Describe your role and achievements"></textarea>
            </div>
        </div>
    `;
                container.insertAdjacentHTML('beforeend', experienceHtml);
                experienceCount++;
            }

            function removeExperience(button) {
                button.closest('.experience-item').remove();
            }

            function addSkill() {
                const container = document.getElementById('skills-container');
                const skillHtml = `
        <div class="row mb-2">
            <div class="col-md-10">
                <input type="text" class="form-control" name="skills[]" placeholder="Enter a skill">
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-outline-danger btn-sm w-100" onclick="removeSkill(this)">
                    <i class="bi bi-trash"></i>
                </button>
            </div>
        </div>
    `;
                container.insertAdjacentHTML('beforeend', skillHtml);
            }

            function removeSkill(button) {
                button.closest('.row').remove();
            }

            function addLanguage() {
                const container = document.getElementById('languages-container');
                const languageHtml = `
        <div class="language-item row mb-3">
            <div class="col-md-5">
                <label class="form-label">Language</label>
                <input type="text" class="form-control" name="languages[${languageCount}][language]" placeholder="e.g., English">
            </div>
            <div class="col-md-5">
                <label class="form-label">Proficiency Level</label>
                <select class="form-select" name="languages[${languageCount}][proficiency]">
                    <option value="">Select Level</option>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                    <option value="native">Native</option>
                </select>
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <button type="button" class="btn btn-outline-danger btn-sm w-100" onclick="removeLanguage(this)">
                    <i class="bi bi-trash"></i>
                </button>
            </div>
        </div>
    `;
                container.insertAdjacentHTML('beforeend', languageHtml);
                languageCount++;
            }

            function removeLanguage(button) {
                button.closest('.language-item').remove();
            }

            function addPortfolioLink() {
                const container = document.getElementById('portfolio-container');
                const linkHtml = `
        <div class="input-group mb-2">
            <input type="url" class="form-control" name="portfolio_links[]" placeholder="https://portfolio-link.com">
            <button type="button" class="btn btn-outline-danger" onclick="removePortfolioLink(this)">
                <i class="bi bi-trash"></i>
            </button>
        </div>
    `;
                container.insertAdjacentHTML('beforeend', linkHtml);
            }

            function removePortfolioLink(button) {
                button.closest('.input-group').remove();
            }

            // Form validation
            document.getElementById('jobApplicationForm').addEventListener('submit', function(e) {
                const requiredFields = this.querySelectorAll('[required]');
                let isValid = true;

                requiredFields.forEach(function(field) {
                    if (!field.value.trim()) {
                        field.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        field.classList.remove('is-invalid');
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    alert('Please fill in all required fields.');
                    return false;
                }
            });
        </script>

        <style>
            .section-header h4 {
                font-weight: 600;
            }

            .education-item,
            .experience-item {
                background-color: #f8f9fa;
            }

            .form-label {
                font-weight: 500;
            }

            .text-danger {
                color: #dc3545 !important;
            }

            .is-invalid {
                border-color: #dc3545;
            }

            .card {
                border: none;
                border-radius: 10px;
            }

            .card-header {
                border-radius: 10px 10px 0 0 !important;
            }

            .btn-primary {
                background-color: #1E3A7F;
                border-color: #1E3A7F;
            }

            .btn-primary:hover {
                background-color: #0b5ed7;
                border-color: #0a58ca;
            }
        </style>
</x-app-layout>

