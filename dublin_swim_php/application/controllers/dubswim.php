<?php
//extending the existing standard controller class supplied by CodeIgniter.
//Controllers manage input and output of other files in the MVC framework. 
class Dubswim extends CI_Controller{
//The first function used to grab Database details regarding DART Travel
	function useDart()
	{
//Using Codeigniters load instance & calling the model class thats in the model php file.
	$this->load->model('Dubswim_model');
/*accessing the function in the model class and storing it into an array
with a single key*/
	$data['swim'] = $this->Dubswim_model->travel();
/*Setting up a standard warning 404 display if anything goes wrong when accessing
the database from the Model class*/
	if (!$data['swim']) show_404();
//Loading the view file and passing the data variable created above
    $this->load->view('Dubswim_view', $data);
	}
/*Repeats what was done to the function above except accessing another function 
	from the model class*/
	function bestTide()
	{
	$this->load->model('Dubswim_model');
	$data['swim'] = $this->Dubswim_model->tide();
	if (!$data['swim']) show_404();
    $this->load->view('Dubswim_view', $data);
	}

}
/*references for function content:
PHP CodeIgniter Tutorial 2 - Models / Database by Creativitytuts https://www.youtube.com/watch?v=IOZqRgOgSu4
&
Return JSON with CodeIgniter by Mike Robbins http://rogue-systems.com/2013/01/return-json-with-codeigniter/
*/
?>