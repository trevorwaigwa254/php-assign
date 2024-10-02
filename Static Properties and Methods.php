// Class with static properties and methods
class Config {
    private static $databaseHost = 'localhost';
    private static $databaseUsername = 'root';

    public static function getDatabaseHost() {
        return self::$databaseHost;
    }

    public static function setDatabaseUsername($username) {
        self::$databaseUsername = $username;
    }
}

// Accessing static properties and methods
echo Config::getDatabaseHost(); // Output: localhost
Config::setDatabaseUsername('new_username');
echo Config::$databaseUsername; // Output: new_username