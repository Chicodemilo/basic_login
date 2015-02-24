<div id="wrapper">
<div class="searcher">



 </div>
 <br>

 <?php
echo '<div class="edit_box">';
echo "<table class='shadow' min-width='800px'><tr class='header_row_edit'><td width='30%' colspan='2' >NAME</td><td>PHONE NUMBER</td><td>ADDRESS</td><td>CITY</td><td >STATE</td><td>EMAIL</td></tr>";
echo '<form method="post" action="'.base_url().'edit/submit_edit/'.$id.'">';
     
foreach($resources AS $row) { 

            $all_categories[] = '';
    

    		// print_r($row);
            echo "<tr class='row1_edit'><td colspan='2' ><input type='text' name='name' id='name' style='width:90%' value='".$row['name']."' required></td>";
            echo "<td><input type='text' name='phone' id='phone' style='width:90%' value='".$row['phone']."' required></td>";
            echo "<td><input type='text' name='address' id='address' style='width:90%' value='".$row['address']."' required></td>";
            echo "<td><input type='text' name='City' id='City' style='width:90%' value='".$row['City']."' required></td>";
            echo "<td><input type='text' name='State' id='State' style='width:90%' value='".$row['State']."' required></td>";
            echo "<td><input type='email' name='email' id='email' style='width:90%' value='".$row['email']."' required></td></tr>";

            echo "</table>";

            echo "<table min-width='800px'><tr class='header_row_edit'><td width='10%'>CATEGORY 1</td><td width='10%'>CATEGORY 2</td><td width='10%'>CATEGORY 3</td></tr>";

            echo "<tr class='row1_edit'><td><input type='hidden' id='categoryone_value' value='".$row['categoryone']."'> <select name='categoryone' id='categoryone' required> ";
            foreach($categories AS $category_row){
                echo "<option value='".$category_row."'>".$category_row."</option>";
            }     
            echo "</select></td>";

 
            echo "<td><input type='hidden' id='categorytwo_value' value='".$row['categorytwo']."'> <select name='categorytwo' id='categorytwo'> ";
            foreach($categories AS $category_row){
                echo "<option value='".$category_row."'>".$category_row."</option>";
            }     
            echo "</select></td>";

 
            echo "<td><input type='hidden' id='categorythree_value' value='".$row['categorythree']."'> <select name='categorythree' id='categorythree'> ";
            foreach($categories AS $category_row){
                echo "<option value='".$category_row."'>".$category_row."</option>";
            }   

            echo "</select></td></tr>";  



            echo "<tr class='header_row_edit'><td colspan='2'>DESCRIPTION</td><td></td>";
            echo "<tr class='row1_edit'><td colspan='2'><textarea rows='4' cols='80' name='description' id='description' maxlength='400' >".$row['description']."</textarea></td>";

            $pic_name = $row['pic_name'];

}

echo "<td><input id='button' type='submit' value='SUBMIT EDITS'></td></tr>";
echo '</form></table></div>';


?>

<table>
    <?php if($pic_name != ''){
        echo "
            <tr>
                <td><img src='".base_url()."resources/".$id."/images/".$pic_name."' alt='".$pic_name."' width='30%'></td>
            </tr>
            <tr>
                <td class='lefter_light'><a href='".base_url()."upload/delete_this/".$id."'>DELETE THIS PICTURE</a></td>
            </tr>";

    } 



    ?>
    <tr>
        <td class='lefter_light'><a href="<?php echo base_url(); ?>upload/upload_this/<?php echo $id ?>">UPLOAD A PICTURE</a></td>
    </tr>
</table>
<br><br>




</div>




<script type='text/javascript'>
    window.onload=function(){

        var categoryone_hidden = document.getElementById('categoryone_value');
        var categoryone_value = categoryone_hidden.value;
        // alert(categoryone_value);
        var categoryone_select = document.getElementById('categoryone');
        var categoryone_select_length = categoryone_select.length;
        // alert(paid_item_select_length);
        for(var j = 0; j <= categoryone_select_length; j++){
        //  // alert(j);
        //  // alert(j+select.options[j].value+status_value);
            if(categoryone_select.options[j].value === categoryone_value){
                categoryone_select.options[j].selected = 'true';
                break;
            }
        }



        var categorytwo_hidden = document.getElementById('categorytwo_value');
        var categorytwo_value = categorytwo_hidden.value;
        // alert(categorytwo_value);
        var categorytwo_select = document.getElementById('categorytwo');
        var categorytwo_select_length = categorytwo_select.length;
        // alert(paid_item_select_length);
        for(var j = 0; j <= categorytwo_select_length; j++){
        //  // alert(j);
        //  // alert(j+select.options[j].value+status_value);
            if(categorytwo_select.options[j].value === categorytwo_value){
                categorytwo_select.options[j].selected = 'true';
                break;
            }
        }




        var categorythree_hidden = document.getElementById('categorythree_value');
        var categorythree_value = categorythree_hidden.value;
        // alert(categorythree_value);
        var categorythree_select = document.getElementById('categorythree');
        var categorythree_select_length = categorythree_select.length;
        // alert(paid_item_select_length);
        for(var j = 0; j <= categorythree_select_length; j++){
        //  // alert(j);
        //  // alert(j+select.options[j].value+status_value);
            if(categorythree_select.options[j].value === categorythree_value){
                categorythree_select.options[j].selected = 'true';
                break;
            }
        }

    }
    

</script>