<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 25/03/2020
 * Time: 16:51
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializationContext;
use Symfony\Component\DependencyInjection\ContainerAware;



class ArticleController
{

    /**
     * @Route("/articles", name="article_create")
     * @Method({"POST"})
     */
    public function createAction(Request $request){


        $data = $request->getContent();
        $article = $this->get('jms_serializer')
            ->dezerialize($data,'AppBunble\Entity\Article', 'json');
        dump($article); die;
        /*
                $serializer = JMS\Serializer\SerializerBuilder::create()->build();
                $serializer->serialize($object, 'json');

                $data = $request->getContent();
                $serializer = JMS\Serializer\SerializerBuilder::create()->build();
                $article = $serializer->deserialize($data,'MyNamespace\MyObject', 'json');
                dump($article); die;
                */
    }
}