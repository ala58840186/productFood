<?php 
namespace App\Test\Entity ;
use App\Entity\Product ;
use PHPUnit\Framework\TestCase;
class ProductTest extends TestCase {
    public function testDefault(){
        $product=new Product('pomme','food',1.0);
        $this->assertSame(0.055,$product->computeTVA());
    }
    public function testDefault1(){
        $product1=new Product('pomme','fruit',1.0);
        $this->assertSame(0.196,$product1->computeTVA());
    }
    public function testInvalidePrice(){
        $p=new Product('pommme','fruits',-1.0);
        $this->expectException('Exception');
        $p->computeTVA();
    }
   
    
    /**
     * @dataProvider pricesForFood
     */
    public function testPrice($prix, $tva)
    {
        $p4 = new Product('produit', 'food', $prix);
        $this->assertSame($tva, $p4->computeTVA());
    }
    public function pricesForFood()
    {
        return [[0.0, 0.0], [1.0, 0.055], [10.0, 0.55], [20.0, 1.1]];
    }
    
   

}

