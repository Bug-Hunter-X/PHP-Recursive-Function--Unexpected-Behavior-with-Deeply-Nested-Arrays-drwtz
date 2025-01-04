```php
function processData(array $data): array {
  $stack = [$data];
  while (!empty($stack)) {
    $current = array_pop($stack);
    foreach ($current as $key => $value) {
      if (is_array($value)) {
        $stack[] = $value;
      } else if (is_string($value) && strpos($value, 'error') !== false) {
        $current[$key] = str_replace('error', 'warning', $value);
      }
    }
  }
  return $data; // Return the original array, now modified
}

$data = [
  'field1' => 'some data',
  'field2' => ['nested' => 'this has an error'],
  'field3' => 'another error',
  'field4' => ['nested1' => ['nested2' => ['nested3' => 'error within nested level']]]
];

$processedData = processData($data);
print_r($processedData);
```