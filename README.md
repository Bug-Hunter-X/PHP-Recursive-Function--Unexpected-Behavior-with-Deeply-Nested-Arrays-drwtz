# PHP Recursive Function: Handling Nested Arrays and Error Strings

This repository demonstrates a PHP recursive function designed to process nested arrays and replace instances of the substring "error" with "warning". While seemingly functional, it highlights a common issue with recursive functions: potential stack overflow errors with deeply nested data.

## Bug
The provided PHP code uses recursion to traverse a nested array.  If the input array is extremely deep or large, the function's recursive calls can exceed the PHP's maximum recursion depth, resulting in a fatal error.

## Solution
The solution introduces iterative processing using a stack to avoid recursion and solve the stack overflow problem. This approach is far more robust for handling arbitrarily deep nested arrays.