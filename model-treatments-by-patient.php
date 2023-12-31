<?php
function selectTreatmentsByPatient($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.patient_id, patient_name, patient_description,treatment_name, treatment_startdate, treatment_enddate FROM patient p join treatment t on t.doctor_id=p.patient_id WHERE t.patient_id=?");
        $stmt->bind_param("i", $pid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
