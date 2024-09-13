<?php
include 'header.php';
include 'db.php';

class UnfinishedData extends DB
{
    public function getData()
    {
        $sql = "SELECT * FROM journals WHERE has_finished = 0";
        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            die("Error in prepare statement: " . $this->conn->error);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $this->id = $row['id'];
                $this->attendance_list_id = $row['attendance_list_id'];
                $this->has_finished = $row['has_finished'];
                $this->has_acc_head_department = $row['has_acc_head_department'];
                $this->lecturer_id = $row['lecturer_id'];
                $this->course_id = $row['course_id'];
                $this->student_class_id = $row['student_class_id'];
                $this->created_at = $row['created_at'];
                $this->updated_at = $row['updated_at'];
                $this->deleted_at = $row['deleted_at'];

                $this->displayData();
            }
        } else {
            echo "<div class='alert alert-warning'>No unfinished journals found.</div>";
        }
    }

    public function displayData()
    {
        echo '
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Unfinished Journal ID: ' . $this->id . '</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Attendance List ID:</strong> ' . $this->attendance_list_id . '</li>
                    <li class="list-group-item"><strong>Has Finished:</strong> ' . ($this->has_finished ? 'Yes' : 'No') . '</li>
                    <li class="list-group-item"><strong>Head Department Approval:</strong> ' . ($this->has_acc_head_department ? 'Yes' : 'No') . '</li>
                    <li class="list-group-item"><strong>Lecturer ID:</strong> ' . $this->lecturer_id . '</li>
                    <li class="list-group-item"><strong>Course ID:</strong> ' . $this->course_id . '</li>
                    <li class="list-group-item"><strong>Student Class ID:</strong> ' . $this->student_class_id . '</li>
                    <li class="list-group-item"><strong>Created At:</strong> ' . $this->created_at . '</li>
                    <li class="list-group-item"><strong>Updated At:</strong> ' . $this->updated_at . '</li>
                    <li class="list-group-item"><strong>Deleted At:</strong> ' . ($this->deleted_at ?? 'Not deleted') . '</li>
                </ul>
            </div>
        </div>';
    }
}

$unfinishedJournal = new UnfinishedData();
$unfinishedJournal->getData();

include 'footer.php';
