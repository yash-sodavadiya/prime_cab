<?php
            if (isset($_POST['Submit1'])) {
                $filepath = "../../images/" . $_FILES["v_image"]["name"];
                $img_class = "preview";
                if (move_uploaded_file($_FILES["v_image"]["tmp_name"], $filepath)) {
                    echo "<img src=" . $filepath . " height=200 width=300 class=" . $img_class . " />";
                } else {
                    echo "Error !!";
                }
                if(isset($_POST['submit'])){
                    $vname = $_POST['v_name'];
                    echo $vname;
                    echo $filepath;
                }
            }
            ?>