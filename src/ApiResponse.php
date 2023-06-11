<?php

namespace Avat\ApiResponseFormatter;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;
use Illuminate\Contracts\Validation\Validator;

class ApiResponse
{
    /**
     * Return a new JSON response for a successful request.
     *
     * @param mixed $data
     * @param string $message
     * @param int $status
     * @return \Illuminate\Http\JsonResponse
     */
    public static function success($data = null, string $message = '', int $status = 200): JsonResponse
    {
        return Response::json([
            'status' => 'success',
            'message' => $message,
            'data' => $data,
        ], $status);
    }

    /**
     * Return a new JSON response for an error.
     *
     * @param string $message
     * @param int $status
     * @return \Illuminate\Http\JsonResponse
     */
    public static function error(string $message = '', int $status = 400): JsonResponse
    {
        return Response::json([
            'status' => 'error',
            'message' => $message,
        ], $status);
    }

    /**
     * Return a new JSON response for a validation error.
     *
     * @param \Illuminate\Contracts\Validation\Validator $validator
     * @return \Illuminate\Http\JsonResponse
     */
    public static function validationError(Validator $validator): JsonResponse
    {
        return Response::json([
            'status' => 'error',
            'message' => 'The given data was invalid.',
            'errors' => $validator->errors(),
        ], 422);
    }

    /**
     * Return a new JSON response for a custom message and status.
     *
     * @param string $status
     * @param string $message
     * @param int $httpStatus
     * @return \Illuminate\Http\JsonResponse
     */
    public static function custom(string $status, string $message, int $httpStatus): JsonResponse
    {
        return Response::json([
            'status' => $status,
            'message' => $message,
        ], $httpStatus);
    }
}
