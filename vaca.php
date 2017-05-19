<?php

/**
 * Representa el la estructura de la tabla vaca
 * almacenada en la base de datos
 */
require 'Database.php';

class vaca
{
    function __construct()
    {
    }

    /**
     * Retorna en la fila especificada de la tabla 'vaca'
     *
     * @param $codigo Identificador del registro
     * @return array Datos del registro
     */
    public static function getAll()
    {
        $consulta = "SELECT * FROM vaca";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();

            return $comando->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return false;
        }
    }

    /**
     * Obtiene los campos de un  vaca con un identificador
     * determinado
     *
     * @param $codigo Identificador de la vaca
     * @return mixed
     */
    public static function getById($codigo)
    {
        // Consulta de la tabla vaca
        $consulta = "SELECT codigo,
                            raza,
							fecha_nacimiento,
							peso,
							escala,
							estado,
							fecha_parto,
							fecha_inicio_produccion,
							tiempos_alimentacion,
							tratamiento
                             FROM vaca
                             WHERE codigo = ?";

        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute(array($codigo));
            // Capturar primera fila del resultado
            $row = $comando->fetch(PDO::FETCH_ASSOC);
            return $row;

        } catch (PDOException $e) {
            // Aquí puedes clasificar el error dependiendo de la excepción
            // para presentarlo en la respuesta Json
            return -1;
        }
    }

    /**
     * Actualiza un registro de la bases de datos basado
     * en los nuevos valores relacionados con un identificador
     *
     * @param $codigo     identificador
   	 * @param $peso nuevo peso 
     * @param $escala nueva escala
	 * @param $estado nuevo estado
	 * @param $fecha_parto fecha de parto
	 * @param $fecha_inicio_produccion ffecha de inicio de produccion
	 * @param $tiempos alimentacion tiempos de alimentacion
	 * @param $tratamiento tratamiento
	  
     */
    public static function update(
        $codigo,		
        $peso,
		$escala,
		$estado,
		$fecha_parto,
		$fecha_inicio_produccion,
		$tiempos_alimentacion,
		$tratamiento       
    )
    {
        // Creando consulta UPDATE
        $consulta = "UPDATE vaca" .
            " SET  peso=?, escala=? ,estado=?,
			fecha_parto=?, fecha_inicio_produccion=?, tiempos_alimentacion=?,tratamiento=?   " .
            "WHERE codigo=?";

        // Preparar la sentencia
        $cmd = Database::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($peso,
		$escala,
		$estado,
		$fecha_parto,
		$fecha_inicio_produccion,
		$tiempos_alimentacion,
		$tratamiento,$codigo));

        return $cmd;
    }

    /**
     * Insertar un nueva vaca
     *
    * @param $codigo     identificador
     * @param $raza     raza
     * @param $fecha_nacimiento fecha de nacimiento
	 * @param $peso nuevo peso 
     * @param $escala nueva escala
	 * @param $estado nuevo estado
	 * @param $fecha_parto fecha de parto
	 * @param $fecha_inicio_produccion ffecha de inicio de produccion
	 * @param $tiempos alimentacion tiempos de alimentacion
	 * @param $tratamiento tratamiento
     * @return PDOStatement
     */
    public static function insert(
        $codigo
    )
    {
        // Sentencia INSERT
        $comando = "INSERT INTO  vaca (codigo) VALUES (?)";

        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        return $sentencia->execute(
            array(
                $codigo
            )
        );

    }

    /**
     * Eliminar el registro con el identificador especificado
     *
     * @param $codigo identificador de la tabla vacas
     * @return bool Respuesta de la eliminación
     */
    public static function delete($codigo)
    {
        // Sentencia DELETE
        $comando = "DELETE FROM vaca WHERE codigo=?";

        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        return $sentencia->execute(array($codigo));
    }

    public static function setVisit($codigo)
    {
        $comando = "INSERT INTO visitas(codigo, fecha_hora) VAlUES(?,?)";
        $sentencia = Database::getInstance()->getDb()->prepare($comando);
        return $sentencia->execute(array($codigo, Date("Y-m-d H:i:s")));
    }
}

?>