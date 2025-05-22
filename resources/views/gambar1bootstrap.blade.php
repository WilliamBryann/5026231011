<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
        #sidebar {
            transition: width 0.3s ease, padding 0.3s ease;
            background-color: #4b759e;
            color: white;
            width: 280px;
            padding: 16px;
        }
        #sidebarToggle:checked ~ main #sidebar {
            width: 0 !important;
            padding: 0 !important;
            overflow: hidden;
            border: none;
        }
        #sidebarToggle:checked ~ main #mainContent {
            width: 100% !important;
        }
    </style>
</head>
<body>
    <input type="checkbox" id="sidebarToggle" hidden>
    <label for="sidebarToggle" class="toggle-label position-absolute mt-4" style="z-index: 1000; cursor: pointer; margin-left: 28%">
        <img src="https://img.icons8.com/ios-filled/50/menu--v1.png" alt="menu" width="20" height="20">
    </label>
    <main class="d-flex" style="height: 100vh;">
        <div id="sidebar" class="d-flex flex-column h-100 flex-shrink-0 border">
            <div class="h-75 d-flex flex-column justify-content-between">
                <div>
                    <div class="d-flex align-items-center">
                        <img src=".\image\William Bryan Pangestu.png" alt="profile pict" class="rounded-circle mr-2" width="50" height="50">
                        <div>
                            <p class="mb-0">William Bryan</p>
                            <p class="mb-0">williambryan@gmail.com</p>
                        </div>
                    </div>
                    <div class="mt-4 mb-3 d-flex align-items-center">
                        <img src="https://img.icons8.com/ios-filled/50/document.png" width="20" height="20" class="mr-2">
                        <p class="mb-0">Helperlog</p>
                    </div>
                    <div class="mb-3 d-flex align-items-center">
                        <img src="https://img.icons8.com/ios-filled/50/search.png" width="20" height="20" class="mr-2">
                        <p class="mb-0">Helperfind</p>
                    </div>
                </div>
                <button class="btn btn-primary w-100" style="background-color: #a1bcd8; border: none;">Log Out</button>
            </div>
        </div>
        <div id="mainContent" class="w-75 h-100 p-4">
            <div class="d-flex align-items-center">
                <img src="https://img.icons8.com/ios-filled/50/back.png" width="20" height="20" class="mr-2">
                <h4 class="mb-0 font-weight-bold">Detail Footballer</h4>
            </div>
            <div class="d-flex mt-3">
                <div class="w-50 p-3">
                    <img src="https://imgsrv2.voi.id/rD9gUYkSxJaJ0hjxLnHqLIRu90y0oIc1FRG1Sw-o3ac/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy80NzEyNjUvMjAyNTAzMjQyMDQwLW1haW4uY3JvcHBlZF8xNzQyODIzNjUyLmpwZw.jpg" alt="Gambar Utama" class="img-fluid rounded border" style="width: 100%; height: 440px; object-fit: cover;">
                </div>
                <div class="w-50 p-3 d-flex flex-column justify-content-around">
                    <div>
                        <h4 class="font-weight-bold">Cristiano Ronaldo</h4>
                        <p>Attacker</p>
                    </div>
                    <div
                    class="border rounded d-flex justify-content-center align-items-center p-2 mt-3"
                  >
                    <div
                      class="d-flex w-50 justify-content-center align-items-center flex-column"
                    >
                      <h5 class="mb-0 font-weight-bold">4</h5>
                      <p class="mb-0">Tahun Pengalaman</p>
                    </div>
                    <div
                      class="border mx-2"
                      style="height: 60px; background-color: #a1bcd8"
                    ></div>
                    <div
                      class="d-flex w-50 justify-content-center align-items-center flex-column"
                    >
                      <div class="d-flex justify-content-center align-items-center">
                        <img
                          src="https://img.icons8.com/ios-filled/50/star.png"
                          alt="star"
                          width="20"
                          height="20"
                          class="mr-2"
                        />
                        <h5 class="font-weight-bold mb-0">4.6</h5>
                      </div>
                      <p class="mb-0">Rating</p>
                    </div>
                  </div>
                    <div class="border" style="height: 2px; background-color: #a1bcd8;"></div>
                    <div class="border rounded p-2">
                        <div class="rounded p-2" style="background-color: #b5bdc6;">
                            <p class="font-weight-bold ml-4 mb-0">Biodata</p>
                        </div>
                        <div class="p-2 d-flex">
                            <div class="w-25">
                                <p>Keahlian 1</p>
                                <p>Keahlian 2</p>
                                <p>Keahlian 3</p>
                                <p>Keahlian 4</p>
                            </div>
                            <div class="w-75">
                                <p>: Free Kick</p>
                                <p>: Tendangan Salto</p>
                                <p>: Power Shot</p>
                                <p>: Heading</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary w-100">Edit Data</button>
                </div>
                
            </div>
            <div class="d-flex justify-content-start align-items-start w-100">
                <div class="w-50 rounded d-flex justify-content-start align-items-start">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Cristiano_Ronaldo%2C_2023.jpg" class="rounded border" style="width: 33%; height: 300px; object-fit: cover;">
                    <img src="https://cdn0-production-images-kly.akamaized.net/DQZC1xupHlnFKf0YhHQyQQBXJ_8=/800x1066/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4944231/original/013610800_1726295939-000_36G88LG.jpg" class="rounded border mx-2" style="width: 33%; height: 300px; object-fit: cover;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Cristiano_Ronaldo_Portugal.jpg/220px-Cristiano_Ronaldo_Portugal.jpg" class="rounded border" style="width: 33%; height: 300px; object-fit: cover;">
                </div>
            </div>
    </main>
</body>
</html>
