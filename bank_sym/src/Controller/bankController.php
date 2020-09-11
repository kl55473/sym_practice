<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//class bankController
class bankController extends AbstractController
{
    /**
    * @Route("/")
    */
    public function homepage(){

        $number=random_int(1,100);
        //return new Response('welcome '.$number);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
 
    }

    /**
     * @Route("/welcome")
     */

    public function show(){
        return new Response('hello qq');
    }

    /**
     * @Route("/welcome/{id}")
     */

    public function test($id){

        return new Response(sprintf(
            'hello qq %d',$id
        ));
    }

    /**
     * @Route("/welcome2/{word}")
     */
    public function test2($word){
        return new Response(sprintf(
            'hello qq %s',ucwords(str_replace('-',' ',$word))//ucwords-將文字的第一個字母大寫//str_replace-將變數裡的第一元素換成第二元素
        ));
    }

    /**
     * @Route("/lucky/number")
     */
    public function number(){

        //dd($this);
        $number=random_int(1,100);
        $answers = ['a b c d e f ','g h i j k l', 'm n o p q r s t u v w x y z', 'A B C D E F',];
        return $this->render('lucky/number.html.twig',[
            'number'=>$number,
            'answers'=>$answers,
        ]);
    }

     
}
?>