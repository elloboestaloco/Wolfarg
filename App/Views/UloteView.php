<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <center>
            <div class="row mb-12">
                <div class="col-sm-12">
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a href="<?= URL_PATH ?>/Page/Faltante" class="btn btn-dark btn-lg" role="button" aria-pressed="true">Faltante</a>
                        <a href="<?= URL_PATH ?>/Page/Desarme" class="btn btn-dark btn-lg" role="button" aria-pressed="true">Desarme</a>
                        <a href="<?= URL_PATH ?>/Page/Noentregado" class="btn btn-dark btn-lg" role="button" aria-pressed="true">No entregados</a>
                        <a href="<?= URL_PATH ?>/Page/Stagein" class="btn btn-dark btn-lg" role="button" aria-pressed="true">STAGE IN</a>
                        <a href="<?= URL_PATH ?>/Page/RepeticionRack" class="btn btn-dark btn-lg" role="button" aria-pressed="true">Repeticion en
                            racks</a>
                        <a href="<?= URL_PATH ?>/Page/Ulote" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Ulote</a>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
            </center>
        <div class="container-fluid">

        <?php  $tipo='Ulote'; ?>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-transparent">
                    <div class="inner">
                        <h4 style="font-size: 20px">Tipo Ubicacion</h4>
                         
                        <h1  style="font-size: 44px">Ulote</h1>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3 id="RS05">

                            </h3>

                            <p>RS05</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3 id="PR03"><sup style="font-size: 20px"></sup></h3>

                            <p>PR03</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 id="MA01"></h3>

                            <p>MA01</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3 id="PS02"></h3>

                            <p>PS02</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-orange">
                        <div class="inner">
                            <h3 id="PS03"></h3>

                            <p>PS03</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ./col -->

    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <!-- AREA CHART -->
                    <div class="card card-primary" id="c1">



                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-primary"
                                onclick="cargardato('c1','line1',60 ,'<?php echo $tipo;?>','Lineas')">Lineas</button>
                            <button type="button" class="btn btn-primary"
                                onclick="cargardato('c1','line1',30 ,'<?php echo $tipo;?>' ,'Lineas')">30 Dias</button>
                            <button type="button" class="btn btn-primary"
                                onclick="cargardato('c1','line1',15 ,'<?php echo $tipo;?>','Lineas')">15 Dias</button>
                            <button type="button" class="btn btn-primary"
                                onclick="cargardato('c1','line1',7 ,'<?php echo $tipo;?>','Lineas')">7 Dias</button>
                        </div>
                        <canvas id="line1"></canvas>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- AREA CHART -->


                    <div class="card card-primary" id="c2">



                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-primary"
                                onclick="cargardato('c2','line2',60 ,'<?php echo $tipo;?>','Bultos')">Bultos</button>
                            <button type="button" class="btn btn-primary""
                                onclick="cargardato('c2','line2',30 ,'<?php echo $tipo;?>','Bultos')">30 Dias</button>
                            <button type="button" class="btn btn-primary""
                                onclick="cargardato('c2','line2',15 ,'<?php echo $tipo;?>','Bultos')">15 Dias</button>
                            <button type="button" class="btn btn-primary"
                                onclick="cargardato('c2','line2',7 ,'<?php echo $tipo;?>','Bultos')">7 Dias</button>
                        </div>
                        <!-- <canvas id="line-chart" class="docs-charts-component-canvas chartjs-render-monitor" style="min-height: 300px; height: 594px; max-height: 400px; max-width: 100%; display: block; width: 523px;" width="523" height="594"></canvas> -->


                        <canvas id="line2"></canvas>



                        <!-- /.card-body -->

                        <!-- /.card -->
                    </div>


                    <!-- /.col (RIGHT) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->



</div>
<script src="<?= URL_PATH ?>/Assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= URL_PATH ?>/Assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= URL_PATH ?>/Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= URL_PATH ?>/Assets/plugins/chart.js/Chart.min.js"></script>

<!-- Bootstrap 4 -->
<!-- <script src="<?= URL_PATH ?>/Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->

<!-- <script src="<?= URL_PATH ?>/Assets/plugins/flot/jquery.flot.js"></script> -->
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<!-- <script src="<?= URL_PATH ?>/Assets/plugins/flot/plugins/jquery.flot.resize.js"></script> -->
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<!-- <script src="<?= URL_PATH ?>/Assets/plugins/flot/plugins/jquery.flot.pie.js"></script> -->
<!-- AdminLTE for demo purposes -->

<script>

function tipos(tip) {
}
   
    function FechS(ubi) {
        var date = new Date(ubi + "T00:00:00");
        // Get year, month, and day part from the date
        var year = date.toLocaleString("default", { year: "numeric" });
        var month = date.toLocaleString("default", { month: "2-digit" });
        var day = date.toLocaleString("default", { day: "2-digit" });
        // Generate yyyy-mm-dd date string
        return day + "/" + month

    };
    function unidp(id) 
    {
        $.ajax({
            data: {
                dp: id,
                id: "<?php echo $tipo; ?>",
            },
            url: '/Wolfarg/Public/Stock/depof',
            type: 'POST'
        }).done(function (resp) {
            var data = JSON.parse(resp);

            const p = document.getElementById(id)
         
            p.innerText =data['sum(Lineas)'];
    })
    };
    function cargardato(IC, lineid, dia, tipo, LB) {


        /*
          * LINE CHART
          * ----------
          */
        //LINE randomly generated data

        var fecha = [];
        var MA1 = [];
        var PR3 = [];
        var PS2 = [];
        var RS5 = [];
        var PS3 = [];
        var unicos = [];

        $.ajax({
            data: {
                id: dia,
                tipo: tipo,
            },
            url: '/Wolfarg/Public/Stock/Faltante',
            type: 'POST'
        }).done(function (resp) {
            var data = JSON.parse(resp);


            for (let x = 0; x < data.length; x++) {

                fecha.push(data[x]['Fecha']);

                if (data[x]['Deposito'] == 'PR03') {
                    PR3.push(parseInt(data[x][LB]));

                }
                if (data[x]['Deposito'] == 'MA01') {
                    MA1.push(parseInt(data[x][LB]));

                }
                if (data[x]['Deposito'] == 'RS05') {
                    RS5.push(parseInt(data[x][LB]));

                }
                if (data[x]['Deposito'] == 'PS02') {
                    PS2.push(parseInt(data[x][LB]));

                }
                if (data[x]['Deposito'] == 'PS03') {
                    PS3.push(parseInt(data[x][LB]));

                }
            }

            //  console.log(fecha)
            unicos = Array.from(new Set(fecha))
            fecha = [];
            for (let i = 0; i < unicos.length; i++) {

                fecha.push(FechS(unicos[i]));

            }

            var dataset = {
                type: 'line',
                data: {
                    labels: fecha,
                    datasets: [
                        {
                            data: RS5,
                            label: "RS05",
                            borderColor: '#808080',
                            backgroundColor: '#808080',
                            borderWidth: 1.5,
                            tension: 0,
                            fill: false,

                        }, {
                            data: MA1,
                            label: "MA01",
                            borderColor: 'rgba(251, 188, 4, 1.0)',
                            backgroundColor: 'rgba(251, 188, 4, 1.0)',
                            borderWidth: 1.5,
                            tension: 0,
                            fill: false,

                        }, {
                            data: PR3,
                            label: "PR03",
                            borderColor: 'rgba(52, 168, 83, 1.0)',
                            backgroundColor: 'rgba(52, 168, 83, 1.0)',
                            borderWidth: 1.5,
                            tension: 0,
                            fill: false,

                        },
                        {
                            data: PS2,
                            label: "PS02",
                            borderColor: 'rgba(234, 67, 53, 1.0)',
                            backgroundColor: 'rgba(234, 67, 53, 1.0)',
                            borderWidth: 1.5,
                            tension: 0,
                            fill: false,

                        },
                        {
                            data: PS3,
                            label: "PS03",
                            borderColor: 'rgba(255, 109, 1, 1.0)',
                            backgroundColor: 'rgba(255, 109, 1, 1.0)',
                            borderWidth: 1.5,
                            tension: 0,
                            fill: false,

                        }
                    ]
                },
                options: {

                },
            };



            document.getElementById(lineid).remove();

            var canvas = document.createElement("canvas");
            canvas.id = lineid;
            canvas.style = "max-width: 100%;"
            document.getElementById(IC).appendChild(canvas);

            var ctx = $("#" + lineid).get(0).getContext('2d')

            new Chart(ctx, dataset);

        })


    }

    $(function () {
        cargardato('c1', 'line1', 30,"<?php echo $tipo;?>", 'Lineas');
        cargardato('c2', 'line2', 30, "<?php echo $tipo; ?>", 'Bultos');
        unidp('RS05'); 
        unidp('PR03'); 
        unidp('MA01'); 
        unidp('PS02') ;
        unidp('PS03') ;

    })

    /*
     * Custom Label formatter
     * ----------------------
     */
//   function labelFormatter(label, series) {
//     return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
//       + label
//       + '<br>'
//       + Math.round(series.percent) + '%</div>'
//   }
</script>