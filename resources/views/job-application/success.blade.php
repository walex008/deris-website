<x-app-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                        <h2 class="mt-4 text-success">Application Submitted Successfully!</h2>
                        <p class="lead">Thank you for your interest in joining our team.</p>
                        <p>We have received your application and will review it carefully. If your qualifications match our requirements, we will conta
                        <div class="mt-4">
                            <a href="{{ route('career') }}" class="btn btn-primary">View Other Positions</a>
                            <a href="{{ route('home') }}" class="btn btn-outline-primary">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

