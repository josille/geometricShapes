# Gemotric Shapes

Demo Project to generate geometric shapes.

## Notes and Assumptions

I was not sure what kind of architecture this project was aiming for, in the sense of designing an API endpoint that will return a figure,
or a cli that can work as a anonymus function(lambda) to have the possiblity of horizontal scaling, so i wrote both options, where 'cli' is a command line and 'api' behaves as POST endpoint.


I did not write many test cases but one, normally is important but for the sense of a test project I consider was only necesary to show how can be implemented
rather than write al test cases.

I add a postman configuration to test the endpoint.


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

## Author

Rodrigo De La Garza <josille@gmail.com>
