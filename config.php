<?php

// This is the directory where your use case will be generated
// This example assumes you have all your projects in a workspace directory in your home
$target = '/home/user/workspace/project/core';


// This is the base namespace
$namespace = 'Arquivei\Project\Core';

// This is where you list entities and their properties
// Names and types will be echoed as they are written, so watch out for typos
$entities = [
	'Entity' => [
		'propertyName' => 'propertyType',
	]
];

// This is where you specify the properties of the requested to be executed
$requestProperties = [
	'propertyName' => 'propertyType',
];

// This is where you list the exceptions
// The output will be a plain class that extends the \Exception class, so no properties here
$exceptions = [
	'UseCaseException',
];


// This is where you specify the gateways
// The output will be a plain interface with the name, no method specification here
$gateways = [
	'UseCaseGateway',
	'AnotherUseCaseGateway',
];


// This is where you specify the rules
// Feel free to add properties that are not just int or string, like the gateways you just listed
$rules = [
	'UseCaseRule' => [
        'propertyName' => 'propertyType',
        'useCaseGateway' => 'UseCaseGateway',
	],
	'AnotherUseCaseRule' => [
        'propertyName' => 'propertyType',
        'useCaseGateway' => 'UseCaseGateway',
    ]
];
