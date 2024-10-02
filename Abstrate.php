// Abstract class
abstract class Vehicle {
    protected $color;

    public function __construct($color) {
        $this->color = $color;
    }

    abstract public function move();
}

// Concrete class that inherits from the abstract class
class Car extends Vehicle {
    public function move() {
        echo "The $this->color car is moving.";
    }
}

// Create an instance of the Car class
$car = new Car('red');
$car->move(); // Output: The red car is moving.