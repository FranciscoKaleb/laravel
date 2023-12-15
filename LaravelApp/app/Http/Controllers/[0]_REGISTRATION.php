<?php

// RegistrationController.php

namespace App\Http\Controllers;

use App\Services\RegistrationService;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    protected $registrationService;

    public function __construct(RegistrationService $registrationService)
    {
        $this->registrationService = $registrationService;
    }

    public function register(Request $request)
    {
        // Validate and get user data from the request

        $userData = $request->input('user_info');
        $credentialsData = $request->input('user_credentials');

        // Delegate the registration process to the service
        $result = $this->registrationService->registerUser($userData, $credentialsData);

        // Handle the result and respond accordingly

        // Return success or failure response
    }
}

