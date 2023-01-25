<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kementrian Lingkungan Hidup</title>
    <link rel="icon" href="<?= base_url('assets/img/logo.png') ?>" type="image/icon type">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600&display=swap" rel="stylesheet">
    
    <style>
* {
    margin: 0;
    padding: 0;
    /*font-family: 'Times New Roman', Times, serif;*/
    /*font-family: 'Archivo Black', sans-serif;*/
    font-family: 'Archivo', sans-serif;
}

.layout-baru {
    min-height: 100vh;
    padding: 1%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.tempat-gambar {
    height: 3.5vw;
}

.gambar img {
    width: 100%;
    height: 100%;
}

.klu-kiri, .klu-kanan {
    margin-left: 0.5vw;
    /* line-height: ; */
    /* letter-spacing: 0.2cm;  */
} 

.klu-kiri span, .klu-kanan span {
    font-size: 1.2vw;
    /* line-height: ; */
    /* letter-spacing: 0.2cm;  */
} 

.klu-kiri {
    line-height: 1.1vw;
    letter-spacing: 0.1vw; 
}

.klu-kanan {
    letter-spacing: 0.1vw; 
    line-height: 1.5vw;
    margin-top: 0.4vw;
}

.kualitas-text {
    font-size: 4.5vw;
    font-weight: 600;
    line-height: 4.8vw;
    letter-spacing: 0.2vw; 
}

.kualitas-text span {
    font-family: 'Archivo Black', sans-serif;
}

.jam-text {
    font-size: 2.5vw;
    line-height: 2.7vw;
}

.number-text {
    width: 40vw;
    height: 20vw;
    background-color: green;
    border-radius: 50%;
}

.number-text h1 {
    margin-top: -2vw;
    margin-left: -1vw;
    font-family: 'Pacifico', cursive;
    -webkit-text-stroke: black;
    -webkit-text-stroke-width: 0.8vw;
}

.baik-text {
    font-size: 4vw;
    font-weight: 600;
    line-height: 5vw;
}

.param-text {
    font-size: 2.3vw;
    font-weight: 600;
    line-height: 3vw;
}

.tes, .tes2 {
    background-color: black;
    border-radius: 0.7vw;
    padding-block: 0.1vw;
    padding-inline: 2vw;
}

.konsentrasi-text {
    font-size: 5vw; 
    font-weight: 600; 
    color: yellow; 
}

.o3-text {
    font-size: 5vw; 
    font-weight: 600; 
    color: yellow; 
}


.ug-text {
    font-size: 3.2vw;
    margin-top: -1.8vw;
    color: white;
}



</style>
</head>


<body>
    <section id="main" style="display: block; height: 100%">
        <div class="container-fluid layout-baru" style="background-color: #242948;">
            <div class="d-flex justify-content-between navbar-1-baru ">
                <div class="d-flex justify-content-center tempat-gambar">
                    <div class="gambar">
                        <img src="<?= base_url('assets/img/logo.png') ?>" alt="">
                    </div>
                    <div class="klu-kiri">
                        <span class="text-center text-white">KEMENTERIAN <br>LINGKUNGAN HIDUP <br>DAN KEHUTANAN</span>
                    </div>
                </div>

                <div class="d-flex justify-content-center tempat-gambar">
                    <div class="gambar">
                        <img src="<?= base_url('assets/img/logo-bengkulu.png') ?>" alt="">
                    </div>
                    <div class="klu-kanan">
                        <span class="text-center text-white">PEMERINTAH <br>KOTA BENGKULU</span>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center navbar-2-baru">
                <div class="d-flex justify-content-center">
                    <div class="kualitas-text text-center">
                        <span class="text-white">KUALITAS UDARA <br>KOTA BENGKULU</span>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center navbar-3-baru">
                <div class="d-flex justify-content-center">
                    <div class="jam-text text-center">
                        <span class="text-white jam-text-value"><?= substr($getApi->data->waktu, 0, -10) ?><br></span>
                        <span id="jam-load" class="text-white jam-text-value"></span>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center navbar-4-baru">
                <div class="d-flex justify-content-center">
                    <div class="number-text text-center">
                        <h1 class="number-text-number text-center text-white"><?= $getApi->data->pm25 ?></h1>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center navbar-5-baru">
                <div class="d-flex justify-content-center">
                    <div class="category-text category-nya text-center">
                        <input hidden class="category" type="text" value="<?= $getApi->data->c_pm25 ?>">
                        <span class="text-white baik-text"></span>
                    </div>
                </div>
            </div>

            <div class="row navbar-6-baru">
                <div class="col-kiri col-6">
                    <div class="d-flex justify-content-between tes">
                        <div class="lay-param-text">
                            <span class="text-left text-white param-text">Parameter Kritis</span>
                        </div>
                        <div class="d-flex justify-content-end value-text">
                            <span class="o3-text" align="right">PM<sub>2.5</sub></span>
                        </div>
                    </div>
                </div>
                <div class="col-kanan col-6">
                    <div class="d-flex justify-content-between tes2">
                        <div class="lay-param-text">
                            <span class="text-left text-white param-text">Nilai Konsentrasi</span>
                        </div>
                        
                        <div class="lay-param-text" >
                            <div class="d-flex justify-content-end value-text">
                            <span class="konsentrasi-text" align="right"><?= $getApi->data->o3; ?><span class="ug-text"><sub>ug/m<sup>3</sup></sub></span></span>
                            </div>
                            
                            <!--<div class="d-flex justify-content-end value-text">-->
                            <!--    <span class="text-white ug-text" align="right">ug/m<sup>3</sup></span>-->
                            <!--</div>   -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="errorya" style="display: none;">
        <div class="errornya">
            <span style="font-size: 20vw;">Tidak ada koneksi Internet !</span>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('document').ready(function() {
            // cek while no internet, show text no connection 
            noInternet();

            function noInternet() {
                var error_text = $('.number-text-number h4').html();
                if (error_text == 'A PHP Error was encountered') {
                    $('.jam-text-value').html('---');
                    $('.number-text-number').html('');
                    $('.baik-text').html('---');
                    $('.konsentrasi-text').html('---');
                    $('.category-nya').html('<span class="text-white text-center baik-text">Tidak Ada Koneksi Internet !</span>');
                } else {
                    $('#main').css('display', 'block');
                    $('#errorya').css('display', 'none');
                }
            }

            // setInterval(ajaxCall, 300000); //300000 MS == 5 minutes
            // setInterval(ajaxCall, 120000); //120000 MS == 2 minutes

            // set interval, reload page every 3 minutes 
            setInterval(ajaxCall, 180000); //180000 MS == 3 minutes

            // change color while category is different, follow the api 
            changeColor();

            function ajaxCall() {
                window.location.reload()
            }

            function changeColor() {
                var category = $('.category').val();
                if (category == 1) {
                    $('.number-text').css('background-color', '');
                    $('.number-text').css('background-color', 'green');
                    $('.baik-text').html('BAIK');
                    $('.number-text-number').css('font-size', '');
                    $('.number-text-number').css('font-size', '16vw');
                    $('.number-text-number').css('margin-top', '');
                    $('.number-text h1').css('letter-spacing', '-1.2vw');
                } else if (category == 2) {
                    $('.number-text').css('background-color', '');
                    $('.number-text').css('background-color', 'blue');
                    $('.baik-text').html('SEDANG');
                    $('.number-text-number').css('font-size', '');
                    $('.number-text-number').css('font-size', '16vw');
                    $('.number-text-number').css('margin-top', '');
                    $('.number-text h1').css('letter-spacing', '-1.2vw');
                } else if (category == 3) {
                    $('.number-text').css('background-color', '');
                    $('.number-text').css('background-color', 'yellow');
                    $('.number-text-number').css('font-size', '');
                    $('.number-text-number').css('font-size', '15vw');
                    $('.number-text h1').css('letter-spacing', '-2vw');
                    $('.number-text-number').css('margin-top', '-0.7vw');
                    $('.number-text h1').css('-webkit-text-stroke-width', '0.4vw');
                    $('.baik-text').html('TIDAK SEHAT');
                } else if (category == 4) {
                    $('.number-text').css('background-color', '');
                    $('.number-text').css('background-color', 'red');
                    $('.baik-text').html('SANGAT TIDAK SEHAT');
                    $('.number-text-number').css('font-size', '');
                    $('.number-text-number').css('font-size', '15vw');
                    $('.number-text h1').css('letter-spacing', '-2vw');
                    $('.number-text-number').css('margin-top', '-0.7vw');
                    $('.number-text h1').css('-webkit-text-stroke-width', '0.4vw');
                } else if (category == 5) {
                    $('.number-text').css('background-color', '');
                    $('.number-text').css('background-color', 'black');
                    $('.baik-text').html('BERBAHAYA');
                    $('.number-text-number').css('font-size', '');
                    $('.number-text-number').css('font-size', '15vw');
                    $('.number-text h1').css('letter-spacing', '-2vw');
                    $('.number-text-number').css('margin-top', '-0.7vw');
                    $('.number-text h1').css('-webkit-text-stroke-width', '0.4vw');

                }
            }
        })
    </script>

    <script type="text/javascript">
        window.onload = function() {
            jam();
        }

        function jam() {
            var e = document.getElementById('jam-load'),
                d = new Date(),
                h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            if (h == 0) {
                e.innerHTML = '00' + ':' + m + ' WIB';
            } else {
                e.innerHTML = h + ':' + m + ' WIB';
            }

            setTimeout('jam()', 1000);
        }

        function set(e) {
            e = e < 10 ? '0' + e : e;
            return e;
        }
    </script>
</body>

</html>