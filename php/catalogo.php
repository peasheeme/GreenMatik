<?php

require 'conexion.php';

class Catalogo
{
    public static function getRandom($limit=null)
    {
        try {
            $conn = new Conexion();

            if (empty($limit)) {
                $query = "SELECT * FROM informacion ORDER BY RAND()";
            } else {
                $limit = $conn->scape($limit);
                $query = "SELECT * FROM informacion ORDER BY RAND() LIMIT $limit";
            }

            $res = $conn->select($query);
            $conn->close();

            return $res;
        } catch (\Exception $e) {
            return null;
        }
    }

    public static function getByCategory($category)
    {
        try {
            $conn = new Conexion();

            $category = $conn->scape($category);
            $query = "SELECT * FROM informacion where categoria = '$category'";
            $res = $conn->select($query);

            $conn->close();

            return $res;
        } catch (\Exception $e) {
            return null;
        }
    }

    public static function getById($id)
    {
        try {
            $conn = new Conexion();

            $id = $conn->scape($id);
            $query = "SELECT * FROM informacion WHERE id = '$id'";

            $res = $conn->select($query);
            $conn->close();

            return $res->fetch_assoc();
        } catch (\Exception $e) {
            return null;
        }
    }
}