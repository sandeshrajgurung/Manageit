<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'manageit');

	// initialize variables
	$leaveType = "";
	$leaveFor = "";
    $leaveFrom = "";
    $leaveTo = "";
    $day = "";
    $reason = "";
	$id = 0;
	$update = false;
    $applied_at = '';

	if (isset($_POST['apply'])) {
		$leaveType = $_POST['leaveType'];
		$leaveFor = $_POST['leaveFor'];
        $leaveFrom = $_POST['leaveFrom'];
        $leaveTo = $_POST['leaveTo'];
        $day = $_POST['day'];
        $reason = $_POST['reason'];
        $applied_at = date('Y-m-d H:i:s');
       
		mysqli_query($db, "INSERT INTO application_leave (type, leave_for, leave_from, leave_to, days, reason, applied_at) VALUES ('$leaveType', '$leaveFor', '$leaveFrom', '$leaveTo', '$day', '$reason', '$applied_at')")  or die(mysqli_error($db));
		$_SESSION['message'] = "Leave Applied"; 
		header('location: leaveForm.php');
	}

	if (isset($_POST['add'])) {
		$eventName = $_POST['eventName'];
		$eventFrom = $_POST['eventFrom'];
        $eventTo = $_POST['eventTo'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $posted_at = date('Y-m-d H:i:s');
        
      
		mysqli_query($db, "INSERT INTO add_event (event_name, event_from, event_to, location, event_description, posted_on) VALUES ('$eventName', '$eventFrom', '$eventTo', '$location', '$description', '$posted_at')")  or die(mysqli_error($db));
		$_SESSION['message'] = "Notice Added"; 
		header('location: event.php');
	}

	if (isset($_POST['asset'])) {
		$assetType = $_POST['assetType'];
		$givenDate = $_POST['givenDate'];
        $returnDate = $_POST['returnDate'];
        $assetDetail = $_POST['assetDetail'];
       
        $applied_at = date('Y-m-d H:i:s');
        

		mysqli_query($db, "INSERT INTO asset (asset_type, given_date, return_date, detail, applied_at) VALUES ('$assetType', '$givenDate', '$returnDate', '$assetDetail', '$applied_at')")  or die(mysqli_error($db));
		$_SESSION['message'] = "Applied for asset successfully"; 
		header('location: asset.php');
	}
	if (isset($_POST['add_notice'])) {
		$noticeTitle = $_POST['noticeTitle'];
		$noticeDescription = $_POST['noticeDescription'];
       
        $posted_at = date('Y-m-d H:i:s');
        

		mysqli_query($db, "INSERT INTO add_notice (title, description, posted_at) VALUES ('$noticeTitle', '$noticeDescription', '$posted_at')")  or die(mysqli_error($db));
		$_SESSION['message'] = "Applied for asset successfully"; 
		header('location: notice.php');
	}
	if (isset($_POST['readView'])) {
		$id = $_POST['id'];
		$read_type = $_POST['read_type'];
		mysqli_query($db, "
		UPDATE application_leave
		SET read_type = '$read_type'
		WHERE id = '$id'");
	}
	if (isset($_POST['approve']) || isset($_POST['disapprove'])) {
		$id = $_POST['id'];
		$approval = $_POST['approval'];
		mysqli_query($db, "
		UPDATE application_leave
		SET approval = '$approval'
		WHERE id = '$id'");
	}
	if (isset($_POST['project_submit'])) {
		$projectName = $_POST['projectName'];
		$manager = $_POST['manager'];
		$startDate = $_POST['startDate'];
		$endDate = $_POST['endDate'];
		$member = $_POST['member'];
		$joined = $_POST['joined'];
        
		mysqli_query($db, "INSERT INTO projects (project_name, project_manager, start_date, end_date, members, joined_at) VALUES ('$projectName', '$manager', '$startDate', '$endDate', '$member', '$joined')")  or die(mysqli_error($db));
		$_SESSION['message'] = "Project Added"; 
		header('location: project.php');
	}
