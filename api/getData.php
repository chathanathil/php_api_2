<?php
// http://localhost/put_api/api/getData.php
   require '../dbConfig.php';
    class API{
        function Select(){
            $db=new Connect;
            $users=array();
            $data=$db->prepare('SELECT * from titles ORDER BY id');
            $data->execute();
            while($OutputData=$data->fetch(PDO::FETCH_ASSOC)){
                $users[$OutputData['id']]=array(
                    'id'=>$OutputData['id'],
                    'name'=>$OutputData['name'],
                );
            }
            return json_encode($users);
        }
    }

    $API=new API;
    header('Content-Type:application/json');
    echo $API->Select()

?>