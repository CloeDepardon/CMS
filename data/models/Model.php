<?php

/**
 *
 */
class Model
{
  // TODO remove the propreties and put them inside anon commitable config file
  const DB_NAME = 'my_cms';
  const USER = 'root';
  const PASS = '000000';
  protected $dbConnec;

  function __construct()
  {
    $this->dbConnec = new PDO('mysql:host=localhost;dbname=' . self::DB_NAME, self::USER, self::PASS);
  }
}
