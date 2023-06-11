# API Response Formatter for Laravel

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE.md)
[![Latest Stable Version](https://poser.pugx.org/yourname/api-response-formatter/v)](https://packagist.org/packages/yourname/api-response-formatter)
[![Total Downloads](https://poser.pugx.org/yourname/api-response-formatter/downloads)](https://packagist.org/packages/yourname/api-response-formatter)

The API Response Formatter is a Laravel package that provides a standardized way to format API responses. It simplifies the process of returning consistent responses, including success responses, error responses, validation error responses, and more.

## Features

- Standardized API responses for success and error cases
- Automatic formatting of validation errors
- Custom response formatting options
- Easy integration with Laravel applications

## Installation

Install the API Response Formatter package via Composer:

```bash
composer require avat/api-response-formatter

## Usage
To use the API Response Formatter in your Laravel application, simply import the ApiResponse class and call the relevant methods in your controllers:


```
use Avat\ApiResponseFormatter\ApiResponse;

public function index()
{
    // Perform your logic
    // ...

    // Return a success response
    return ApiResponse::success($data, 'Data retrieved successfully.');
}

public function store(Request $request)
{
    // Perform your logic
    // ...

    // Return an error response
    return ApiResponse::error('Failed to store the data.', 400);
}

```

For more advanced usage and customization options, please refer to the documentation.

## Contributing
Contributions are welcome! Feel free to open issues and submit pull requests.

Please make sure to update tests as appropriate.

## License
This package is open source and available under the MIT License.
