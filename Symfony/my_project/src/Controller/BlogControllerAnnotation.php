<?php
    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    
    use Symfony\Component\Routing\Annotation\Route;

    use Symfony\Component\HttpFoundation\Response;
    
    class BlogControllerAnnotation extends AbstractController{
    
        /**
        * @Route("/blog/{page}", name="blog_list",  requirements={"page"="\d+"})
        */
        public function list($page = 1){
            

            $content = "<ul>";

            for($i = 1; $i <= 10; $i++){

                $content .= "<li>Entrada $i </li>";

            }

            $content .= "</ul>";

                return new Response(

                    "<html><body>$content</body></html>"

                );    
        }
    

        /**

    * @Route("/blog/{entryName}/{entryId}", name="blog_show_by_id")

    */

    public function showById($entryId)

    {

        return new Response(

            '<html><body>Entrada ' . $entryId . '</body></html>'

        );

    }

        
    }