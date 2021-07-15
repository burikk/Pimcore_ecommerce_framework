<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Model\DataObject\Product;
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

    /**
     * @Route("/service/cartadd", name="cartadd")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function addToCartAction(Request $request)
    {
        $product = Product::getById($request->get("id"));
        $cartManager = Factory::getInstance()->getCartManager();
        $cart = $cartManager->getOrCreateCartByName('my-cart');

        $cart->addItem($product, 3);
        $cart->save();

        return $this->redirectToRoute("cartlist");
    }

     /**
     * @Route("/service/cartlist", name="cartlist")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function cartListAction()
    {
        $cartItems = [];
        $cartManager = Factory::getInstance()->getCartManager();
        $cart = $cartManager->getOrCreateCartByName('my-cart');

        foreach ($cart->getItems() as $item) {
            $cartItems[] = [
                'id' => $item->getItemKey(),
                'name' => $item->getProduct()->getName(),
                'count' => $item->getCount(),
                'price' => $item->getProduct()->getPrice(),
            ];
        }

        return $this->json($cartItems);
    }
}
