// Class that implements the Iterable interface
class MyCollection implements \Iterator {
    private $data = [];

    public function __construct($data) {
        $this->data = $data;
    }

    public function rewind() {
        reset($this->data);
    }

    public function current() {
        return