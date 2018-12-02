<?php

function groupByOwners (array $arr) {
/*	verifier que l'array ne soit pas vide
			*/
if ($arr==null) {
        return null;
    }
/*	inversion du contenu clé -> val
			*/
    else {
  $ret = array();
  foreach ($arr as $key => $value) {
     if (isset($ret[$value]))
       $ret[$value] .= ",{$key}";
     else
       $ret[$value] = $key;
  }
  return $ret;}









?>