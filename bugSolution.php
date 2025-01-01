function foo(int $a, int $b): int {
  //Add explicit type checking to prevent type juggling
  if (!is_int($a) || !is_int($b)) {
    throw new TypeError("Both parameters must be integers");
  }
  return $a + $b;
}

function bar(string $a, string $b): string {
  return $a . $b;
}

//This will now throw a TypeError
$result = foo(1, '2');