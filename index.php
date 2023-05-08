<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Custom Style -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="app">
        <header>
            <div class="header-container">
                <img src="https://m.media-amazon.com/images/I/51rttY7a+9L.png" alt="">
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row row-cols-4 justify-content-between align-items-center gap-5 rounded mt-5">
                    <div v-for="(disc, index) in dischi" :key="index" class="col text-center text-white" @click="showDetails(disc)">
                        <img :src="disc.poster" alt="immagine poster" class="mb-3">
                        <h5>{{ disc.title }}</h5>
                        <p>{{ disc.author }}</p>
                        <span>{{ disc.year }}</span>
                    </div>
                </div>

            </div>

            <!-- CLICK SUL BOTTONE -->
            <div class="banner-container text-white d-flex justify-content-center align-items-center rounded" v-if="selectedDisc">
                <div class="banner text-center">
                    <img :src="selectedDisc.poster" alt="immagine poster" class="mb-3">
                    <h5>{{ selectedDisc.title }}</h5>
                    <p>{{ selectedDisc.author }}</p>
                    <span>{{ selectedDisc.year }}</span>
                </div>
                <button type="button" class="btn-close border border-dark p-2" aria-label="Close" @click="hideDetails"></button>
            </div>
        </main>

    </div>
    </div>

    <script src="script.js"></script>
</body>

</html>