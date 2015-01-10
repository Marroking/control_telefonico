<?php namespace basicAuth\formValidation;

use Laracasts\Validation\FormValidator;

class AdminUsersEditForm extends FormValidator {

  /**
   * @var array
   */
  protected $rules =
    [
    'employee_id' => 'required|numeric',
    'email' => 'required|email',
    'password' => 'confirmed',
    'first_name' => 'required',
    'last_name' => 'required',
    'radio' => 'required|numeric',
    'cost_center_id' => 'required',
    'department_id' => 'required',
    'cellphone_id' => 'required'
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


