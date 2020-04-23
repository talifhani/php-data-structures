# PHP Data Structures 
PHP Implementation of some classical data structures</p>  
## Installing

```shell

$ composer require talifhani/php-data-structures -vvv

```

## Usage
```php
use Talifhani\PHPDataStructures\LinkedList\LinkedList;

$linkedList = new LinkedList();

$linkedList->prepend(1);
$linkedList->prepend(2);
$linkedList->prepend(3);
$linkedList->append(4);
$linkedList->deleteByIndex(3);

echo $linkedList;
echo "|";
echo "Size: ".$linkedList->size().'|'.$linkedList->indexOf(2);
/*
3-2-1|Size: 3|1
*/
```  

## Contributing
You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/semicolon/za-id-validator/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/semicolon/za-id-validator/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

  

## License
MIT