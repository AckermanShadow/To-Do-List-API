<?php

namespace App\Exceptions;

use Exception;

class GeneralException extends Exception
{
    public function render($request)
    {
        $response = ['message'=> "Une erreur inattendue s'est produite. Veuillez contacter l'administrateur du système pour plus d'informations."];
        return response()->json($response,401);
    }
}
