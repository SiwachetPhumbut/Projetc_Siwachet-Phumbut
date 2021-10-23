<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="insert">
    <table class="table table-striped table-border table-hover">
        <thead>
            <tr>
                <th>first name</th>
                <th>last name</th>
                <th>edit name</th>
                <th>delete name</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $select_stmt =$conn->prepare("SELECT * FROM ");
            $select_stmt->execute();
            while($row $select_stmt->conn_fetch){
            ?> 
                <tr>
                    <td><?php echo $row["firstname"];?></td>  
                    <td><?php echo $row["lastname"];?></td>
                    <td><?php echo $row["dep_name"];?></td>
                    <td><?php echo $row["position"];?></td>
                    <td><a href="edit.php?update_id=<?php echo $row["id_dep"];?>" class="btn btn-waning">Edit</a></td>
                    <td><a href="?deleste_id=<?php echo $row["id_dep"];?>" class="btn btn-waning">Deleste</a></td>
                    <td></td>
                </tr>
           
            <?php} ?>
        </tbody>

    </table>    