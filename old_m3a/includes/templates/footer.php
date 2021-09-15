		<script src="admin/layout/js/jquery-3.5.1.min.js"></script>
		<script src="admin/layout/js/jquery-ui.min.js"></script>
        <script src="admin/layout/js/popper.min.js"></script>
		<script src="admin/layout/js/bootstrap.min.js"></script>
		<script src="admin/layout/js/jquery.selectBoxIt.min.js"></script>
        <script src="<?php echo $js ?>swiper.min.js"></script>
        <script src="<?php echo $js ?>fron.js"></script>
        <script src="<?php echo $js ?>jquery.thooClock.js"></script>
        <script src="<?php echo $js ?>countdowns.js"></script>
       <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
    $('#myclock').thooClock({
      size: 150,
      dialColor:'navy',
      dialBackgroundColor:'transparent',
      secondHandColor:'#F3A829',
      minuteHandColor:'#222222',
      hourHandColor:'#222222',
      alarmHandColor:'#FFFFFF',
      alarmHandTipColor:'#026729',
      timeCorrection: {
        operator:'+',
        hours: 0,
        minutes: 0
      },
      alarmCount: 1,
      showNumerals:true,
      numerals: [
        {1:1},
        {2:2},
        {3:3},
        {4:4},
        {5:5},
        {6:6},
        {7:7},
        {8:8},
        {9:9},
        {10:10},
        {11:11},
        {12:12}
      ],
      sweepingMinutes:true,
      sweepingSeconds:false,
      numeralFont:'arial',
      brandFont:'arial'
    });
  </script>

	</body>
</html>