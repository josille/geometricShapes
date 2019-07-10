# Gemotric Shapes

Demo Project to generate geometric shapes.

## Getting Started

Use cli or api endpoint.

### cli

 USAGE: php cli.php 'Square LENGHT WIDTH' 'Circle LENGHT WIDTH'
``` 
 $ php cli.php 'Square 5 3' 'Circle 20 30'
```

### api endpoint

```
curl --request POST --url http://localhost/geometricShapes/api.php --header 'content-type: application/json' --data '{"shapes": [ { "params": [5,6],"type": "Rectangle"}, {"params": [20,30],"type": "Rectangle"}]}'
```

(postman example)[testGeometricShape.postman_collection.json]

### Prerequisites

Uses PHP7
