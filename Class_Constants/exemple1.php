<!-- Class constants are case-sensitive. However,
it is recommended to name the constants in all uppercase letters.
access a constant(::) -->
<?php
class Goodbye {
  const MESSAGE = "Thank you";
}

echo Goodbye::MESSAGE;
?>