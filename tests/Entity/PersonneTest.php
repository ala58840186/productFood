<?php 
namespace App\Test\Entity ;
use App\Entity\Personne ;
use PHPUnit\Framework\TestCase;
class PersonnetTest extends TestCase {
    public function testMineur(){
        $personne=new Personne('nom','prenom',16);
        $this->assertSame('mineur',$personne->categorie());
    }
    public function testInvalideAge(){
        $p1=new Personne('nomm','prenomm',-1);
        $this->expectException('Exception');
        
        $p1->categorie();
    }
    
    public function ageForTest()
    {
       // return [[1, 'mineur'], [2, 'mineur'], [3, 'mineur'], [4, 'mineur']];
       $tab = [];
       for ($i = 0; $i < 18; $i++) {
           $tab[] = [$i, 'mineur'];
       }
       return $tab;
    }
    
    /**
     * @dataProvider ageForTest
     */
    public function testPrice($age, $lg)
    {

        $p5=new Personne('nomm','prenomm',$age);
        $this->assertSame($lg, $p5->categorie());
    }
    
    
    }