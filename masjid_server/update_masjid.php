<?php 

header("Content-Type: application/json; charset=UTF-8");

require_once 'connect.php';

$key = $_POST['key'];

if ( $key == "update" ){

    $id         = $_POST['id'];
    $name       = $_POST['name'];
    $lokasi    = $_POST['lokasi'];
    $koordinat      = $_POST['koordinat'];
    $tanggal      = $_POST['tanggal'];
    $picture    = $_POST['picture'];

    $tanggal =  date('Y-m-d', strtotime($tanggal));

    $query = "UPDATE masjid SET 
    name='$name', 
    lokasi='$lokasi', 
    koordinat='$koordinat',
    tanggal='$tanggal' 
    WHERE id='$id' ";

        if ( mysqli_query($conn, $query) ){

            if ($picture == null) {

                $result["value"] = "1";
                $result["message"] = "Success";
    
                echo json_encode($result);
                mysqli_close($conn);

            } else {

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