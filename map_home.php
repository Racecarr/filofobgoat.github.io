<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #000000; /* Map 3 and 6 dont work */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }	
        .gallery {
            display: grid;
            grid-template-columns: repeat(4, 1fr); 
            gap: 30px; 
            width: 100%; 
            max-width: 1200px; 
        }
        .image-block {
            background-color: #000000; 
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150px;
        }
		.image-title {
			color: white;
		    font-size:14px;
		    text-align: center;
		    margin-bottom: 5px;
		    display: block;
		}
        img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="gallery">
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=1">
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/46468218-feda-4974-a0c4-7b49b5e7785e/dc9k6xl-a71624f0-d870-4e8c-8098-889dafefeb50.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzQ2NDY4MjE4LWZlZGEtNDk3NC1hMGM0LTdiNDliNWU3Nzg1ZVwvZGM5azZ4bC1hNzE2MjRmMC1kODcwLTRlOGMtODA5OC04ODlkYWZlZmViNTAuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.X5XwEqNielUVkbuA3hCEc9KGpLaxNgpYoP6BftPHqzk" alt="Description of Image 1">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=2">
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/125ace30-ef27-4e9a-8fb2-210650a3e87c/d9zxso0-6b4f2ef5-4e1d-488b-808f-321bbc0e5415.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzEyNWFjZTMwLWVmMjctNGU5YS04ZmIyLTIxMDY1MGEzZTg3Y1wvZDl6eHNvMC02YjRmMmVmNS00ZTFkLTQ4OGItODA4Zi0zMjFiYmMwZTU0MTUuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.Jh46iHQJP_C_hIq5Ffu9Tm3ZpsymgJL6BZTJovaP90A" alt="Description of Image 2">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=101">
                <img src="https://i.imgur.com/Evb2Bp4.gif" alt="Description of Image 3">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=4">
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/902827f1-23ee-484f-b383-5ba4988de668/df75ges-90a1af66-e4ef-4a40-bc87-57d3c49278b1.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzkwMjgyN2YxLTIzZWUtNDg0Zi1iMzgzLTViYTQ5ODhkZTY2OFwvZGY3NWdlcy05MGExYWY2Ni1lNGVmLTRhNDAtYmM4Ny01N2QzYzQ5Mjc4YjEuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.MZNXkawfJdOw8CLAExn3k9_UmZAZ44nElGeC1pqzw3A" alt="Description of Image 4">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=5">
                <img src="https://steamuserimages-a.akamaihd.net/ugc/643244950447706731/95AA5DA4FDE90236B290C42B494291DEBF311706/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" alt="Description of Image 5">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=100">
                <img src="https://lh4.googleusercontent.com/proxy/-hJutqkIQ-3ZdmQVZ1iNuFGUacj5ceFsXV6C-OsKy97x-_e7VX8bhYZ7dDBBsrCOjQ" alt="Description of Image 6">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=7">
                <img src="https://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-1.gif" alt="Description of Image 7">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=8">
                <img src="https://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-6.gif" alt="Description of Image 8">
            </a>
        </div>
        <!-- Repeat the same structure for all 22 image blocks -->
        
        <!-- Additional blocks -->
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=9">
                <img src="https://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-27.gif" alt="Description of Image 9">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=10">
                <img src="https://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-30.gif" alt="Description of Image 10">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=11">
                <img src="https://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-32.gif" alt="Description of Image 11">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=12">
                <img src="https://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-50.gif" alt="Description of Image 12">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=13">
                <img src="https://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-39.gif" alt="Description of Image 13">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=42">
                <img src="https://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-42.gif" alt="Description of Image 14">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=14">
                <img src="https://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-5.gif" alt="Description of Image 15">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=25">
                <img src="https://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-25.gif" alt="Description of Image 16">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=16">
                <img src="https://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-12.gif" alt="Description of Image 17">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=17">
                <img src="https://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-16.gif" alt="Description of Image 18">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=18">
                <img src="https://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-36.gif" alt="Description of Image 19">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=19">
                <img src="https://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-8.gif" alt="Description of Image 20">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=21">
                <img src="https://www.rotational.co.uk/assets/images/yMLAGVx.gif" alt="Description of Image 21">
            </a>
        </div>
        <div class="image-block">
            <a href="../ドキュメント/Unnamed Site 2/map.php?bg=22">
                <img src="https://images.squarespace-cdn.com/content/v1/5d7b921aa20ea468a889fb20/1568380647329-ZNDIV6NMKQUSLWRH6FVH/nYuVFMIa.gif" alt="Description of Image 22">
            </a>
        </div>
    </div>
</body>
</html>
