<?php
//extending the existing standard model class supplied by CodeIgniter
//The Model is a Codeigniter class used to interact with Databases
class Dubswim_model extends CI_Model
{
/*First function used to access database entries. The particular database has been clarified
in Codeigniters database.php(lines 51-65) contained in the config folder
To automatically connect with the database the word 'database' has been added to
the library array function on line 55 of the autoload.php file in the config folder.@@ 
Alternatively manual connection within the function could be used
*/
	function travel()
	{
/*creating variable that contains the access to the database(db) function 'query()'
that sends a request to the database*/
	$query = $this->db->query("SELECT Site, BestSwimming FROM bather_test WHERE BestTransport='DART'");
//accessing database result function through the new variable
	return $query->result();	
	}
//same as above
	function tide()
	{
	$query = $this->db->query("SELECT * FROM bather_test WHERE BestSwimming='High & Low Tide'");
	return $query->result();	
	}

}
/* lines 8-10 reference: CodeIgniter Tutorials: Introduction to CodeIgniter - MySQL Database - Connecting (Part 7/11) 
   https://www.youtube.com/watch?v=SSE9mTLWmKs
*/
?>

