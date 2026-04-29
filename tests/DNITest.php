<?php
use PHPUnit\Framework\TestCase;
use App\DNI;

class DNITest extends TestCase {

public function testGetDNIConLetra(){

    $dni =new DNI(12345678);
    $this->assertEquals('12345678Z' , $dni->getDNIConLetra());//primer parametro es el resultado que esperamos y el segundo es a la funcion que llamamos para obterlo

}

}