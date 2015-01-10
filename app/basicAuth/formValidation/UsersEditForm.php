<?php namespace basicAuth\formValidation;

use Laracasts\Validation\FormValidator;

class UsersEditForm extends FormValidator {

  /**
   * @var array
   */
  protected $rules =
    [
    'first_name' => 'required',
    'last_name' => 'required',
    'employee_id'=> 'required|numeric',
    'radio' => 'required|numeric',
    'email' => 'required|email|unique:users',
    'password' => 'confirmed|min:6',
    ];


  /**
   * @param int $id
   */
  public function excludeUserId($id)
  {
    $this->rules['email'] = "required|email|unique:users,email,$id";

    return $this;
  }



}


