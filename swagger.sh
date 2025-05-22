#!/bin/bash

if [ ! -d "./public/swagger" ]; then
  mkdir ./public/swagger
fi

php ../vendor/bin/openapi --bootstrap ./swagger-constants.php --output ../public/swagger ./swagger-v1.php ../app/Http/Controllers/V1
