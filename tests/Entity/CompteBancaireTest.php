<?php 
namespace App\Test\Entity ;
use App\Entity\CompteBancaire ;
use PHPUnit\Framework\TestCase;
class CompteBancaireTest extends TestCase {
    
    public function testInvalideMontant(){

        $p2=new CompteBancaire('prenomm',60);
        $this->expectException('Exception');
        $p2->retirer(90);
    }
    public function test(){
        $p3=new CompteBancaire('nommm',1000.0);
        $this->assertSame(900.0,$p3->retirer(100.0));

    }
    


    
    }