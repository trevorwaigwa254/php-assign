// Interface
interface Printable {
    public function printDocument();
}

// Class that implements the interface
class Document implements Printable {
    public function printDocument() {
        echo "Printing the document.";
    }
}

// Create an instance of the Document class
$document = new Document();
$document->printDocument(); // Output: Printing the document.