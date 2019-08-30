<?php

class Conexion
{
	private $conn;

	public function __construct()
	{
		$this->conn = new mysqli("localhost", "root", "", "greenmatik");
	}

	public function select($query)
	{
		return $this->conn->query($query);
	}

	public function exec($query)
	{
		$this->conn->query($query);
	}

	public function scape($str)
	{
		return $this->conn->real_escape_string($str);
	}

	public function close()
	{
		$this->conn->close();
	}
}