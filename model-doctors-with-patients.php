<?php
function selectDoctors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT doctor_id, doctor_name, doctor_area FROM `doctor` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPatientsByDoctor($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT treatment_id, t.doctor_id, p.patient_id, patient_name, patient_description, treatment_name, treatment_startdate, treatment_enddate FROM patient p JOIN treatment t ON t.patient_id = p.patient_id WHERE t.doctor_id = ?");
        $stmt->bind_param("i", $did);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function selectDoctorsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT doctor_id, doctor_name FROM `doctor` order by doctor_name ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPatientForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT patient_id, patient_name FROM `patient` order by course_name ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteDoctorWithPatients($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Delete from treatment where treatment_id=? ");
        $stmt->bind_param("i", $tid);
        $stmt->execute();
        $success = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateDoctorWithPatients($tid, $did, $pid, $treatment_name, $sDate, $eDate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `treatment` set `treatment_name`=?, `doctor_id` = ?,  `treatment_startdate` = ?, `treatment_enddate` = ? where treatment_id=?");
        $stmt->bind_param("sissi", $treatment_name, $did, $sDate, $eDate, $tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function insertDoctorWithPatients( $did, $pid, $treatment_name, $sDate, $eDate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `treatment` ( `doctor_id`, `patient_id`, `treatment_name`, `treatment_startdate`, `treatment_enddate`) VALUES (?, ?, ?, ?, ?);");
        $stmt->bind_param("iisdd",  $did, $pid,$treatment_name, $sDate, $eDate);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
