<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once('./application/libraries/REST_Controller.php');

/**
 * Employees API controller
 *
 * Validation is missign
 */
class Employees extends REST_Controller {

	public function __construct()
	{
	    parent::__construct();

	    $this->load->model('employee_model');
	}

	public function index_get($id = 1)
	{
		$this->response($this->employee_model->get_all());
	}

	public function edit_get($id = NULL)
	{
		if ( ! $id)
		{
			$this->response(array('status' => false, 'error_message' => 'No ID was provided.'), 400);
		}

		$this->response($this->employee_model->get($id));
	}

	public function save_post($id = NULL)
	{
		if ( ! $id)
		{
			$new_id = $this->employee_model->add($this->post());
			$this->response(array('status' => true, 'id' => $new_id, 'message' => sprintf('Employee #%d has been created.', $new_id)), 200);
		}
		else
		{
			$this->employee_model->update($id, $this->post());
			$this->response(array('status' => true, 'message' => sprintf('Employee #%d has been updated.', $id)), 200);
		}
	}

	public function remove_delete($id = NULL)
	{
		if ($this->employee_model->delete($id))
		{
			$this->response(array('status' => true, 'message' => sprintf('Employee #%d has been deleted.', $id)), 200);
		}
		else
		{
			$this->response(array('status' => false, 'error_message' => 'This employee does not exist!'), 404);
		}
	}

}

/* End of file employees.php */
/* Location: ./application/controllers/api/employees.php */