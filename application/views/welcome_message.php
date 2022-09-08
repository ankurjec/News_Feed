<!DOCTYPE html>
<html>

<head>
    <title>New Feeds</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <style>
        table.dataTable thead tr {
            background-color: #99d6ff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <h1 style="color:white;">News Feeds</h1>
    </nav>
    <marquee width="1520px" style="font-size: 12pt; height:32px;padding-bottom: 10px;" behavior="scroll" direction="left" bgcolor="#DEE9FB" scrollamount="2" scrolldelay="60" onmouseover="this.stop()" onmouseout="this.start()">Displaying the Top News Headlines</a></li></marquee>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>

            <tr>
                <th>SL no.</th>
                <th>Date</th>
                <th>Title</th>
                <th>Excerpt</th>

                <th>Read full Article</th>
                <th>Author</th>
                <!-- <th>Feature Media</th> -->

                <th>Feature Media </th>


            </tr>


        </thead>
        <tbody>


            <?php foreach ($news as $outter_key) : ?>


                <tr>


                    <td><?php echo $outter_key['id']; ?></td>
                    <td><?php echo $outter_key['date']; ?></td>
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

                    <td><?php echo "<a target='_blank' href='" . $outter_key['link'] . "'>Click here</a>"; ?></a></td>
                    <td><?php echo $outter_key['author']; ?></td>



                    <td> <img src="<?php echo $outter_key['jetpack_featured_media_url']; ?>" width="300px" /></td>

                </tr>


            <?php endforeach; ?>







        </tbody>

    </table>
</body>
<footer class="text-center text-white" style="background-color: #f1f1f1;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="https://news.com/">NewsFeed.com</a>
  </div>
  <!-- Copyright -->
</footer><script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false
        });
    });
</script>

</html>