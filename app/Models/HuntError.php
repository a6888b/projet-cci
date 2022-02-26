<?php 
namespace App\Models; 

// class pour les message d'erruer pour tout ce qui est connexion 
class HuntError {
    public $error = []; 

    public function hunt_error_login(string $pseudo, string $password, string $passwd_bdd): array {
        if(empty($password) || empty($pseudo)){
            $this->error[] = 'Veuillez entrez votre mot de passe et/ou identifiant'; 
        }
        if(! password_verify($password, $passwd_bdd)){
            $this->error[] = 'Votre mot de passe ou identifiant incorrecte'; 
        }
        $this->length_password($password, 8);
        return $this->error; 
    }

    public function forget_password($email, $resp): array {
        if($this->verif_email($email)){
            if(count($resp) === 1){
                return ['success'=>'Un email va vous etre envoyer'];
            }
        } return ["danger"=>'Verifier votre email!'];
    }

    public function hunt_error_create_account(array $post): array {
        $tel = $post['tel']; 
        $email = $post['email']; 
        $password = $post['password']; 
        $confirm_password = $post['Confirm_password']; 
        if(! $this->isAllEmpty($post, 12)){
            $this->error[] = "Veuillez remplire les tout les champs! "; 
        }

        $this->verif_conf_password($password, $confirm_password); 
        $this->length_password($password);
        $this->verif_email($email);
        $this->verif_tel($tel);
        return $this->error; 
    }

    public function verif_conf_password(string $password, string $confPasswd){
        if($password !== $confPasswd){
            $this->error[] ='Veuillez entrez le meme mot de passe!';
        }
    }

    public function length_password(string $password, int $min_length=8) {
        if(strlen($password) < $min_length){
            $this->error[] = 'Veuillez entrez un mot de passe de plus de huit carachtere!'; 
        }
    }

    public function verif_email($email){
        if(! is_string($email) || strpos($email, '@') === false){
            $this->error[] = 'Veuillez entrez un email valide'; 
        }return true; 
    }

    public function verif_tel(string $tel){
        if(! is_numeric($tel)){
            $this->error[] ='Veuillez entrez un numero de telephone valide!';
        }
    }
    public function isAllEmpty(array $arrData, int $mandatory): bool{
        $not_empty = 0; 
        foreach($arrData as $_ =>$values){
            if(! empty($values)){
                $not_empty++; 
            }
        }
        return $not_empty >= $mandatory; 
    }

    public function hunt_edit_profile($data_post): array {
        $password = $data_post['new_password']; 
        $password_confirm = $data_post['new_password_confirm']; 
        $num_tel = $data_post['tel']; 
        $email = $data_post['email'];
        
        if($this->isAllEmpty($data_post, 8)){   // ? le 8, c'est le nombre de champs obligatoire 
            $this->verif_conf_password($password, $password_confirm); 
            $this->verif_tel($num_tel); 
            $this->verif_email($email); 
            if(! empty($password) && ! empty($password_confirm)){ // ?pour verifier si les mot de passe est le confirm passwd sont entrez
                $this->length_password($password);
            }
        }else{
            $this->error[] = 'Veuillez entrez tout les champs'; 
        }
        return $this->error; 
    }

    
    /**
     * @brief Methode qui trouve les erruer liée au televersement d'image de profile
     *  @details 
     *	<p>Cette fonction cherche les erruer lier au televersement d'image de profile</p>
     *  <ul>
     * 	    <li><strong>la taille</strong></li>
     * 	    <li><strong>l'exension</strong></li>
     * 	    <li><strong>regarde si il le fichier est valide</strong></li>
     * </ul>
     * @param  $img
     * @param int $max_length
     * @return array contenant les erruer 
    */
    public function huntUplaodedFile($img, int $max_length, array $white_list): array {
        // si l'extension n'est pas dans la liste blanche 
        if(! in_array($img->getClientExtension(), $white_list)){ 
            $this->error [] = 'Veuillez choisir une image '; 
        }
        // verifie la taille du fichier
        if( $img->getSize() >= MAX_LENGHT_FILE){ 
            $this->error[] = 'Votre image est trop lourdes'; 
        }   
        
        // pour voir si le fichier est valide est qu'il a pas ete deplacer 
        if(! $img->isValid() && $img->hasMoved()){
            $this->error[] = "Veuillez re-entrez l'image ";
        }
        
        return $this->error; 
    }
}