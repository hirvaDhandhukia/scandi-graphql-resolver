# ScandiPWA_GraphQL_Resolver
This magento module provides GraphQL endpoints for learning query.

## Endpoint description
This endpoint allows to perform query operations and return json data.

GraphQL entry:
```graphql
query {
  CustomGraphql (
    username: "Hirva",
    password: "my-password",
    fieldtype: "none"
  ) {
    username
    password
    fieldtype
  }
}
```

JSON output:
```json
{
  "data": {
    "CustomGraphql": {
      "username": "Hirva",
      "password": "my-password",
      "fieldtype": "none"
    }
  }
}
```
