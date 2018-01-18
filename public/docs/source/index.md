---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#Longer description
<!-- START_8ae5d428da27b2b014dc767c2f19a813 -->
## api/v1/register

> Example request:

```bash
curl -X POST "http://localhost/api/v1/register" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/register",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
"{\n data: [],\n}"
```

### HTTP Request
`POST api/v1/register`


<!-- END_8ae5d428da27b2b014dc767c2f19a813 -->

<!-- START_8c0e48cd8efa861b308fc45872ff0837 -->
## api/v1/login

> Example request:

```bash
curl -X POST "http://localhost/api/v1/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/login",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
"{\n data: [],\n}"
```

### HTTP Request
`POST api/v1/login`


<!-- END_8c0e48cd8efa861b308fc45872ff0837 -->

<!-- START_080f3ecebb7bcc2f93284b8f5ae1ac3b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "A token is required",
    "exception": "Tymon\\JWTAuth\\Exceptions\\JWTException",
    "file": "\/var\/www\/html\/lms_api\/vendor\/tymon\/jwt-auth\/src\/JWTAuth.php",
    "line": 299,
    "trace": [
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/tymon\/jwt-auth\/src\/JWTAuth.php",
            "line": 188,
            "function": "requireToken",
            "class": "Tymon\\JWTAuth\\JWTAuth",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/tymon\/jwt-auth\/src\/JWTAuth.php",
            "line": 74,
            "function": "getPayload",
            "class": "Tymon\\JWTAuth\\JWTAuth",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Support\/Facades\/Facade.php",
            "line": 221,
            "function": "toUser",
            "class": "Tymon\\JWTAuth\\JWTAuth",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/app\/Helpers\/ApiHelper.php",
            "line": 21,
            "function": "__callStatic",
            "class": "Illuminate\\Support\\Facades\\Facade",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/app\/Helpers\/ApiHelper.php",
            "line": 33,
            "function": "getAuthUser",
            "class": "App\\Http\\Controllers\\v1\\UserController",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/app\/Http\/Controllers\/v1\/UserController.php",
            "line": 30,
            "function": "isAdmin",
            "class": "App\\Http\\Controllers\\v1\\UserController",
            "type": "->"
        },
        {
            "function": "index",
            "class": "App\\Http\\Controllers\\v1\\UserController",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "call_user_func_array"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 212,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 169,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 658,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 660,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 635,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 601,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 590,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 139,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 125,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 79,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 264,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 85,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 252,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/symfony\/console\/Application.php",
            "line": 936,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/symfony\/console\/Application.php",
            "line": 240,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/symfony\/console\/Application.php",
            "line": 148,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/lms_api\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/users`

`HEAD api/v1/users`


<!-- END_080f3ecebb7bcc2f93284b8f5ae1ac3b -->

<!-- START_516efe68800340987a961f28f13fffbd -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/users/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/users/create`

`HEAD api/v1/users/create`


<!-- END_516efe68800340987a961f28f13fffbd -->

<!-- START_4194ceb9a20b7f80b61d14d44df366b4 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/users`


<!-- END_4194ceb9a20b7f80b61d14d44df366b4 -->

<!-- START_b4ea58dd963da91362c51d4088d0d4f4 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/{user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/users/{user}`

`HEAD api/v1/users/{user}`


<!-- END_b4ea58dd963da91362c51d4088d0d4f4 -->

<!-- START_2960955e5812bbc17bfc941ae06fad43 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/users/{user}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/{user}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/users/{user}/edit`

`HEAD api/v1/users/{user}/edit`


<!-- END_2960955e5812bbc17bfc941ae06fad43 -->

<!-- START_296fac4bf818c99f6dd42a4a0eb56b58 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/{user}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/users/{user}`

`PATCH api/v1/users/{user}`


<!-- END_296fac4bf818c99f6dd42a4a0eb56b58 -->

<!-- START_22354fc95c42d81a744eece68f5b9b9a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/{user}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/users/{user}`


<!-- END_22354fc95c42d81a744eece68f5b9b9a -->

<!-- START_b8a755c5bb85eec3fe127f33040a14b7 -->
## This is the short description [and should be unique as anchor tags link to this in navigation menu]

This can be an optional longer description of your API call, used within the documentation.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/status" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/status",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/status`

`HEAD api/v1/status`


<!-- END_b8a755c5bb85eec3fe127f33040a14b7 -->

<!-- START_41353c0706c0c86eae0707f7cb13791f -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/status/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/status/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/status/create`

`HEAD api/v1/status/create`


<!-- END_41353c0706c0c86eae0707f7cb13791f -->

<!-- START_7e987af97c1971c3327e9a8a99b293f2 -->
## api/v1/status

> Example request:

```bash
curl -X POST "http://localhost/api/v1/status" \
-H "Accept: application/json" \
    -d "name"="consequatur" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/status",
    "method": "POST",
    "data": {
        "name": "consequatur"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
"{\n data: [],\n}"
```

### HTTP Request
`POST api/v1/status`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 

<!-- END_7e987af97c1971c3327e9a8a99b293f2 -->

<!-- START_acc34b9c73abf172c91ce9a6728d12b8 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/status/{status}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/status/{status}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/status/{status}`

`HEAD api/v1/status/{status}`


<!-- END_acc34b9c73abf172c91ce9a6728d12b8 -->

<!-- START_6845fd017bec917aaf655d762561e2e9 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/status/{status}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/status/{status}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/status/{status}/edit`

`HEAD api/v1/status/{status}/edit`


<!-- END_6845fd017bec917aaf655d762561e2e9 -->

<!-- START_b11b5aa4ef53dfc58afb9a3c3d5745ea -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/status/{status}" \
-H "Accept: application/json" \
    -d "name"="quis" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/status/{status}",
    "method": "PUT",
    "data": {
        "name": "quis"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/status/{status}`

`PATCH api/v1/status/{status}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 

<!-- END_b11b5aa4ef53dfc58afb9a3c3d5745ea -->

<!-- START_f07abb2fedb355bac8b6f02aff3aa69f -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/status/{status}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/status/{status}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/status/{status}`


<!-- END_f07abb2fedb355bac8b6f02aff3aa69f -->

<!-- START_d7594ee777449f155e1187497c7f0e79 -->
## api/v1/leads

> Example request:

```bash
curl -X GET "http://localhost/api/v1/leads" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/leads",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
"{\n data: [1,2,3],\n}"
```

### HTTP Request
`GET api/v1/leads`

`HEAD api/v1/leads`


<!-- END_d7594ee777449f155e1187497c7f0e79 -->

<!-- START_6a33450b873fb5a3ded0b968ea64a367 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/leads/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/leads/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/leads/create`

`HEAD api/v1/leads/create`


<!-- END_6a33450b873fb5a3ded0b968ea64a367 -->

<!-- START_b1bd0e5f69ea81a17d8457ea43b3bfc0 -->
## api/v1/leads

> Example request:

```bash
curl -X POST "http://localhost/api/v1/leads" \
-H "Accept: application/json" \
    -d "status_id"="cumque" \
    -d "first_name"="cumque" \
    -d "last_name"="cumque" \
    -d "email"="jammie31@example.org" \
    -d "telephone"="7283481" \
    -d "status"="cumque" \
    -d "source"="cumque" \
    -d "due_date"="cumque" \
    -d "budget"="7283481" \
    -d "is_assigned"="cumque" \
    -d "address"="cumque" \
    -d "alternate_address"="cumque" \
    -d "house_no"="cumque" \
    -d "postcode"="7283481" \
    -d "message"="cumque" \
    -d "assigned_to"="cumque" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/leads",
    "method": "POST",
    "data": {
        "status_id": "cumque",
        "first_name": "cumque",
        "last_name": "cumque",
        "email": "jammie31@example.org",
        "telephone": 7283481,
        "status": "cumque",
        "source": "cumque",
        "due_date": "cumque",
        "budget": 7283481,
        "is_assigned": "cumque",
        "address": "cumque",
        "alternate_address": "cumque",
        "house_no": "cumque",
        "postcode": 7283481,
        "message": "cumque",
        "assigned_to": "cumque"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
"{\n data: [\"123\":\"123\"],\n}"
```

### HTTP Request
`POST api/v1/leads`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    status_id | string |  required  | 
    first_name | string |  required  | Maximum: `255`
    last_name | string |  required  | Maximum: `255`
    email | email |  required  | 
    telephone | numeric |  required  | 
    status | string |  required  | 
    source | string |  required  | Maximum: `255`
    due_date | string |  required  | Maximum: `255`
    budget | numeric |  required  | 
    is_assigned | string |  required  | 
    address | string |  required  | Maximum: `255`
    alternate_address | string |  required  | Maximum: `255`
    house_no | string |  required  | Maximum: `255`
    postcode | numeric |  required  | 
    message | string |  required  | Maximum: `255`
    assigned_to | string |  required  | 

<!-- END_b1bd0e5f69ea81a17d8457ea43b3bfc0 -->

<!-- START_e20ebdde23739bfba54b6277972cdc26 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/leads/{lead}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/leads/{lead}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/leads/{lead}`

`HEAD api/v1/leads/{lead}`


<!-- END_e20ebdde23739bfba54b6277972cdc26 -->

<!-- START_898f8599772cf54607b18cdd0732448a -->
## api/v1/leads/{lead}/edit

> Example request:

```bash
curl -X GET "http://localhost/api/v1/leads/{lead}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/leads/{lead}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
"{\n data: [],\n}"
```

### HTTP Request
`GET api/v1/leads/{lead}/edit`

`HEAD api/v1/leads/{lead}/edit`


<!-- END_898f8599772cf54607b18cdd0732448a -->

<!-- START_6254ee3603cf4a867657e0b661b034be -->
## api/v1/leads/{lead}

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/leads/{lead}" \
-H "Accept: application/json" \
    -d "status_id"="qui" \
    -d "first_name"="qui" \
    -d "last_name"="qui" \
    -d "email"="nschowalter@example.org" \
    -d "telephone"="80785721" \
    -d "status"="qui" \
    -d "source"="qui" \
    -d "due_date"="qui" \
    -d "budget"="80785721" \
    -d "is_assigned"="qui" \
    -d "address"="qui" \
    -d "alternate_address"="qui" \
    -d "house_no"="qui" \
    -d "postcode"="80785721" \
    -d "message"="qui" \
    -d "assigned_to"="qui" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/leads/{lead}",
    "method": "PUT",
    "data": {
        "status_id": "qui",
        "first_name": "qui",
        "last_name": "qui",
        "email": "nschowalter@example.org",
        "telephone": 80785721,
        "status": "qui",
        "source": "qui",
        "due_date": "qui",
        "budget": 80785721,
        "is_assigned": "qui",
        "address": "qui",
        "alternate_address": "qui",
        "house_no": "qui",
        "postcode": 80785721,
        "message": "qui",
        "assigned_to": "qui"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
"{\n data: [],\n}"
```

### HTTP Request
`PUT api/v1/leads/{lead}`

`PATCH api/v1/leads/{lead}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    status_id | string |  required  | 
    first_name | string |  required  | Maximum: `255`
    last_name | string |  required  | Maximum: `255`
    email | email |  required  | 
    telephone | numeric |  required  | 
    status | string |  required  | 
    source | string |  required  | Maximum: `255`
    due_date | string |  required  | Maximum: `255`
    budget | numeric |  required  | 
    is_assigned | string |  required  | 
    address | string |  required  | Maximum: `255`
    alternate_address | string |  required  | Maximum: `255`
    house_no | string |  required  | Maximum: `255`
    postcode | numeric |  required  | 
    message | string |  required  | Maximum: `255`
    assigned_to | string |  required  | 

<!-- END_6254ee3603cf4a867657e0b661b034be -->

<!-- START_41c8a32ce8a635ba39f5e10e90ab89a6 -->
## api/v1/leads/{lead}

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/leads/{lead}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/leads/{lead}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
"{\n data: [],\n}"
```

### HTTP Request
`DELETE api/v1/leads/{lead}`


<!-- END_41c8a32ce8a635ba39f5e10e90ab89a6 -->

<!-- START_ab9d9986a3ce171028e838c7a973c76e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/note" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/note",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/note`

`HEAD api/v1/note`


<!-- END_ab9d9986a3ce171028e838c7a973c76e -->

<!-- START_96cbb7ea675796e4bf44c8c09059310a -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/note/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/note/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/note/create`

`HEAD api/v1/note/create`


<!-- END_96cbb7ea675796e4bf44c8c09059310a -->

<!-- START_a6fe630930e6174d987c43d406b17684 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/note" \
-H "Accept: application/json" \
    -d "lead_id"="quae" \
    -d "notes"="quae" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/note",
    "method": "POST",
    "data": {
        "lead_id": "quae",
        "notes": "quae"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/note`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    lead_id | string |  required  | 
    notes | string |  required  | Maximum: `255`

<!-- END_a6fe630930e6174d987c43d406b17684 -->

<!-- START_bdd6b282f41a57118c488b49b00f2c58 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/note/{note}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/note/{note}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/note/{note}`

`HEAD api/v1/note/{note}`


<!-- END_bdd6b282f41a57118c488b49b00f2c58 -->

<!-- START_bd48cdc97e8faa0757495ab64b15d924 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/note/{note}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/note/{note}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/note/{note}/edit`

`HEAD api/v1/note/{note}/edit`


<!-- END_bd48cdc97e8faa0757495ab64b15d924 -->

<!-- START_98270bf14372f872c2f04c86b5f084b1 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/note/{note}" \
-H "Accept: application/json" \
    -d "lead_id"="quis" \
    -d "notes"="quis" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/note/{note}",
    "method": "PUT",
    "data": {
        "lead_id": "quis",
        "notes": "quis"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/note/{note}`

`PATCH api/v1/note/{note}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    lead_id | string |  required  | 
    notes | string |  required  | Maximum: `255`

<!-- END_98270bf14372f872c2f04c86b5f084b1 -->

<!-- START_e72a2bf06aae44bb29232368172c7ba6 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/note/{note}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/note/{note}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/note/{note}`


<!-- END_e72a2bf06aae44bb29232368172c7ba6 -->

<!-- START_17e6b3738a4e4698fd108e18933eeb99 -->
## api/v1/comments

> Example request:

```bash
curl -X GET "http://localhost/api/v1/comments" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comments",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/comments`

`HEAD api/v1/comments`


<!-- END_17e6b3738a4e4698fd108e18933eeb99 -->

<!-- START_1261832301143ac719fc2bb196b93ce7 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/comments/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comments/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/comments/create`

`HEAD api/v1/comments/create`


<!-- END_1261832301143ac719fc2bb196b93ce7 -->

<!-- START_b22ffef6d6cbf61922e0635bc5e41033 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/comments" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comments",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/comments`


<!-- END_b22ffef6d6cbf61922e0635bc5e41033 -->

<!-- START_d46887a8b589ce13fd7cdd37f3b3e8f9 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/comments/{comment}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comments/{comment}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/comments/{comment}`

`HEAD api/v1/comments/{comment}`


<!-- END_d46887a8b589ce13fd7cdd37f3b3e8f9 -->

<!-- START_9d082e3a88f1344610407eb83d397ff0 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/comments/{comment}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comments/{comment}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/comments/{comment}/edit`

`HEAD api/v1/comments/{comment}/edit`


<!-- END_9d082e3a88f1344610407eb83d397ff0 -->

<!-- START_b0ff4b1f16a09d9d126faafd2040d227 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/comments/{comment}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comments/{comment}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/comments/{comment}`

`PATCH api/v1/comments/{comment}`


<!-- END_b0ff4b1f16a09d9d126faafd2040d227 -->

<!-- START_6a0817a059f8c6644c81392c397152ab -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/comments/{comment}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comments/{comment}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/comments/{comment}`


<!-- END_6a0817a059f8c6644c81392c397152ab -->

