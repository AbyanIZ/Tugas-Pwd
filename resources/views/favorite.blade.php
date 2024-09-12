<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Favorit</title>
    <link rel="stylesheet" href="./css/fav.css">
</head>
<body>
    <div class="favorites-container">
        <div class="header">
            <button class="back-button">← Film favorit</button>
        </div>
        <?php
        // Example data
        $movies = [
            [
                "title" => "Jurassic World",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium quidem nihil quis, explicabo ut velit nostrum voluptate voluptatem vitae.",
                "comments" => 13,
                "image" => "Screenshot (184).png"
            ],
            // Add more movies here
        ];

        // Repeat movie data for demonstration
        for ($i = 0; $i < 4; $i++) {
            foreach ($movies as $movie) {
                echo '
                <div class="movie-item">
                    <div class="movie-image">
                        <img src="' . $movie["image"] . '" alt="' . $movie["title"] . '">
                    </div>
                    <div class="movie-info">
                        <h2>' . $movie["title"] . '</h2>
                        <p>' . $movie["description"] . '</p>
                        <a href="#">(' . $movie["comments"] . ' Comments)</a>
                    </div>
                    <div class="bookmark">
                        <span class="bookmark-icon">🔖</span>
                    </div>
                </div>
                ';
            }
        }
        ?>
    </div>
</body>
</html>
