<?php
require_once './db.php';
class Report
{


    private $conn;

    public function __construct()
    {
        $database = new Connection();
        $this->conn = $database->connect();
        return $this->conn;
    }


    private function addReport($volume_id, $report_title, $report_summary, $report_highlights, $report_this_issue, $report_date, $report_description, $report_authors)
    {

        $report_modify_date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO gwer_report(`Volume_id`,`Report_title`,`Report_summary`,`Report_highlights`,`Report_this_issue`,`Report_date`,`Report_description`,`Report_authors`, `Report_modify_date`) VALUES(?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute([$volume_id, $report_title, $report_summary, $report_highlights, $report_this_issue, $report_date, $report_description, $report_authors, $report_modify_date]);
        if ($success) {
            echo "Report Saved";
        } else {
            echo "An unexpected error occured...try again";
        }
    }

    public function executeAddReport($volume_id, $report_title, $report_summary, $report_highlights, $report_this_issue, $report_date, $report_description, $report_authors)
    {
        return $this->addReport($volume_id, $report_title, $report_summary, $report_highlights, $report_this_issue, $report_date, $report_description, $report_authors);
    }
}
