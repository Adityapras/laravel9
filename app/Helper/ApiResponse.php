<?php

namespace App\Helper;

/**
 * 
 */
trait ApiResponse
{
    protected function success($data, string $status = 'OK', string $message = null, int $code = 200)
    {
        return response()->json([
            'code' => $code,
            'status' => $status,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function error($errors = null, string $status = 'BAD_REQUEST', string $message = null, int $code,)
    {
        return response()->json([
            'code' => $code,
            'status' => $status,
            'message' => $message,
            'errors' => $errors
        ], $code);
    }
}
