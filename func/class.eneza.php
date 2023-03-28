<?php
class eneza
{
	
	public $servername = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname = "eneza";

	// public $servername = "localhost";
	// public $username = "enezaafr_vic";
	// public $password = "S-0LsY?W2OcT";
	// public $dbname = "enezaafr_eneza";

	function get_vision(){


		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM vision");
		    $stmt->execute();

		    // set the resulting array to associative
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    foreach($stmt->fetchAll() as $k=>$v) {
		        $details = array(
		        					'vision_title' 		=>$v['vision_title'] , 
		        					'vision_statement' 	=>$v['vision_statement'] , 
		        					'mission_title'		=>$v['mission_title'] , 
		        					'mission_statement' =>$v['mission_statement'] , 

		        				);
		    }

		    return $details;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}


	
	function get_team(){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM team");
		    $stmt->execute();

		    // set the resulting array to associative
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    foreach($stmt->fetchAll() as $k=>$v) {
		        $details[] = array(
		        					'name' 		=>$v['name'] , 
		        					'title' 	=>$v['title'] , 
		        					'desc'		=>$v['desc'] , 
		        					'intro' 	=>$v['intro'] , 
		        					'quote' 	=>$v['quote'] , 
		        					'social' 	=>$v['social'] , 
		        					'img' 		=>$v['img'] , 

		        				);
		    }

		    return $details;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}


	function get_gallery(){

		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM gallery");
		    $stmt->execute();

		    // set the resulting array to associative
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    foreach($stmt->fetchAll() as $k=>$v) {
		        $details[] = array(
		        					'img_path' 	=>$v['img_path'] , 
		        					'caption' 	=>$v['caption'] , 
		        					'category' 	=>$v['category'] , 
		        					'id' 	=>$v['id'] , 

		        				);
		    }

		    return $details;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function get_gallery_cat(){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM gallery_categories");
		    $stmt->execute();

		    // set the resulting array to associative
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    foreach($stmt->fetchAll() as $k=>$v) {
		        $details[] = array(
		        					'id' 		=>$v['id'] , 
		        					'category' 	=>$v['category'] , 

		        				);
		    }

		    return $details;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function get_contact(){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM contact_info");
		    $stmt->execute();

		    $row = $stmt->fetch();
		    // set the resulting array to associative
		    // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    // foreach($stmt->fetchAll() as $k=>$v) {
		    //     $details[] = array(
		    //     					'id' 		=>$v['id'] , 
		    //     					'address' 	=>$v['address'] , 
		    //     					'phone' 	=>$v['phone'] , 
		    //     					'facebook' 	=>$v['facebook'] , 
		    //     					'email' 	=>$v['email'] , 
		    //     					'twitter' 	=>$v['twitter'] , 

		    //     				);
		    // }

		    return $row;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function get_blog(){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM blog");
		    $stmt->execute();

		    // set the resulting array to associative
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    foreach($stmt->fetchAll() as $k=>$v) {
		        $details[] = array(
		        					'id' 		=>$v['id'] , 
		        					'title' 	=>$v['title'] , 
		        					'content' 	=>$v['content'] , 
		        					'main_image'=>$v['main_image'] , 
		        					'timestamp' =>$v['timestamp'] , 
		        					'author' 	=>$v['author'] , 
		        					'intro' 	=>$v['intro'] , 
		        					'category' 	=>$v['category'] , 

		        				);
		    }

		    return $details;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}


	function get_single_blog($id){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM blog WHERE id = $id");
		    $stmt->execute();

		    // set the resulting array to associative
		    $row = $stmt->fetch();
		    // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    // foreach($stmt->fetchAll() as $k=>$v) {
		    //     $details[] = array(
		    //     					'id' 		=>$v['id'] , 
		    //     					'title' 	=>$v['title'] , 
		    //     					'content' 	=>$v['content'] , 
		    //     					'main_image'=>$v['main_image'] , 
		    //     					'timestamp' =>$v['timestamp'] , 
		    //     					'author' 	=>$v['author'] , 
		    //     					'intro' 	=>$v['intro'] , 
		    //     					'category' 	=>$v['category'] , 

		    //     				);
		    // }

		    return $row;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function get_about(){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM about LIMIT 1");
		    $stmt->execute();

		    // set the resulting array to associative
		    $row = $stmt->fetch();
		    // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    // foreach($stmt->fetchAll() as $k=>$v) {
		    //     $details[] = array(
		    //     					'id' 		=>$v['id'] , 
		    //     					'title' 	=>$v['title'] , 
		    //     					'content' 	=>$v['content'] , 
		    //     					'main_image'=>$v['main_image'] , 
		    //     					'timestamp' =>$v['timestamp'] , 
		    //     					'author' 	=>$v['author'] , 
		    //     					'intro' 	=>$v['intro'] , 
		    //     					'category' 	=>$v['category'] , 

		    //     				);
		    // }

		    return $row;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}









} // end class
?>