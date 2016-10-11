<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace msfidelis\slugMaker\classes;

/**
 * Cria um Slug automático a partir dos dados fornecidos
 * @author Matheus Scarpato Fidelis
 * @email msfidelis01@gmail.com
 * @version $Revision: 1.0
 * @date 31/08/2016
 */
class SlugMaker {

  const PREG_REPLACE = '~[^-\w]+~';
  const SEARCH = ' ';
  const REPLACE = '-';

  /**
   * Constroi um Slug simples
   * @param type $title titulo
   * @return type
   */
  public static function slugFy($title = null) {
    $name = str_replace(self::SEARCH, self::REPLACE, $title);
    $raw = strtolower(preg_replace(self::PREG_REPLACE, '', $name));
    return \Cake\Utility\Inflector::slug($raw);
  }

}
