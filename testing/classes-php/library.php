<?php

class LibraryItem {
    protected $title;
    protected $itemNumber;
    protected $isCheckedOut;
    protected $dueDate;

    public function __construct($title, $itemNumber) {
        $this->title = $title;
        $this->itemNumber = $itemNumber;
        $this->isCheckedOut = false;
        $this->dueDate = null;
    }

    public function displayItemInfo() {
        echo "Title: " . $this->title . "\n";
        echo "Item Number: " . $this->itemNumber . "\n";
        echo "Checked Out: " . ($this->isCheckedOut ? "Yes" : "No") . "\n";
        if ($this->isCheckedOut) {
            echo "Due Date: " . $this->dueDate . "\n";
        }
    }

    public function checkOut($dueDate) {
        if (!$this->isCheckedOut) {
            $this->isCheckedOut = true;
            $this->dueDate = $dueDate;
            echo "Item checked out successfully.\n";
        } else {
            echo "Item is already checked out.\n";
        }
    }

    public function returnItem() {
        if ($this->isCheckedOut) {
            $this->isCheckedOut = false;
            $this->dueDate = null;
            echo "Item returned successfully.\n";
        } else {
            echo "Item is not currently checked out.\n";
        }
    }
}

class Book extends LibraryItem {
    protected $author;
    protected $totalPages;

    public function __construct($title, $itemNumber, $author, $totalPages) {
        parent::__construct($title, $itemNumber);
        $this->author = $author;
        $this->totalPages = $totalPages;
    }

    public function displayBookInfo() {
        $this->displayItemInfo();
        echo "Author: " . $this->author . "\n";
        echo "Total Pages: " . $this->totalPages . "\n";
    }
}

// Instantiate objects and demonstrate usage
$book1 = new Book("The Great Gatsby", "B001", "F. Scott Fitzgerald", 218);
$book1->displayBookInfo();

$book2 = new Book("To Kill a Mockingbird", "B002", "Harper Lee", 324);
$book2->checkOut("2023-01-07");
$book2->displayBookInfo();

$book2->returnItem();
$book2->displayBookInfo();

?>

<!-- The exercise :
Create the LibraryItem class with the following properties and methods:
Properties: $title, $itemNumber, $isCheckedOut (boolean), $dueDate.
Methods:
displayItemInfo()
- that echoes information about the library item.
checkOut($dueDate)
- that checks out the item and sets the due date.
returnItem()
- that returns the item.

Create the Book class that extends LibraryItem with additional properties specific to books:
-Properties: $author, $totalPages.
-Methods: displayBookInfo() that echoes information about the book.
-Instantiate objects of the Book class, demonstrate the usage of inherited properties and
-methods, and perform check-out and return operations. -->