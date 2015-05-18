<?php

/**
 * 
 * @author RônaldSena
 * 
 */
require_once './Conexao.php';

$pdo = new Conexao();

$sql = "SELECT * FROM 'TABLE'";     // replaces the table for an existing in your database
$search = $pdo->prepare($sql);
$search->execute();

foreach ($search as $dados) {
    echo $dados->Table_field_name;  // replace the table field by a valid field in your table
    echo '<br/>';
}