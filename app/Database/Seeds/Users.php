<?php namespace App\Database\Seeds;


class Users extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = array(
            "username" => "smhnaqvi",
            "password" => password_hash("smhnaqvi", PASSWORD_DEFAULT),
            "full_name" => "hussain naqvi",
            "avatar" => "https://avatars1.githubusercontent.com/u/22330581?s=200&u=76bcc1cbd6f3d16fc356822ccff219796765b990&v=4",
            "is_active" => 0,
            "created_at" => date("Y-m-d H:i:s"),
        );
        $this->db->table("users")->insert($data);
    }
}