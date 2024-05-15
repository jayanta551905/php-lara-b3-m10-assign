<?php
class Book {
    // TODO: Add properties as Private
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

// TODO: Add getTitle method
    public function getTitle() {
        return $this->title;
    }

    // TODO: Add getAvailableCopies method
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // TODO: Add borrowBook method
    public function brrowBook() {

    }

    // TODO: Add returnBook method
    public function returnBook() {

    }

}

class Member {
    // TODO: Add properties as Private
    private $name;

    public function __construct($name) {
        // TODO: Initialize properties
        $this->name = $name;
    }

    // TODO: Add getName method
    public function getName() {
        return $this->name;
    }

    // TODO: Add borrowBook method
    public function borrowBook() {

    }

    // TODO: Add returnBook method
    public function returnBook() {

    }

}

// Usage

// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.

// TODO: Create 2 books with the following properties
//Book 1 - Name: The Great Gatsby, Available Copies: 5.
//Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.

// TODO: Create 2 members with the following properties
//Member 2 - Name: Jane Smith
//Member 1 - Name: John Doe

// TODO: Apply Borrow book method to each member

// TODO: Print Available Copies with their names:

?>

