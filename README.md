# UWebPro\Substring
A miniture library to add a substring function/method to your work.

### Function Usage
```
$result = substring($document, 'start', 'end');
```

### Trait Usage
```
class MyClass{
    use UWebPro\Str\SubstringTrait;

    public function myMethod($document){
        ...
        return $this->substring($document, 'start', 'end');
    }
}
