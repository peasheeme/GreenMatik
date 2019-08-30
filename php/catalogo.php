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

    public static function insert($data, $file)
    {
        try {
            $conn = new Conexion();

            $nombre    = $conn->scape($data['nombre']);
            $contenido = $conn->scape($data['contenido']);
            $imagen    = addslashes(file_get_contents($file['imagenes']['tmp_name']));
            $categoria = $conn->scape($data['categoria']);

            $query = "INSERT INTO informacion(nombre, contenido, img, categoria) VALUES('$nombre','$contenido', '$imagen', '$categoria')";
            $conn->exec($query);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}