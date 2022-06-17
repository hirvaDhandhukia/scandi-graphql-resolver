# ScandiPWA_GraphQl_Resolver
This magento module provides Graphql endpoints for learning query.

## Endpoint description
This endpoint allows to perform query operations and return json data.

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
