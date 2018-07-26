
<?php
    if(isset($_POST["search"])){
        $con = mysqli_connect("localhost", "root", "", "test");
        $output = '';
        $sql= "Select * from psgc where psgc_name like '%". $_POST["search"]."%' limit 5";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
            $output = '<h4 align="center">Search Result<h4>';
            $output .= '<div class="container">
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>CODE</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                </tr>
                                </thead>';
                        while($row = mysqli_fetch_array($result)){
                            $output .= '
                            <tbody>
                                <tr>
                                    <td>'. $row["psgc_code"].'</td>
                                    <td>'. $row["psgc_name"]. '</td>
                                    <td>' .$row["psgc_type"]. '</td>
                                </tr>
                            <tbody>';
                        }
                        
            $output .=   '</table>
                        </div>';
            echo $output;
                            
        }else{
            echo 'Data not Found';
        }
    }
    
?>