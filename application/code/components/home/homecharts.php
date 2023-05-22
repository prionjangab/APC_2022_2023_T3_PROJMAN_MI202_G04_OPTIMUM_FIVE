<!-- charts -->
                    
                    <?php 
                    
                    $sqlopen = "SELECT * FROM ticket where stat='open' ORDER BY tid";
                    $sqlpending = "SELECT * FROM ticket where stat='pending' ORDER BY tid";
                    $sqlclosed = "SELECT * FROM ticket where stat='closed' ORDER BY tid";

                    $o = 0;
                    $p = 0;
                    $c = 0;


                    $oresult = mysqli_query($con,$sqlopen);
                    $presult = mysqli_query($con,$sqlpending);
                    $cresult = mysqli_query($con,$sqlclosed);

                    while($orow = mysqli_fetch_array($oresult)){ $o++; } 
                    while($prow = mysqli_fetch_array($presult)){ $p++; } 
                    while($crow = mysqli_fetch_array($cresult)){ $c++; } 

                    ?>
                    
                    <div style="width: 400px;"> <center>Tickets<center>
                    <input id="open" type="hidden" value="<?=$o?>"></input>
                    <input id="pending" type="hidden" value="<?=$p?>"></input>
                    <input id="close" type="hidden" value="<?=$c?>"></input>
                    <canvas id="tickets"></canvas>
                    </div>
                    
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>

                        var open = $("#open").val();
                        var pending = $("#pending").val(); 
                        var close = $("#close").val();
                        
                    const ctx = document.getElementById('tickets');
                   
                    
                    
                    new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                        labels: ['Open = <?=$o?>', 'Closed = <?=$c?>' , 'Pending = <?=$p?>'],
                        datasets: [
                            {  
                            data: [open, close, pending],
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
                    
                    
                    