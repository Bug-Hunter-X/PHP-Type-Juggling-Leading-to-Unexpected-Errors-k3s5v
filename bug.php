function foo(int $a, int $b): int {
  return $a + $b;
}

function bar(string $a, string $b): string {
  return $a . $b;
}

//This will lead to a TypeError
$result = foo(1, '2');