<?php
function selectPatients() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT patient_id, patient_name, patient_description FROM `patient` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertPatients($pName, $pDescription) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `patient` (`patient_name`, `patient_description`) VALUES (?,?)");
        $stmt->bind_param("ss", $pName, $pDescription);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePatients($pName, $pDescription, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `patient`set `patient_name`=?, `patient_description` = ? where patient_id=?");
        $stmt->bind_param("ssi", $pName, $pDescription, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePatients($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from patient where patient_id=?");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
