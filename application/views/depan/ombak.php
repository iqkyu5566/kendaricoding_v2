        <link href="<?= base_url(); ?>assets/ombakcss/ombak.css" rel="stylesheet">


        <div class="wave" id="wave1" style="--i:1;"></div>
        <div class="wave" id="wave2" style="--i:2;"></div>
        <div class="wave" id="wave3" style="--i:3;"></div>
        <div class="wave" id="wave4" style="--i:4;"></div>
        <script>
            let wave1 = document.getElementById('wave1')
            let wave2 = document.getElementById('wave2')
            let wave3 = document.getElementById('wave3')
            let wave4 = document.getElementById('wave4')

            window.addEventListener('scroll', function() 
            {
                let value = window.scrollY;

                wave1.style.backgroundPositionX = 400 + value * 4 + 'px';
                wave2.style.backgroundPositionX = 300 + value * -4 + 'px';
                wave3.style.backgroundPositionX = 200 + value * 2 + 'px';
                wave4.style.backgroundPositionX = 100 + value * -2 + 'px';
            })
        </script>