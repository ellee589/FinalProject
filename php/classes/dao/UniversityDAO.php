<?php
/**
 * Created by IntelliJ IDEA.
 * User: oscar
 * Date: 26/07/16
 * Time: 01:27 PM
 */
class UniversityDAO {

    public static function UniversityFromVar($Var){
        $University=new University();
        $University->setUniversityId($Var['AreaId']);
        $University->setArea($Var['Area']);
        /*$University->setUniversityId($Var['id']);
        $University->setResponsable($Var['responsable']);
        $University->setUniversityName($Var['universidades']);
        $University->setArea($Var['area']);
        $University->setCarrera($Var['carrera']);
        $University->setPlan($Var['plan']);
        $University->setDuracion($Var['duracion']);
        $University->setModalidad($Var['modalidad']);
        $University->setTitulacion($Var['titulacion']);
        $University->setBecas($Var['becas']);
        $University->setCosto($Var['costo']);
        $University->setDireccion($Var['direccion']);
        $University->setMunicipio($Var['municipio']);
        $University->setEstado($Var['estado']);
        $University->setCorreo($Var['correo']);
        $University->setTelefono($Var['telefono']);
        $University->setPagina($Var['pagina']);*/
        return $University;
    }

    public static function listUnivers($SearchString=NULL, $PageNumber=NULL, $PageSize=NULL){
        $Universidades=array();
        $Query="select * from Area;";
        if($SearchString!=NULL){
            $SearchString=str_replace(" ", "%", $SearchString);
            $Query.=" like '%$SearchString%'";
        }
    	  if(!($PageNumber===NULL || $PageSize===NULL)){
            $LimitStart = $PageSize * $PageNumber + 1;
            $PageSize++;
            $Query.="limit $LimitStart, $PageSize";
        }
        $DB=DB::getInstance();
        $Result=$DB->Select($Query);
        $DB->Close();
        foreach($Result as $Row){
            $Universidad=self::UniversityFromVar($Row);
            $Universidades[]=$Universidad;
        }
        return $Universidades;
    }
}
