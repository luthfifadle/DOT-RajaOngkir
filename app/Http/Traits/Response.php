<?php

namespace App\Http\Traits;

trait Response
{
    public function sendResponse($result, $message = 'success', $code = 200)
    {
        $response = [
            'code'    => $code,
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

    public function result($result, $message = 'success', $code = 200)
    {
        $response = [
            'code'    => $code,
            'success' => true,
            'result'    => $result,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

    public function sendError($code_custom, $error, $errorMessages = [], $code = 200)
    {
        $response = [
            'code'    => $code_custom,
            'success' => false,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }

    public function failsValidate($validator)
    {
        $msg = '';
        foreach ($validator->toArray() as $key => $row) {
            $msg .= $row[0] . '\n';
        }

        $response = [
            'code'    => 400,
            'success' => false,
            'message' => $msg,
        ];
        return response()->json($response, 200);
    }
}
