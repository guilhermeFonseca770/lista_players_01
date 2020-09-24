<?php  

	class usuario
	{
		private $_id;
		private $_nome;
		private $_email;
		private $_senha;
		private $_sexo;

		//----ID----//

		public function setId ($_i)
		{
			$this -> _id = $_i;
		}

		public function getId()
		{
			return $this -> _id;
		}


		//----NOME----//

		public function setNome ($_n)
		{
			$this -> _nome = $_n;
		}

        public function getNome()
        {
        	return $this -> _nome;
        }


        //----EMAIL----//

		public function setEmail ($_e)
		{
			$this -> _email = $_e;
		}

        public function getEmail()
        {
        	return $this -> _email;
        }



         //----SENHA----//

		public function setSenha ($_s)
		{
			$this -> _senha = $_s;
		}

        public function getSenha()
        {
        	return $this -> _senha;
        }


         //----SEXO----//

		public function setSexo ($_sex)
		{
			$this -> _sexo = $_sex;
		}

        public function getSexo()
        {
        	return $this -> _sexo;
        }


        //----CONSTRUTOR----//

        function __construct($i = 0, $n ="", $e = "" , $s = "", $sex = "")
        {
        	$this -> setId($i);
        	$this -> setNome($n);
        	$this -> setEmail($e);
        	$this -> setSenha($s);
        	$this -> setSexo($sex);
        }
	}

	$u = new usuario (23, "", "", "", "");
 	echo $u ->getId();
	echo $u ->getNome();
	echo $u ->getEmail();
	echo $u ->getSenha();
	echo $u ->getSexo();
   ?>