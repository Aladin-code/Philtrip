<?php
    include 'connection.php';

    if(isset($_POST['archive'])) {
        $archiveId = $_POST['archiveId'];

        $query = "UPDATE adventure_tbl SET Status = 'archive' WHERE AdventureID = '$archiveId'";
        $result = $connection -> query($query);
        
        if($result) {
            include 'tours_copy.php';
            echo "<script type='text/javascript'> 
                    $(document).ready(function(){
                        $('#successalert').modal('show');
                        $('#successalert').on('hidden.bs.modal', function () {
                            window.location.href = 'tours_copy.php';
                        });
                    });
                  </script>";
        }else {
            echo "<script type='text/javascript'> alert('Failed to insert services!') </script>";
        }
    }
?>

<?php
    // if(isset($_GET['archiveid'])) {
    //     $archiveid=$_GET['archiveid'];
    //     $sql = " SELECT * from adventure_tbl where AdventureID = '$archiveid'";
    //     $result = $connection->query($sql);
 
    //     if($result->num_rows > 0){
    //         while($row = $result->fetch_assoc()){
    //            $AdventureID = $row['AdventureID'];
    //            $Image=$row['Image'];
    //            $Name=$row['Name'];
    //            $Location = $row['Location'];
    //            $Description = $row['Description'];
    //            $Price = $row['Price'];
    //            $Discount = $row['Discount'];
    //            $tour_guide = $row['Tour_Guide'];  
    //            $accomodation = $row['Accomodations'];
    //            $food_drinks = $row['Food_and_Drinks'];
    //             $equipments = $row['Equipment'];
    //             $personal_vehicle = $row['Personal_Vehicle'];
    //             $toileteries = $row['Toileteries'];

    //             $query = "INSERT INTO archive_tbl (Image,Name,Location,Description,Price,Discount,Tour_Guide,Accomodation,Food_And_Drinks,Equipments,Personal_Vehicle,Toileteries) VALUES ('$Image','$Name','$Location','$Description','$Price','$Discount','$tour_guide','$accomodation','$food_drinks','$equipments','$personal_vehicle', '$toileteries')";
    //             $result2 = $connection -> query($query);
                

    //             $sql2 = "DELETE FROM adventure_tbl WHERE AdventureID = '$archiveid'";
    //             $result3 = $connection -> query($sql2);

    //             if($result2 && $result3) {
                
    //                 include 'tours_copy.php';
    //                 echo "<script type='text/javascript'> 
    //                         $(document).ready(function(){
    //                             $('#successalert').modal('show');
    //                             $('#successalert').on('hidden.bs.modal', function () {
    //                                 window.location.href = 'tours_copy.php';
    //                             });
    //                         });
    //                     </script>";
                    
    //                 exit();
    //             }
    //         }
    //     }
    //  }
?>