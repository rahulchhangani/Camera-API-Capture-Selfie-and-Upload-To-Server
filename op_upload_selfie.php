require_once("../classes/ServiceReportFactory.class.php");

    $file_path = "../library/appUploadSelfie/";
	$report_id = $_GET['reportid'];
    $file_path = $file_path . basename($_FILES['uploaded_file']['name']);
    move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path);
	
	//insert into database
	$sr_Obj = new ServiceReportFactory();
	$sr_Obj->sr_insertreportselfie($report_id, $file_path);
