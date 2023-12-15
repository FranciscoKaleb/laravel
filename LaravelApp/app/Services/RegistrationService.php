<?php 

// RegistrationService.php

namespace App\Services;

use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\UserCredentialsController;

class RegistrationService
{
    protected $userInfoController;
    protected $userCredentialsController;

    public function __construct(UserInfoController $userInfoController, UserCredentialsController $userCredentialsController)
    {
        $this->userInfoController = $userInfoController;
        $this->userCredentialsController = $userCredentialsController;
    }

    public function registerUser($userData, $credentialsData)
    {
        // Handle user information
        $userInfo = $this->userInfoController->store($userData);

        // Handle user credentials
        $userCredentials = $this->userCredentialsController->store($credentialsData);

        // Additional logic for coordinating between user info and credentials if needed

        // Return any relevant data or success status
        return ['userInfo' => $userInfo, 'userCredentials' => $userCredentials];
    }
}
