<!DOCTYPE html>
<html lang="en">

<head>
    <title>Red Social</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Mi Blog</h1>
    </header>
    <aside>
        <nav>
            <a href="?id=inicio">Inicio</a>
            <a href="?id=Sobre mi">Sobre mí</a>
            <a href="?id=Blog">Blog</a>
            <a href="?id=Contacto">Contacto</a>
        </nav>
    </aside>
    <main>
        <section>
        <?php
        require_once("Post.php");


        echo "<section>";
        foreach (obtenerPost() as $post) {
            echo "<article>
                <h2>{$post->getTitle()}</h2>
                <p>{$post->getContent()}</p>
                <p>Tags:";
            foreach ($post->getTags() as $tag) {
                echo "#" . $tag->getName();
            }
            echo "</p>";
            echo "<p>Likes: {$post->getLikes()}</p>
                </article>";
        }
        echo "</section>";

        ?>
        </section>
    </main>



</body>

</html>