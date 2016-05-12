<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class CaptchaForm extends CFormModel
{
	public $nombre;
	public $apellido;
	public $email;
	public $telefono;
	public $empresa;
	public $cargo;
	public $direccion;
	public $departamento;
	public $mensaje;
	public $verifyCode;
	

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('nombre, email,mensaje', 'required'),
			// password needs to be authenticated
			array('apellido,telefono,empresa,cargo,direccion,departamento', 'safe'),
			array('verifyCode', 'CaptchaExtendedValidator', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	
}
