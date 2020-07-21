<?php 

require_once 'connect.php';

$key = $_POST['key'];

$name       = $_POST['name'];
$lokasi    = $_POST['lokasi'];
$koordinat      = $_POST['koordinat'];
$tanggal      = $_POST['tanggal'];
$picture    = $_POST['picture'];

if ( $key == "insert" ){

    $tanggal_newformat = date('Y-m-d', strtotime($tanggal));

    $query = "INSERT INTO masjid (name,lokasi,koordinat,tanggal)
    VALUES ('$name', '$lokasi', '$koordinat', '$tanggal_newformat') ";

        if ( mysqli_query($conn, $query) ){

            if ($picture == null) {

                $finalPath = "/masjid_server/logo.png"; 
                $result["value"] = "1";
                $result["message"] = "Success";
    
                echo json_encode($result);
                mysqli_close($conn);

            } else {

                $id = mysqli_insert_id($conn);
                $path = "masjid_picture/$id.jpeg";
                $finalPath = "/masjid_server/".$path;

                $insert_picture = "UPDATE masjid SET picture='$finalPath' WHERE id='$id' ";
            
                if (mysqli_query($conn, $insert_picture)) {
            
                    if ( file_put_contents( $path, base64_decode($picture) ) ) {
                        
                        $result["value"] = "1";
                        $result["message"] = "Success!";
            
                        echo json_encode($result);
                        mysqli_close($conn);
            
                    } else {
                        
                        $response["value"] = "0";
                        $response["message"] = "Error! ".mysqli_error($conn);
                        echo json_encode($response);

                        mysqli_close($conn);
                    }

                }
            }

        } 
        else {
            $response["value"] = "0";
            $response["message"] = "Error! ".mysqli_error($conn);
            echo json_encode($response);

            mysqli_close($conn);
        }
}

?>