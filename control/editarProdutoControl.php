<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        session_start();
        include_once ('../imports.php');

        $id_produto = $_POST['id_produto'];
        $nome_produto = $_POST['nome_produto'];
        $detalhes = $_POST['descricao'];
        $categoria = $_POST['categoria'];
        $marca = $_POST['marca'];
        $file = $_FILES['arquivo']['name'];
        
        $serializado = $_SESSION['usuario'];
        $usuario = unserialize($serializado);
        
        $produto = new Produto($id_produto);

        $fachada = Fachada::getInstance();
        $produto = $fachada->pesquisarProduto($produto);
        
        $produto->setNome_produto($nome_produto);
        $produto->setDetalhes($detalhes);
        $produto->setCategoria($categoria);
        $produto->setMarca($marca);
        
        

        if(!empty($file)){
            //Pasta onde o arquivo vai ser salvo
            $_UP['pasta'] = '../images/upload/';

            // Tamanho máximo do arquivo (em Kbits)

            $_UP['tamanho'] = 1024 * 1024 * 2; //MB

            //Array com as extensões permitidas
            $_UP['extensoes'] =  array ('jpg','png','gif');

            //Renomeia o arquio? (Se true, o arquivo será salvo com. jpg e um ome único)
            $_UP['renomeia'] = true;

            //Array com os tipos de erros de upload do PHP
            $_UP['erros'][0]='Não houve erro';
            $_UP['erros'][1] = 'O arquivo no upload é maior que o limite do php';
            $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no html';
            $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
            $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

            //Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
            if($_FILES['arquivo']['error'] != 0){
                die("Não foi possivel fazer o upload, erro:<br/>".$_UP['erros'][$_FILES['arquivo']['error']]);
                exit();// Para a execução do script
            }
            //Caso script chegue a esse ponto, não houve erro com o upoad e o php
            // Faz a verificação da extensão do arquivo
            $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
            if (array_search($extensao, $_UP['extensoes']) === false) {
              echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
            }

            // Faz a verificação do tamanho do arquivo
            else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
              echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
            }
            // O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
            else {
            // Primeiro verifica se deve trocar o nome do arquivo
              if ($_UP['renomeia'] == true) {
              // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
                  if(!empty ($extensao)){
                      $nome_imagem = time().'.'.$extensao;
              }

              $nome_imagem = time().'.jpg';
              } else {
                // Mantém o nome original do arquivo
                $nome_imagem = $_FILES['arquivo']['name'];
                
              }

              // Depois verifica se é possível mover o arquivo para a pasta escolhida
              if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_imagem)) {
                // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
                // echo "Upload efetuado com sucesso!";
                // echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
              } else {
                // Não foi possível fazer o upload, provavelmente a pasta está incorreta
                $mensgem = "Não foi possível enviar o arquivo, tente novamente";
              }
            }
            $produto->setImagem($nome_imagem);
        }

          $fachada->editarProduto($produto);

          header('Location: ../detalharProduto.php?id_produto='.$id_produto);