<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>

            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Title</th>
                <th>Excerpt</th>

                <th>Link</th>
                <th>Author</th>
                <th>Feature Media</th>

                <th>Shortlink</th>
                <th>Feature Media Url</th>


            </tr>

			 
        </thead>
        <tbody>
           

<?php foreach($news as $outter_key ):?>


<tr>


<td><?php echo $outter_key['id'];?></td>
<td><?php echo $outter_key['date'];?></td>
<!--  -->
<td><?php 
$user = $outter_key['title'];
echo $user['rendered'];
?>
</td>
<td><?php 
$user = $outter_key['excerpt'];
echo $user['rendered'];
?>
</td>

<td><?php echo "<a href='".$outter_key['link']."'>Link</a>";?></a></td>
<td><?php echo $outter_key['author'];?></td>

<td><?php echo $outter_key['featured_media'];?></td>

<td><?php echo $outter_key['shortlink'];?></td>

<td> <img src="<?php echo $outter_key['jetpack_featured_media_url'];?>" width="300px" /></td>

</tr>


<?php endforeach;?>

             
           
          
                
     
           
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
</table>	
</body>
<script type="text/javascript">

$(document).ready(function () {
    $('#example').DataTable();
});
 </script>
</html>


