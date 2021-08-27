<?php
namespace Model;

class ActivityModel extends Database {
  public function getActivities($limit) {
    return $this->select(
      "SELECT * FROM activities ORDER BY id ASC LIMIT ?",
      ["i", $limit]
    );
  }
}
