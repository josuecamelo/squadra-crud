<?php
/**
 * Created by PhpStorm.
 * User: JCamelo
 * Date: 27/05/2018
 * Time: 23:21
 */

namespace app\Services;


interface BaseService
{

    public function criarUsuario($data);
    public function listarUsuarios();
    public function removerUsuario($id);
    public function buscarUsuarioPorId($id);
    public function atualizarUsuario($id, $data);

}