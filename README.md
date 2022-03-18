
## Inmate Locator

## About

Prompt:

> Your team has been asked by the Philadelphia Department of Prisons to build an app to help locate inmates within the prison system. You are on a team with a front-end developer who mocked up some of the UI (see below), and they need you to build the data API. There are three customers: non-authenticated users searching for their friends and family, wardens who want to keep track of inmates in their locations, and administrators who need to see all inmates in the system.

Requirements:

1. Implement all of the API endpoints needed by the UI and by administrators,
2. Write unit tests to cover your API
3. Either document your API or use something like [Swagger](https://swagger.io/) to automatically build documentation that you could hand off to a FE developer
4. Be sure to include input validation for your endpoints

## Installation

1. Install [Composer](https://getcomposer.org/download/)
2. Run composer and update
    
    ```
    $ composer update
    $ composer install
    ```
    
3. Run server
    
    ```
    $ php artisan serve
    ```
    
4. Generate dummy data
    
    ```
    $ php artisan db:seed
    ```
    
5. Run tests
    
    ```
    $ composer test
    ```

## Endpoints

Prisoner:

PID Search

> URL: /api/prisoner/pid/:pid
METHOD: GET
URL Params: 
Data Params:
Success Response: Code: 200 Content: `[{ "PID": "1", "firstName": "Dorcas", "lastName": "Kozey", "dob": "2010-04-05", "location": "Philadelphia" }]`
Error Response: Code: 404 NOT FOUND Content: `{ error : "Not Found" }`
> 

Name Search

> URL: /api/prisoner/name/:name
METHOD: GET
URL Params: 
Data Params:
Success Response: Code: 200 Content: `[{ "PID": "1", "firstName": "Dorcas", "lastName": "Kozey", "dob": "2010-04-05", "location": "Philadelphia" }]`
Error Response: Code: 404 NOT FOUND Content: `{ error : "Not Found" }`
> 

Location Search

> URL: /api/prisoner/location/:location
METHOD: GET
URL Params: 
Data Params:
Success Response: Code: 200 Content: `[{ "PID": "1", "firstName": "Dorcas", "lastName": "Kozey", "dob": "2010-04-05", "location": "Philadelphia" }]`
Error Response: Code: 404 NOT FOUND Content: `{ error : "Not Found" }`
>

## To Be Implemented

1. Improve Validation
2. Proper Unit Tests
3. JWT 
