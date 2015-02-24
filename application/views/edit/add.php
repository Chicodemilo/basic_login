<div id="wrapper">
<div class="searcher">





 </div>
 <br>

 <?php
echo '<div class="edit_box">';
echo "<table class='shadow'><tr class='header_row_edit'><td>NAME</td><td width='11%'>AREA CODE</td><td width='15%'>PHONE NUMBER</td><td>ADDRESS</td><td width='8%'>CITY</td><td width='5%'>STATE</td><td>EMAIL</td></tr>";
echo '<form method="post" action="'.base_url().'edit/submit_add/'.$id.'">';
     

echo "<tr class='row1_edit'><td><input type='text' name='name' id='name' style='width:90%' required tabindex=1 autofocus='autofocus'></td>";
echo "<td><input type='text' name='area_code' id='area_code' style='width:90%' required maxlength='3' value='325' tabindex=5></td><td><input type='text' name='phone_pre' id='phone_pre' style='width:40%' required maxlength='3' placeholder='???' tabindex=6>&nbsp;-&nbsp;<input type='text' name='phone_suf' id='phone_suf' style='width:40%' required maxlength='4' placeholder='????' tabindex=7></td>";
echo "<td><input type='text' name='address' id='address' style='width:90%' required tabindex=8></td>";
echo "<td><input type='text' name='City' id='City' style='width:90%' required value='San Angelo' tabindex=9></td>";
echo "<td><input type='text' name='State' id='State' style='width:90%' required value='TX' tabindex=10></td>";
echo "<td><input type='email' name='email' id='email' style='width:90%' required tabindex=11></td>";
echo "</tr>";
echo "</table>";

echo "<table><tr class='header_row_edit'><td>CATEGORY 1</td><td>CATEGORY 2</td><td>CATEGORY 3</td></tr>";
echo "<tr class='row1_edit'><td><input type='hidden' id='categoryone_value'> <select name='categoryone' id='categoryone' required tabindex=12> ";
foreach($categories AS $category_row){
    echo "<option value='".$category_row."'>".$category_row."</option>";
}     
echo "</select></td>";

echo "<td><input type='hidden' id='categorytwo_value' > <select name='categorytwo' id='categorytwo'tabindex=13 > ";
foreach($categories AS $category_row){
    echo "<option value='".$category_row."'>".$category_row."</option>";
}     
echo "</select></td>";

echo "<td colspan='2'><input type='hidden' id='categorythree_value' > <select name='categorythree' id='categorythree'tabindex=14> ";
foreach($categories AS $category_row){
    echo "<option value='".$category_row."'>".$category_row."</option>";
}   
echo "</select></td></tr>";  

echo "<tr class='row1_edit'><td colspan='2'><textarea rows='4' cols='70' name='description' id='description' placeholder='Write a quick description of the services provided.  400 character max.' maxlength='400' tabindex='15'></textarea></td>";

echo "<td><input id='button' type='submit' value='SUBMIT RESOURCE'></td></tr>";
echo '</form></table></div>';


echo "<br><br><br><br>";

?>
</div>
