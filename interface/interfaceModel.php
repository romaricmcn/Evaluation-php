<?php
interface InterfaceModel{
    public function displayView():string;
    public function add():string;
    public function getAll():array|null;
}