
<?php 

class auth_model extends CI_Model{

    function _construct()
{

        parent::_construct();
        $this->load->database();
}

    public function register_user(){
        $password=$this->input->post('password');
        $con_password=$this->input->post('con_password');
        
    if($password!=$con_password){
        $this->session->set_flashdata('No Registrado','La contraseña de confirmacion no es coorrecta!');
        redirect('Auth/register');
    }else{   
        $data=array(
            "nombre"=>$this->input->post('name'),
            "correo"=>$this->input->post('email'),
            "contraseña"=>$password
        );
            $this->db->insert('usuario',$data);
            $this->session->set_flashdata('Registrado','Ya puedes acceder en el portal de login!');
            redirect('Auth');
         } 
    }

    public function login_user(){
        $email=$this->input->post('email');
        $password=$this->input->post('password');

        $this->db->where('correo',$email);
        $this->db->where('contraseña',$password);
        $query=$this->db->get('usuario');
        $find_user=$query->num_rows($query);

        if($find_user>0){
            $this->session->set_flashdata('suc','Ya accediste!');
            redirect('welcome');
    }else{
        $this->session->set_flashdata('worng','Tus datos son incorrectos!');
            redirect('Auth');
    }
}
}
?>

