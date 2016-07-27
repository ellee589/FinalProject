<?php
/**
 * Created by IntelliJ IDEA.
 * User: oscar
 * Date: 26/07/16
 * Time: 02:14 PM
 */
class University implements JsonSerializable  {
    private $UniversityId = NULL;
    private $Responsable=NULL;
    private $UniversityName = NULL;
    private $Area=NULL;
    private $Carrera=NULL;
    private $Plan=NULL;
    private $Duracion=NULL;
    private $Modalidad=NULL;
    private $Titulacion=NULL;
    private $Becas=NULL;
    private $Costo=NULL;
    private $Direccion=NULL;
    private $Municipio=NULL;
    private $Estado=NULL;
    private $Correo=NULL;
    private $Telefono=NULL;
    private $Pagina=NULL;

    public function getUniversityId() {
        return $this->UniversityId;
    }

    public function setUniversityId($UniversityId) {
        $this->UniversityId = $UniversityId;
    }

    public function getUniversityName() {
        return $this->UniversityName;
    }

    public function setUniversityName($UniversityName) {
        $this->UniversityName = $UniversityName;
    }

    public function getResponsable() {
        return $this->Responsable;
    }

    public function getArea() {
        return $this->Area;
    }

    public function getCarrera() {
        return $this->Carrera;
    }

    public function getPlan() {
        return $this->Plan;
    }

    public function getDuracion() {
        return $this->Duracion;
    }

    public function getModalidad() {
        return $this->Modalidad;
    }

    public function getTitulacion() {
        return $this->Titulacion;
    }

    public function getBecas() {
        return $this->Becas;
    }

    public function getCosto() {
        return $this->Costo;
    }

    public function getDireccion() {
        return $this->Direccion;
    }

    public function getMunicipio() {
        return $this->Municipio;
    }

    public function getEstado() {
        return $this->Estado;
    }

    public function getCorreo() {
        return $this->Correo;
    }

    public function getTelefono() {
        return $this->Telefono;
    }

    public function getPagina() {
        return $this->Pagina;
    }

    public function setResponsable($Responsable) {
        $this->Responsable = $Responsable;
    }

    public function setArea($Area) {
        $this->Area = $Area;
    }

    public function setCarrera($Carrera) {
        $this->Carrera = $Carrera;
    }

    public function setPlan($Plan) {
        $this->Plan = $Plan;
    }

    public function setDuracion($Duracion) {
        $this->Duracion = $Duracion;
    }

    public function setModalidad($Modalidad) {
        $this->Modalidad = $Modalidad;
    }

    public function setTitulacion($Titulacion) {
        $this->Titulacion = $Titulacion;
    }

    public function setBecas($Becas) {
        $this->Becas = $Becas;
    }

    public function setCosto($Costo) {
        $this->Costo = $Costo;
    }

    public function setDireccion($Direccion) {
        $this->Direccion = $Direccion;
    }

    public function setMunicipio($Municipio) {
        $this->Municipio = $Municipio;
    }

    public function setEstado($Estado) {
        $this->Estado = $Estado;
    }

    public function setCorreo($Correo) {
        $this->Correo = $Correo;
    }

    public function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    public function setPagina($Pagina) {
        $this->Pagina = $Pagina;
    }

        
    public function jsonSerialize() {
        return get_object_vars($this);
    }

}