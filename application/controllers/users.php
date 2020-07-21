<?php

class Users extends CI_Controller
{
	
//    public function show($user_id)
//    {
	   
	// //    $this->load->model("user_model");
	//   $data['results'] = $this->user_model->get_users($user_id,'admin');

  
	//     // $data['Welcome']="Welcome to Codeigniter";

	//    $this->load->view('user_view',$data);


	// //    foreach ($result as $object) {
	// // 	echo $object->username."<br>";

	//    }

	//       // insert data

	//    public function insert()
	//    {

	// 	 $username ="root";
	// 	 $password ="root";

	// 	 $this->user_model->create_user([
	// 		 'username' => $username,
	// 		 'password' => $password,
	// 	 ]);
    //    }
	   
	//    // update data

	//    public function update()
	//    {
	// 	   $id=4;
	// 	   $username="aa";
	// 	   $password="asdas";

	// 	   $this->user_model->update_user([

	// 		  'username'=> $username,
	// 		  'password'=> $password,


	// 	   ],$id);
		   
	//    }
	   
	//  
	//   {
	// 	  $id=4;

	// 	  $this->user_model->delete($id);
       

	//   }

 
		 // Register section
		 
		 public function register(){
			$this->form_validation->set_rules('first_name','First Name','trim|required|min_length[3]');
			$this->form_validation->set_rules('last_name','Last Name','trim|required|min_length[3]');
			$this->form_validation->set_rules('email','Email','trim|required|min_length[3]');
			$this->form_validation->set_rules('first_name','First Name','trim|required|min_length[3]');
			$this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
	        $this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
	        $this->form_validation->set_rules('conform_password','Conform_Password','trim|required|min_length[3]|matches[password]');
	  
			

			if($this->form_validation->run()== FALSE)
			{
			$data['main_view']=  "users/register_view";
			$this->load->view('layouts/main',$data);
			
		}else
		{

		  if($this->user_model->create_user())
		  {

           $this->session->set_flashdata('user_register','User has been Register');

		  redirect('home/index');

		}
		else{





		}
    }


		 }




//Login section


public function login()
{
	$this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
	$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
	//$this->form_validation->set_rules('conform_password','Conform_Password','trim|required|min_length[3]|matches[password]');
	
	if ($this->form_validation->run() == FALSE) 
	{
			$data = array(
				
				'errors'=> validation_errors()
		 );

			$this->session->set_flashdata($data);	
			redirect('home');
	}
	else{

		 $username = $this->input->post('username');
		 $password = $this->input->post('password');

		 $user_id = $this->user_model->login_user($username,$password);
  
		  if($user_id)
		  {
			  $user_data = array( 
				  'user_id' => $user_id,
				  'username' => $username,
				  'logged_in' => true);
			  
			  $this->session->set_userdata($user_data);
			  $this->session->set_flashdata('login_success','you are now login');
			
			//   $data['main_view']=  "admin_view.php";
	        //  $this->load->view('layouts/main',$data);
			redirect('home/index');
		  }
		  else
		  {
			  $this->session->set_flashdata('login_failed','sorry you are not login');
			  redirect('home/index');
		  }
 


	}
	
	}
// echo $this->input->post('Username');

        // Logout section

                   public function logout(){

                           $this->session->sess_destroy();
                            redirect('home/index');


				  }
				  
		//  Upload a file  and add a profile image
		

		//  public function upload(){
			
		// 	$this->session->userdata('logged_in');

		// 	$config['upload_path']          = './uploads/';
		// 	$config['allowed_types']        = 'gif|jpg|png';
		// 	$config['max_size']             = 500;
		// 	// $config['max_width']            = 1024;
		// 	// $config['max_height']           = 768;

		// 	$this->load->library('upload', $config);

		// 	$data['error'] = "";

		// 	        if ( ! $this->upload->do_upload('userfile'))
		// 	        {
        //             if(isset($_FILES['userfile'])){

		// 			     $data['error'] = $this->upload->display_errors();	 
		// 			  }
				   
		// 			  $data['title'] = "File Upload";

		// 	             $this->load->view('users/upload', $data);
		//           	}
        //               else
		// 	               {

		// 					 $user_id = $this->session->userdata('id');

        //                      $uploaddata = $this->upload->data();

        //                      $filename = $uploaddata['file_name'];

        //                      $userdata = array(
        //                                            'profile_photo' => $filename
		// 	                                  );

		// 			        $this->user_model->update_file($user_id , $userdata);

        //                     $this->session->set_flashdata('message', 'Update sucessfuly');

        //                     redirect('home/index');

		// 		}
	    //     }


			 
		}



	


?>
