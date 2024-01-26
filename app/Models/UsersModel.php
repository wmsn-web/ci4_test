<?php 
namespace App\Models;
use CodeIgniter\Model;
class UsersModel extends Model
{
	protected $table = "users";
	protected $allowedFields = ["username", "password", "status"];
	public function getUsers($username)
	{
		$this->where(["username"=>$username, "status"=>1]);
		$data = $this->get()->getRow(); //getResult();
		return $data;
	}
}