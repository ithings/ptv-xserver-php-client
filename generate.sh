echo "REPLACE '$ref\" : \"#/definitions/Distance\"' with '\"type\" : \"number\"'"
swagger-codegen generate -i swagger.json -l php -c config.json

#openapi-generator-cli version-manager set 5.4.0
#openapi-generator-cli generate -i swagger.yaml -g php -c config.json