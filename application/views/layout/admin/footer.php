 <!-- BEGIN: JS Assets-->
 <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
 <script src="<?= site_url('asset') ?>/admin/dist/js/app.js"></script>
 <!-- Resources -->
 <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
 <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
 <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

 <!-- alert -->
 <?php if (@$_SESSION['sukses']) { ?>
     <script>
         swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
     </script>
     <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
 <?php unset($_SESSION['sukses']);
    } ?>

 <!-- Chart code -->
 <script>
     am5.ready(function() {

         // Create root element
         // https://www.amcharts.com/docs/v5/getting-started/#Root_element
         var root = am5.Root.new("chartdiv");

         // Set themes
         // https://www.amcharts.com/docs/v5/concepts/themes/
         root.setThemes([
             am5themes_Animated.new(root)
         ]);

         // Create chart
         // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
         var chart = root.container.children.push(
             am5percent.PieChart.new(root, {
                 startAngle: 160,
                 endAngle: 380
             })
         );

         // Create series
         // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
         
         var label = chart.seriesContainer.children.push(
             am5.Label.new(root, {
                 textAlign: "center",
                 centerY: am5.p100,
                 centerX: am5.p50,
                 text: "[fontSize:16px]Pesanan [/]:\n[bold fontSize:20px]<?= $count; ?> Order[/]"
             })
         );

         // Set data
         // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
         series0.data.setAll(data);
         series1.data.setAll(data);

     }); // end am5.ready()
 </script>


 <!-- END: JS Assets-->
 </body>

 </html>