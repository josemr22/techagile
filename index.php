<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Agile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body id="bod">
    <div class="row m-0 overflow-hidden">
        <div 
            class="animate__animated animate__fadeInLeft animate__fast col-6 vh-100 d-flex justify-content-center align-items-center p-0 overflow-hidden b1" 
            id="left">
            <h1 class="d-none d-sm-block">TECNOLOGÍA</h1> 
            <h1 class="d-sm-none tel">TECNOLOGÍA</h1> 
        </div>
        <div 
            class="animate__animated animate__fadeInRight animate__fast col-6 vh-100 d-flex justify-content-center align-items-center p-0 overflow-hidden b2" 
            id="right">
            <h1 class="d-none d-sm-block">INGENIERÍA</h1> 
            <h1 class="d-sm-none tel">INGENIERÍA</h1> 
        </div>
    </div>
    <script>
        const left = document.querySelector('#left');
        const right = document.querySelector('#right');
        const body = document.querySelector('body');
        let router = false;
        const navigate = () => {
            body.classList.add('b2');
            left.classList.add('d-none');
            right.classList.remove('col-6');
            right.classList.add('col-12');
            right.classList.add('vw-100');
            right.classList.add('animate__slideInRight');
            router = true;
        }
        const navigate2 = () => {
            body.classList.add('b1');
            left.classList.remove('col-6');
            left.classList.add('col-12');
            left.classList.add('vw-100');
            left.classList.add('animate__slideInLeft');
            router = true;
        }
        right.addEventListener('click', navigate);
        left.addEventListener('click', navigate2);
        right.addEventListener('animationend', () => {
            if (router) {
                console.log('ir a ingeniería');
                setTimeout(() => {
                    window.location = 'ingenieria.php'
                }, 1000);
            }
        });
        left.addEventListener('animationend', () => {
            if (router) {
                console.log('ir a tecnología');
                setTimeout(() => {
                    window.location = 'tecnologia.php'
                }, 1000);
            }
        });
    </script>
</body>
</html>