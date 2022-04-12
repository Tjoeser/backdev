<?php
require_once '../model/ContactsLogic.php';

class ContactsController
{
    public function __construct()
    {
        $this->ContactsLogic = new ContactsLogic();
    }

    public function __destruct()
    {
        // code
    }

    public function handleRequest()
    {
        try {
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function collectCreateContact()
    {
        $contacts = $this->ContactsLogic->readContacts();
        include 'view/contacts.php';
    }

    public function collectUpdateContact()
    {
        // code
    }

    public function collectDeleteContact()
    {
        // code
    }

}