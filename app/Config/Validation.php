<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $register = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
		'repeatPassword'=>[
			'rules' => 'required|matches[password]',
		],
	];

	public $register_errors = [
		'username' => [
			'required' =>'{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
		'repeatPassword'=>[
			'required' => '{field} Harus Diisi',
			'matches' => '{field} Tidak Match Dengan Password'
		],
	];

	public $login = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
	];


	public $login_errors = [
		'username' => [
			'required' =>'{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
	];

	public $mhijau = [
		'nama' => [
			'rules' => 'required|min_length[3]',
		],
		'lahir' => [
			'rules' => 'required|min_length[3]',
		],
		'nohp' => [
			'rules' => 'required|min_length[3]',
		],
		'nisn' => [
			'rules' => 'required|min_length[3]',
		],
		'jenis' => [
			'rules' => 'required|min_length[3]',
		],
		'alamat' => [
			'rules' => 'required|min_length[3]',
		],
		'agama' => [
			'rules' => 'required|min_length[3]',
		],
		'gambar' => [
			'rules' => 'uploaded[gambar]',
		]
	];

	public $mhijau_errors = [
		'nama' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'jenis' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		
		'nohp' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'nisn' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'lahir' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		
		'alamat' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'agama' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'gambar' => [
			'rules' => 'uploaded[gambar]',
		]
	];


	public $mhijauupdate = [
		'nama' => [
			'rules' => 'required|min_length[3]',
		],
		'lahir' => [
			'rules' => 'required|min_length[3]',
		],
		'nohp' => [
			'rules' => 'required|min_length[3]',
		],
		'nisn' => [
			'rules' => 'required|min_length[3]',
		],
		'jenis' => [
			'rules' => 'required|min_length[3]',
		],
		'alamat' => [
			'rules' => 'required|min_length[3]',
		],
		'agama' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $mhijauupdate_errors = [
		'nama' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'jenis' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		
		'nohp' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'nisn' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'lahir' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		
		'alamat' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'agama' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'mtk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'bing' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'status' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

	
	


}