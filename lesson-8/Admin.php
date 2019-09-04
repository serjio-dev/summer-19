<?php

class Admin extends Users
{
    public function setNik(string $nik)
    {
        $this->nik = $nik;
        $this->name = $nik;
        //$this->type = $nik;
    }

    public function getNik()
    {
        return $this->nik;
    }

    public function isActive()
    {
        return true;
    }
}