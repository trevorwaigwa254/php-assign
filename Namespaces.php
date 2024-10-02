// Declaring a namespace
namespace MyNamespace;

// Class in the namespace
class MyClass {
    public function hello() {
        echo "Hello from MyNamespace!";
    }
}

// Using the namespace
use MyNamespace\MyClass;

// Create an instance of the class
$myClass = new MyClass();
$myClass->hello(); // Output: Hello from MyNamespace!