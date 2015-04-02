<?php
namespace MenuBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(RequestStack $requestStack)
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Home', array('route' => 'menu_homepage'));

        $menu->addChild('About', array('route' => 'menu_about'));
        $menu->addChild('Message', array('route' => 'menu_message'));
        $menu->addChild('Test', array('route' => 'menu_lastQuestion'));
        // ... add more children

        return $menu;
    }

    public function createSidebarMenu(RequestStack $requestStack)
    {
        $menu = $this->factory->createItem('sidebar');

        $menu->addChild('dsaddsdddds0');
        // ... add more children

        return $menu;
    }
}