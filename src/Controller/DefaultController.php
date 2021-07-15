<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use \Pimcore\Model\DataObject\ProductCategory;

class DefaultController extends FrontendController
{
    /**
     * @Template
     * @param Request $request
     * @return array
     */
    public function defaultAction(Request $request)
    {
        return [];
    }

    /**
     * @Route("/service")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function academyAction() {

        $products = [];

        $productList = Factory::getInstance()->getIndexService()->getProductListForTenant('default');
        //$productList->setCategory(ProductCategory::getById(5));

        foreach($productList as $product) {
            $products[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'price' => $product->getPrice(),
                'text' => $product->getText(),
            ];
        }

        return $this->json($products);

    }
}
