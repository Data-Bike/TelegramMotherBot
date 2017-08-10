<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 * Description of TbmEntity
 *
 * @author admin
 */
abstract class TbmEntity {

    public function __construct(\ArrayAccess $params) {
        foreach ($params as $key => $value) {
            $this->{$key} = $value;
        }
    }

    //put your code here
}
