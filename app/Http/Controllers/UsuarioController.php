<?php

namespace App\Http\Controllers;

use app\Services\UsuarioService;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    protected $usuarioService;


    public function __construct(UsuarioService $usuarioService){
        $this->usuarioService = $usuarioService;
    }


    /**
     * Exibir Listagem de Usuários
     * @access public
     * @return null
     */
    public function index(){
        dd($this->usuarioService->listarUsuarios());
    }

    /**
     * Criar Novo Usuário
     * @access public
     * @return null
     */
    public function create(){

    }


    /**
     * Gravar Novo Novo Usuário
     * @access public
     * @return null
     */
    public function store(){

    }

    /**
     * Criar Novo Usuário
     * @access public
     * @param int id
     * @return null
     */
    public function edit($id){

    }

    /**
     * Atualizar Usuário
     * @access public
     * @param int id
     * @return null
     */
    public function update($id){

    }

    /**
     * Deletar Usuário
     * @access public
     * @param int id
     * @return null
     */
    public function destroy(){

    }
}
