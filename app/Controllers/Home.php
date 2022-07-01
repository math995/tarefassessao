<?php

namespace App\Controllers;
use App\Models\VeiculoModel;
use App\Models\PessoaModel;

class Home extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('home');
        echo view('template/footer');
    }

    public function page($page='home'){
        echo view('template/header');
        echo view($page);
        echo view('template/footer');
    }

    public function veiculo(){
        $model = new VeiculoModel();
        $modelPessoa = new PessoaModel();

        $data = [
            'title'     =>  'Veículos',
            'veiculo'   =>  $model->getVeiculos(),
            'pessoas'   =>  $modelPessoa->getPessoas(),
            'session'   =>  \Config\Services::session()
        ];

        if(!$data['session']->get('logado')){
            return redirect('usuario');
        }

        echo view('template/header');
        echo view('veiculo', $data);
        echo view('template/footer');
    }

    public function cadastro(){
        $model = new PessoaModel();

        if(!$data['session']->get('logado')){
            return redirect('usuario');
        }

        echo view('template/header');
        echo view('login');
        echo view('template/footer');
    }

    public function create(){
        $model = new VeiculoModel();
        $modelPessoa = new PessoaModel();

        $model->save([
            'id'        =>  $this->request->getVar('id'),
            'marca'     =>  $this->request->getVar('marca'),
            'modelo'    =>  $this->request->getVar('modelo'),
            'placa'     =>  $this->request->getVar('placa'),
            'cor'       =>  $this->request->getVar('cor'),
            'pessoas'   =>  $modelPessoa->getPessoas(),
            'session'   =>  \Config\Services::session()
        ]);

        if(!$data['session']->get('logado')){
            return redirect('usuario');
        }

        return redirect("veiculo");
    }

    public function excluir($id = null){
        $model = new VeiculoModel();
        $modelPessoa = new PessoaModel();

        if(!$data['session']->get('logado')){
            return redirect('usuario');
        }

        $model->delete($id);
        return redirect("veiculo");
    }

    public function editar($id = null){
        $model = new VeiculoModel();
        $modelPessoa = new PessoaModel();

        $data = [
            'veiculo'    =>  $model->getVeiculo($id),
            'pessoas'   =>  $modelPessoa->getPessoas(),
            'session'   =>  \Config\Services::session()
        ];

        if(!$data['session']->get('logado')){
            return redirect('usuario');
        }

        echo view('template/header');
        echo view('login', $data);
        echo view('template/footer');
    }

    public function usuario(){
        echo view('template/header');
        echo view('usuario');
        echo view('template/footer');
    }
    
    public function loginPessoa(){
        $model = new PessoaModel();

        $senha = $this->request->getVar("senha");
        $nome = $this->request->getVar("nome");

        $data['usuario'] = $model->userLogin($nome, MD5($senha));
        $data['session'] = \Config\Services::session();

        if(empty($data['usuario'])){
            return redirect('usuario');
        }else{
            $sessionData = [
                'usuario'   => $nome,
                'logado'    => TRUE,
            ];
            $data['session']->set($sessionData);
            return redirect('home');
        }
    }
}

