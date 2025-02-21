<?php
abstract class AbstractController {
    //ATTRIBUTS
    private ViewFooter $footer;
    private ViewHeader $header;
    private InterfaceModel $model;

    //CONSTRUCTEUR
    public function __construct(ViewFooter $footer, ViewHeader $header, InterfaceModel $model) {
        $this->footer = $footer;
        $this->header = $header;
        $this->model = $model;
    }

    //GETTER & SETTER
    public function getFooter(): ViewFooter {
        return $this->footer;
    }
    public function getHeader(): ViewHeader {
        return $this->header;
    }
    public function getModel(): InterfaceModel {
        return $this->model;
    }
    public function setFooter(ViewFooter $footer): AbstractController {
        $this->footer = $footer;
        return $this;
    }
    public function setHeader(ViewHeader $header): AbstractController {
        $this->header = $header;
        return $this;
    }
    public function setModel(InterfaceModel $model): AbstractController {
        $this->model = $model;
        return $this;
    }

    //METHODE
    public abstract function render():void;
}