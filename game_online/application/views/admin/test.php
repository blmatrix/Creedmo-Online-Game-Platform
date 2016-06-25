 <?php include_once  APPPATH ."views/admin/template/top.php"; ?>
            <div class="inner-wrapper">
             <script>
                 
                 document.write('현재 시간은 ');
                 document.write('</br>');
                 document.write(moment().format('MM/DD/YYYY h:mm A'));
                 document.write('</br>');
                 document.write('</br>');
                 document.write('지난주 초  ');
                 document.write('</br>');
                 document.write(moment().weekday(-6).format('MM/DD/YYYY 00:00:00'));
                 document.write('</br>');
                 document.write('지난주 끝 ');
                 document.write('</br>');
                 document.write(moment().weekday(-0).format('MM/DD/YYYY 23:59:59'));
                 document.write('</br>');
                 
                 지난 주 구하기  - 일요일 ~ 토요일
                 
                 지난 주 구하기 - 월요일 ~ 일요일 
                 
             </script>   
            </div><!-- end: inner-wrapper -->

<?php include_once APPPATH ."views/admin/template/footer.php"; ?>