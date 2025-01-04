```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value) && strpos($value, 'error') !== false) {
      // Handle error strings here
      // Instead of throwing an exception, we'll modify it
      $data[$key] = str_replace('error', 'warning', $value);
    }
  }
  return $data;
}

$data = [
  'field1' => 'some data',
  'field2' => ['nested' => 'this has an error'],
  'field3' => 'another error',
];

$processedData = processData($data);
print_r($processedData);
```