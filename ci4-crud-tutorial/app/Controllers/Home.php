<?php

namespace App\Controllers;
use App\Controllers\BaseController;

use App\Models\UsersModel;

class Home extends BaseController
{

	public function index()
	{
		$db = new UsersModel();

		$data['custom'] = $db->findAll();


		return view('anasayfa', $data);
	}

	public function addCustomer()
	{
		if ($this->request->getMethod() == 'post') {
			//add to customer in database
			$db = new UsersModel();
			
			$data = [
				'first_name' => $this->request->getPost('first_name'),
				'last_name' => $this->request->getPost('last_name'),
				'email' => $this->request->getPost('email'),
				'phone' => $this->request->getPost('phone'),
				'designation' => $this->request->getPost('designation')
				
			];
			$db->save($data);
			return redirect()->to('/');
			
		
		}else{
			return view('addCustomer');
		}
		
	}

	// EDIT TO CUSTOMER 

	public function edit($id = null)
	{
		$db = new UsersModel();
		if ($this->request->getMethod() == 'post') {
			// edit to customer
			$data = [
				'first_name' => $this->request->getPost('first_name'),
				'last_name' => $this->request->getPost('last_name'),
				'email' => $this->request->getPost('email'),
				'phone' => $this->request->getPost('phone'),
				'designation' => $this->request->getPost('designation')
			];

			$update = $db->update($id, $data);
			if ($update) {
				return redirect()->to('/');
			}



		}else{	
			$data['custom'] = $db->find($id);
			return view('edit', $data);
			
		}
	}

	public function delete($id = null)
	{
		// delete 
		// if ($this->request->getMethod() == 'post') {
			# code...
			if (!is_null($id)) {
				# code...
				$db = new UsersModel();
				$delete = $db->delete($id);
				if ($delete) {
					# code...
					return redirect()->to('/');
				}else{
					echo 'işlem başarısız';
				}
	
			}else{
				return redirect()->to('/');
			}
		// }else{
		// 	return redirect()->to('/');
		// }

	}
	
}
