<?php
	session_start();
	include 'config.php';

	$update=false;
	$id="";
	$product_name="";
	$product_price="";
	$product_code="";
	$product_photo="";

	if(isset($_POST['add'])){
		$product_name=$_POST['product_name'];
		$product_price=$_POST['product_price'];
		$product_code=$_POST['product_code'];

		$product_image=$_FILES['product_image']['product_name'];
		$upload="uploads/".$product_image;

		$query="INSERT INTO charlottefolk_product(product_name,product_price,product_code,product_image)VALUES(?,?,?,?)";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssss",$product_name,$product_price,$product_code,$upload);
		$stmt->execute();
		move_uploaded_file($_FILES['product_image']['tmp_name'], $upload);

		header('location:index.php');
		$_SESSION['response']="Successfully Inserted to the database!";
		$_SESSION['res_type']="success";
	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

		$sql="SELECT product_image FROM charlottefolk_product WHERE id=?";
		$stmt2=$conn->prepare($sql);
		$stmt2->bind_param("i",$id);
		$stmt2->execute();
		$result2=$stmt2->get_result();
		$row=$result2->fetch_assoc();

		$imagepath=$row['product_image'];
		unlink($imagepath);

		$query="DELETE FROM charlottefolk_product WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:index.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT * FROM charlottefolk_product WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$product_name=$row['product_name'];
		$product_price=$row['product_price'];
		$product_code=$row['product_code'];
		$product_image=$row['product_image'];

		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$product_name=$_POST['product_name'];
		$product_price=$_POST['product_price'];
		$product_code=$_POST['product_code'];
		$oldimage=$_POST['oldimage'];

		if(isset($_FILES['product_image']['product_name'])&&($_FILES['product_image']['product_name']!="")){
			$newimage="uploads/".$_FILES['product_image']['product_name'];
			unlink($oldimage);
			move_uploaded_file($_FILES['product_image']['tmp_name'], $newimage);
		}
		else{
			$newimage=$oldimage;
		}
		$query="UPDATE charlottefolk_product SET product_name=?,product_price=?,product_code=?,product_image=? WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssssi",$product_name,$product_price,$product_code,$newimage,$id);
		$stmt->execute();

		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:index.php');
	}

	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT * FROM charlottefolk_product WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$vid=$row['id'];
		$vproduct_name=$row['product_name'];
		$vproduct_price=$row['product_price'];
		$vproduct_code=$row['product_code'];
		$vproduct_image=$row['product_image'];
	}



?>