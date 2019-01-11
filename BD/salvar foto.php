public function saveMarca($a){
        $dto = $this->setAttributes($a);
        $img = RequestUtil::getFile();
        $nome = explode(".", $img['name']['CaractVeiculo.foto']);
        $posicao = count($nome) - 1;
        $newName = date("ymdhmi").".".$nome[$posicao];
        $dto->setFoto($newName);
        move_uploaded_file($img['tmp_name']['CaractVeiculo.foto'],"img/carregadas/".$newName);
        $dto->save();
        header('location: Pages/CaractVeiculo/');
    }