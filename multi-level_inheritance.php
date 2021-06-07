<!-- https://www.php.net/manual/en/language.oop5.inheritance.php -->

<!-- // Here is some clarification about PHP inheritance – there is a lot of bad information on the net.  PHP does support Multi-level inheritance.  (I tested it using version 5.2.9).  It does not support multiple inheritance.

// This means that you cannot have one class extend 2 other classes (see the extends keyword).  However, you can have one class extend another, which extends another, and so on.

// Example: -->

<?php
class A {
        // more code here
        echo "Class A";
}

class B extends A {
        // more code here
        echo "Class B extends A";
}

class C extends B {
        // more code here
        echo "Class C extends B";
}


$someObj = new A();  // no problems
$someOtherObj = new B(); // no problems
$lastObj = new C(); // still no problems

?>