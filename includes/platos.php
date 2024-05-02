<?php
    require_once('database.php');

    class platos{
        public static function create_plato($id_plato, $nombre_plato, $descripcion, $precio, $categoria){
            $database = new Database();
            $conn = $database->getConnection();

            $stmt = $conn->prepare('INSERT INTO platos(id_plato, nombre_plato, descripcion, precio, categoria)
                VALUES(:id_plato, :nombre_plato, :descripcion, :precio, :categoria)');
            $stmt->bindParam(':id_plato',$id_plato);
            $stmt->bindParam(':nombre_plato',$nombre_plato);
            $stmt->bindParam(':descripcion',$descripcion);
            $stmt->bindParam(':precio',$precio);
            $stmt->bindParam(':categoria',$categoria);
            if($stmt->execute()){
                header('HTTP/1.1 201 plato creado correctamente');
            } else {
                header('HTTP/1.1 404 plato no se ha creado correctamente');
            }
        }

        public static function delete_plato($id_plato){
            $database = new Database();
            $conn = $database->getConnection();

            $stmt = $conn->prepare('DELETE FROM platos WHERE id_plato=:id_plato');
            $stmt->bindParam(':id_plato',$id_plato);
            if($stmt->execute()){
                header('HTTP/1.1 201 plato borrado correctamente');
            } else {
                header('HTTP/1.1 404 plato no se ha podido borrar correctamente');
            }
        }

        public static function get_plato(){
            $database = new Database();
            $conn = $database->getConnection();
            $stmt = $conn->prepare('SELECT * FROM platos');
            if($stmt->execute()){
                $result = $stmt->fetchAll();
                echo json_encode($result);
                header('HTTP/1.1 201 OK');
            } else {
                header('HTTP/1.1 404 No se ha podido consultar los platos');
            }
        }

        public static function update_plato($id_plato, $nombre_plato, $descripcion, $precio, $categoria){
            $database = new Database();
            $conn = $database->getConnection();
            $stmt = $conn->prepare('UPDATE platos SET id_plato=:id_plato, nombre_plato=:nombre_plato, descripcion=:descripcion, precio=:precio, categoria=:categoria WHERE id_plato=:id_plato');
            $stmt->bindParam(':id_plato',$id_plato); 
            $stmt->bindParam(':nombre_plato',$nombre_plato);
            $stmt->bindParam(':descripcion',$descripcion);
            $stmt->bindParam(':precio',$precio);
            $stmt->bindParam(':categoria',$categoria);
            if($stmt->execute()){
                header('HTTP/1.1 201 plato actualizado correctamente');
            } else {
                header('HTTP/1.1 404 plato no se ha podido actualizar correctamente');
            }
        
        }
    }

?>