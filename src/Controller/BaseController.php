<?php
/**
 * Created by PhpStorm.
 * User: romariololz
 * Date: 28/11/18
 * Time: 13:43
 */

namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

abstract class BaseController extends AbstractController
{
    protected function getUser(): User
    {
        return parent::getUser();
    }
}