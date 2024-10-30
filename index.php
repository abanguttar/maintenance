<?php
$_SESSION['token'] =  md5(uniqid(mt_rand(), true));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/icon.ico" type="image/x-icon">
    <title>Under Construction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    :root {
        --primary: #c70039;
        --redPrimary: #C42026;
        --grayPrimary: #606060;
        --bluePrimary: #3472B3;
    }


    .poppins-extrabold {
        font-family: "Poppins", sans-serif;
        font-weight: 800;
        font-style: normal;
    }

    .montserrat-regular {
        font-family: "Montserrat", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
    }

    body,
    html {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        font-family: "Montserrat", sans-serif;
    }

    .icon {
        width: 50px;
    }

    .icon:hover {
        transform: scale(1.2);
        transition: ease-in-out 1s;
    }

    .text-red {

        color: var(--redPrimary) !important;
    }

    .btn-red {
        background-color: var(--redPrimary) !important;
    }

    .btn-red:hover {
        background-color: #7c0011 !important;
    }

    #first {
        background-image: url("./assets/BG-01.png");
        background-size: cover;
    }

    #second {
        background-image: url("./assets/BG-02.png");
        background-size: cover;
        background-repeat: no-repeat;
        padding-bottom: 10em;
    }

    .bg-light-blur {
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        z-index: 1;
    }

    .wrapper-text-kami-akan-kembali {
        z-index: 2;
    }

    .text-shadow-white {
        text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.7);
        /* Subtle white shadow */
    }

    @media only screen and (max-width: 576px) {

        .halo-kita {
            font-size: 1em !important;
        }

        .h1-text {
            font-size: 1.5em !important;
        }

        .text-shadow-white {
            font-size: 1.3em !important;
        }
    }
</style>

<body class="h-screen">

    <section id="first">
        <div class="container mt-2 mt-md-5 pt-5">
            <div class="logo-kitakompeten d-flex justify-content-center">
                <img src="./assets/logo-sidebar.png" alt="">
            </div>
            <div class="text-announce text-center mt-5">
                <h1 class="poppins-extrabold text-black">Oops!</h1>
                <h1 class="poppins-extrabold text-red">Under Construction</h1>
                <p class="mt-3 fs-5 halo-kita">Halo, saat ini Kita Kompeten sedang dalam proses perbaikan Website & LMS.<br>
                    Harap tunggu kami ya, Sobat KITA!</p>
            </div>
            <div class="line-wrapper mt-5 pt-5">
                <div class="container border border-3 border-start-0 border-end-0 border-top-0 border-dark position-relative">
                    <div class="bg-light-blur position-absolute  top-50 start-50 translate-middle p-1 d-flex flex-nowrap">
                        <h3 class="poppins-extrabold text-center text-nowrap text-shadow-white"><img src="./assets/jam.png" width="20px" alt=""> Kami Akan Kembali Dalam</h3>
                    </div>
                    <div class="wrapper-text-kami-akan-kembali  position-absolute  top-50 start-50 translate-middle p-1 d-flex flex-nowrap">
                        <h3 class="poppins-extrabold text-center text-nowrap text-shadow-white"><img src="./assets/jam.png" width="20px" alt=""> Kami Akan Kembali Dalam</h3>
                    </div>
                </div>
            </div>
            <div class="count-down d-flex gap-3 gap-md-5 justify-content-center mt-5">
                <div class="day d-flex flex-column align-items-center ">
                    <h1 class="fw-bold m-0" id="day">00</h1>
                    <h4 class="fw-bold">Hari</h4>
                </div>
                <div class="hour d-flex flex-column align-items-center ">
                    <h1 class="fw-bold m-0" id="hour">00</h1>
                    <h4 class="fw-bold">Jam</h4>
                </div>

                <div class="minute d-flex flex-column align-items-center ">
                    <h1 class="fw-bold m-0" id="minute">00</h1>
                    <h4 class="fw-bold">Menit</h4>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <h1 class="fw-bold m-0" id="seconds">00</h1>
                    <h4 class="fw-bold">Detik</h4>

                </div>
            </div>

        </div>
        <div class="image-construction mt-5 container-fluid p-0 m-0 d-flex flex-column align-items-center">
            <div class="machine">
                <img src="./assets/Vector-Kartun-01.png" class="w-100 h-auto object-fit-content" alt="Kartun">
            </div>
            <div class="line-construction ">
                <img src="./assets/Vector-Border-01.png" class="w-100 p-0 m-0 " alt="Border">
            </div>
        </div>


    </section>
    <section id="second" class="d-flex justify-content-center flex-column align-items-center">

        <div class="row mt-5 pt-5 container-lg">
            <div class="container-lg image-container col-lg-6 col-xxl-6 ">
                <div class="d-flex justify-content-center">
                    <img src="./assets/Card-Prakerja.png" class="col-4 img-card " style="max-width: 240px" alt="prakerja">
                    <img src="./assets/Card-ISW.png" class="col-4 img-card " style="max-width: 240px;" alt="isw">
                    <img src="./assets/Card-Skilled-Worker.png" class="col-4 img-card " style="max-width: 240px;" alt="skilled worker">
                </div>
                <div class="d-flex flex-wrap justify-content-center mt-5 ms-md-1 p-0  ">
                    <div class="col-6 d-flex d-md-block justify-content-end p-1  col-md-4 ">
                        <img src="./assets/class-1.png" class="rounded-3 mb-2 mb-md-0  card-class w-100 h-auto object-fit-cover  shadow-sm" alt="class 1">
                    </div>
                    <div class="col-6 d-flex d-md-block justify-content-start p-1  col-md-4 ">
                        <img src="./assets/class-2.png" class="rounded-3 mb-2 mb-md-0 card-class  w-100 h-auto object-fit-cover  shadow-sm" alt="class 1">
                    </div>
                    <div class="col-6 d-flex d-md-block justify-content-end p-1  col-md-4 ">
                        <img src="./assets/class-3.png" class="rounded-3 mb-2 mb-md-0 card-class  w-100 h-auto object-fit-cover  shadow-sm" alt="class 1">
                    </div>
                    <div class="col-6 d-flex d-md-block justify-content-start p-1  col-md-4 ">
                        <img src="./assets/class-4.jpg" class="rounded-3 mb-2 mb-md-0  card-class w-100 h-auto object-fit-cover  shadow-sm" alt="class 1">
                    </div>
                    <div class="col-6 d-flex d-md-block justify-content-start p-1  col-md-4 ">
                        <img src="./assets/class-6.jpg" class="rounded-3 mb-2 mb-md-0 card-class  w-100 h-auto object-fit-cover  shadow-sm" alt="class 1">
                    </div>
                    <div class="col-6 d-flex d-md-block justify-content-start p-1  col-md-4 ">
                        <img src="./assets/class-8.jpg" class="rounded-3 mb-2 mb-md-0 card-class  w-100 h-auto object-fit-cover  shadow-sm" alt="class 1">
                    </div>
                </div>

            </div>
            <div class="col-lg-6 d-flex d-lg-block justify-content-center align-items-center col-xxl-6 mt-2 mt-lg-5 pt-lg-4 mt-xxl-5 pt-xxl-5">
                <div class="w-sm-100 w-md-75 w-xxl-100 mt-5 mt-lg-0 ms-lg-5">
                    <h1 class="poppins-extrabold h1-text">Nantikan Kelas Unggulan</h1>
                    <h1 class="text-red poppins-extrabold h1-text">Kita Kompeten</h1>
                    <p>Infokan saya jika sudah selesai</p>
                    <input type="text" placeholder="Masukkan email Anda" id="email" class="form-control bg-light" />
                    <button type="button" id="btn-submit" class="btn btn-red text-white poppins-extrabold mt-5">Infokan Saya</button>
                </div>
            </div>
        </div>


        <div class="container d-flex justify-content-center mt-5">
            <div class="d-flex mt-5 border-2 border-danger">
                <a class="mx-1" href="https://www.instagram.com/kita.kompeten/" target="_blank">
                    <img src="./assets/Instagram.png" class="icon" alt="instagram">
                </a>
                <a class="mx-1" href="https://www.facebook.com/KitakompetenIndonesia" target="_blank">
                    <img src="./assets/Facebook.png" class="icon" alt="facebook">
                </a>
                <a class="mx-1" href="https://api.whatsapp.com/send?phone=6281210007012&amp;text=Hallo Admin Kita Kompeten" target="_blank">
                    <img src="./assets/WhatsApp.png" class="icon" alt="whatsapp">
                </a>
                <a class="mx-1" href="https://www.tiktok.com/@kita.kompeten" target="_blank">
                    <img src="./assets/Tiktok.png" class="icon" alt="tiktok">
                </a>
                <a class="mx-1" href="https://www.linkedin.com/company/kitakompeten/" target="_blank">
                    <img src="./assets/LinkedIn.png" class="icon" alt="linkedin">
                </a>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const timeFinish = new Date("2024-11-30").getTime()
        setInterval(() => {
            const time = new Date().getTime();
            const distance = timeFinish - time;

            let day = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hour = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
            let minute = Math.floor(distance % (1000 * 60 * 60) / (1000 * 60));
            let second = Math.floor(distance % (1000 * 60) / (1000));

            if (day < 0) {
                day = 0
            }
            if (hour < 0) {
                hour = 0
            }


            const days = document.getElementById("day")
            const hours = document.getElementById("hour")
            const minutes = document.getElementById("minute")
            const seconds = document.getElementById("seconds")
            days.innerHTML = day === 0 ? "00" : day
            hours.innerHTML = hour === 0 ? "00" : hour
            minutes.innerHTML = minute
            seconds.innerHTML = second.toString()


        }, 1000);


        document.getElementById("btn-submit").addEventListener("click", function() {
            const email = document.getElementById('email').value;
            fetch('./create.php', {
                method: 'POST',
                headers: {
                    'content-type': 'application/json',
                    'CSRF-TOKEN': "<?php echo $_SESSION['token'] ?>"
                },
                body: JSON.stringify({
                    email: email ?? ''
                })
            }).then((res) => {
                if (res.status === 400) {
                    throw new Error("Masukkan email dengan benar!")
                } else if (res.status === 419) {
                    throw new Error("Page Expired");
                }
                return res.json()
            }).then((d) => {
                Swal.fire({
                    title: 'Success!',
                    text: 'Alamat email anda sudah tersimpan!',
                    icon: 'success',
                    heightAuto: false,
                    confirmButtonText: 'OK'
                })

                document.getElementById("email").value = ""
            }).catch(e => {
                Swal.fire({
                    title: 'Error!',
                    text: `${e.message}`,
                    icon: 'error',
                    heightAuto: false,
                    confirmButtonText: 'OK'
                })
            })
        })
    </script>
</body>



</html>