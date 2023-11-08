<?php
class Datos
{
	private $tbl_medidor;
	private $dbh;

	public function __construct()
	{
		$this->tbl_medidor = array();
		$this->dbh = new PDO('mysql:host=localhost;dbname=bd_cfe', "root", "");
	}

	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}

	public function lista_datos()
	{
		self::set_names();
		$sql="select Idmedidor, Nummedi, Tipomedi, Fechains, Idcliente, FechaUlti, IdFacAct, Marcamedi from tbl_medidor";
		foreach ($this->dbh->query($sql) as $res)
		{
			$this->tbl_medidor[]=$res;
		}
		return $this->tbl_medidor;
		$this->dbh=null;
	}
}
?>