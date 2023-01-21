<!-- The final keyword can be used to prevent(man3) class inheritance or to prevent method overriding. -->

<?php
final class Fruit {
  // some code
}

// will result in error
 class Strawberry extends Fruit {
  // some code
 }
?>

<?php
class Fruits {
  final public function intro() {
    // some code
  }
}

class Strawberry extends Fruits {
  // will result in error
  public function intro() {
    // some code
  }
}
?>