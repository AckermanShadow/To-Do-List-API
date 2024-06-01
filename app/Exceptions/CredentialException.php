<?php

namespace App\Exceptions;

use Exception;

class CredentialException extends Exception
{
    public function render($request)
    {
        $response = ['message'=> "Adresse email ou mot de passe invalide"];
        return response()->json($response,401);
    }
}
