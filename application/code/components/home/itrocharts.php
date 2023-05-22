<!-- charts -->
                    <?php 
                     $sql = "SELECT * FROM accounts where pstion = 'it'";
                     $aresult = mysqli_query($con,$sql);
                     while ($row = mysqli_fetch_array($aresult)) {
                    ?>
                    
                    <br>
                    <br>
                    
                    <div style="width: 200px;"> <center><?=$row['fname'], " " ,$row['lname']?><center>

                    <?php
                    $sqliopen = "SELECT * FROM ticket where stat='open' AND assignid = ". $row['id']. " ORDER BY tid";
                    $sqliclosed = "SELECT * FROM ticket where stat='closed' AND assignid = ". $row['id']. " ORDER BY tid";

                    $io = 0;
                    $ic = 0;


                    $ioresult = mysqli_query($con,$sqliopen);
                    $icresult = mysqli_query($con,$sqliclosed);

                    while($iorow = mysqli_fetch_array($ioresult)){ $io++; } 
                    while($icrow = mysqli_fetch_array($icresult)){ $ic++; } 

                    ?>

                    <input id="iopen<?=$row['id']?>" type="hidden" value="<?=$io?>"></input>
                    <input id="iclose<?=$row['id']?>" type="hidden" value="<?=$ic?>"></input>
                    <canvas id="itickets<?=$row['id']?>"></canvas>
                    </div>
                    
                    

                    <!-- the script needs new ids and new variables thus having a while loop ontop makes it doable by putting the ids of the itro
                        to become the new variables and ids
                    -->
                    <script>
                        var iopen<?=$row['id']?> = $("#iopen<?=$row['id']?>").val();
                        var iclose<?=$row['id']?> = $("#iclose<?=$row['id']?>").val();
                        
                    const ctx<?=$row['id']?> = document.getElementById('itickets<?=$row['id']?>');
                    new Chart(ctx<?=$row['id']?>, {
                        type: 'doughnut',
                        data: {
                        labels: ['Open', 'Closed'],
                        datasets: [
                            {  
                            data: [iopen<?=$row['id']?>, iclose<?=$row['id']?>],
                            borderWidth: 1
                        }
                        ]
                        },
                        options: {
                        // scales: {
                        //     y: {
                        //     beginAtZero: true
                        //     }
                        // }
                        }
                    });    
                    </script>   
                    <?php } ?>