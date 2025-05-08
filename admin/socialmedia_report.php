<?php include 'check_session.php' ?>
<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>

    <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                   <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-info">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col">SOCIAL MEDIA</th>
                                                <th scope="col">USERNAME</th>
                                                <th scope="col">TIME</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                               include('db_con.php');
                                               $sel_que="select* from add_media";
                                               $res=mysqli_query($con,$sel_que);
                                               $a=0;
                                               while($row=mysqli_fetch_array($res)){
                                            ?> 
                                            <tr>
                                                <td><?php echo $row['id'];?></td>
                                                <td> <input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" checked data-size="sm">
                             <script>
                               $(function() {
                                $('#check').bootstrapToggle({
                                 on: 'Active',
                                off: 'Inactive'
                                       });
                                      });
                               </script></td>
                                                <td><?php echo $row['social_media'];?></td>
                                                <td><?php echo $row['username'];?></td>
                                                <td><?php echo $row['time'];?></td>
                                            </tr>
                                            <?php
                                               }
                                               $a=$a+1; 
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include 'footer.php' ?>