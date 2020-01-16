<h1 align="center">Welcome to ndjson 👋</h1>
<p>
  <a href="https://www.npmjs.com/package/ndjson" target="_blank">
    <img alt="Version" src="https://img.shields.io/npm/v/ndjson.svg">
  </a>
</p>

## Download
```shell script
composer require soldierm/ndjson
```

## Usage

### Decode ndjson
```php
<?php

$ndjson = <<<NDJSON
{"foo":"bar"}
{"hello":"world"}
NDJSON;
$decode = \Soldierm\Ndjson\Parser::decode($ndjson);
```

### Encode ndjson
```php
<?php

$array = [
    ['foo' => 'bar'],
    ['hello' => 'world']
];
$encode = \Soldierm\Ndjson\Parser::encode($array);
```

## Show your support

Give a ⭐️ if this project helped you!

***
_This README was generated with ❤️ by [readme-md-generator](https://github.com/kefranabg/readme-md-generator)_
