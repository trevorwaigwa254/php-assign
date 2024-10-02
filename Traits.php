// Trait
trait Logger {
    public function log($message) {
        echo "Log: $message";
    }
}

// Class that uses the trait
class User {
    use Logger;

    public function login() {
        $this->log("User  logged in.");
    }
}

// Create an instance of the User class
$user = new User();
$user->login(); // Output: Log: User logged in.