<?php

class seguimientodocente_model
{
    private $db;
    private $arDocentes;
    private $arregloDocentesRoles;
    private $arregloMateria;
    private $arregloGrupo;
    private $arregloHorarioMateria;
    private $arregloCarrera;
    private $arregloDocente;

    public function __construct()
    {
        $this->db = db::conexion();
        $this->arDocentes = array();
        $this->arregloDocentesRoles = array();

        $this->arregloMateria = array();
        $this->arregloGrupo = array();
        $this->arregloHorarioMateria = array();

        $this->arregloCarrera = array();

        $this->arregloDocente= array();

    }

    public function get_docentes()
    {
        $consulta = $this->db->query("select * from docente;");
        while ($filas = $consulta->fetch_assoc()) {
            $this->arDocentes[] = $filas;
        }
        return $this->arDocentes;
    }

    public function get_docente_rol()
    {
        $consulta_sql="select * from docente d join rol r on d.ID_ROL=r.ID_ROL";
        $consulta =$this->db->query($consulta_sql);
        while ($filas = $consulta->fetch_assoc()) {
            $this->arregloDocentesRoles[] = $filas;
        }
        return $this->arregloDocentesRoles;
    }

    public function get_materia ()
    {
        $consulta = $this->db->query("select * from MATERIA;");
        while ($filas = $consulta->fetch_assoc()) {
            $this->arregloMateria[] = $filas;
        }
        return $this->arregloMateria;
    }

    public function get_docente($ID_DOC)
    {
        $consulta_sql = "select * from DOCENTE where ID_DOC=".$ID_DOC;
        $consulta =$this->db->query($consulta_sql);
        while ($filas = $consulta->fetch_assoc()) {
            $this->arregloDocente[] = $filas;
        }
        return $this->arregloDocente;

    }

}

?>






















