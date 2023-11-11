<?php

$conn = mysqli_connect("localhost","root","","review_skincare");

function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
  }

function tambah($data){
      global $conn;

      $bpomskincare = htmlspecialchars($data["bpomskincare"]);
      $namaskincare = htmlspecialchars($data["namaskincare"]);
      $gambarskincare = htmlspecialchars($data["gambarskincare"]);
      $jenisskincare = htmlspecialchars($data["jenisskincare"]);
      $ratingskincare = htmlspecialchars($data["ratingskincare"]);
      $ulasanskincare = htmlspecialchars($data["ulasanskincare"]);

          //query insert data
    $query = "INSERT INTO skincare
    VALUES
    ('$bpomskincare','$namaskincare','$gambarskincare','$jenisskincare','$ratingskincare', $ulasanskincare)
    ";
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}

function hapus($bpomskincare){
  global $conn;
  mysqli_query($conn, "DELETE FROM skincare WHERE BPOM = '$bpomskincare'");

  return mysqli_affected_rows($conn);
}
?>