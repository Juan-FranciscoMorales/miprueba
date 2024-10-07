<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post o noticias</title>
</head>
<body>
    <?php
      class Post{
        private string $title;
        private string $content;
        private $tags;

        private int $likes;

        public function __construct(string $title, string $content ,$tags=[], int $likes){
            $this->title = $title;
            $this->content = $content;
            $this->tags = $tags;
            $this->likes = $likes;
        }
        
        public function getTitle(): string{
            return $this->title;
        }
        public function getContent(): string{
            return $this->content;
        }
        public function getTags(): array{   
            return $this->tags;
            
        }
        public function getLikes(): int{
            return $this->likes;
        }


      } 
      class Tag {
      private string $name;

      public function __construct(string $name) {
          $this->name = $name;
      }

      public function getName() {
          return $this->name;
      }
  }


      function obtenerPost(){
        $arrayPost = [
      new Post("Titulo del primer post","Esto es el contendio del primer post de mi blog. Aqui puedes escribir sobre cualquier tema que te interese", [new Tag("Tecnología"), new Tag("Programación"), new Tag("HTML")] , 5) ,
      new Post("Titulo del segundo post","Esto es el contendio del segundo post. Puedes escribir sobre cualquier tema que te interese", [new Tag("Tecnología"), new Tag("Programación"), new Tag("HTML")] , 7) ,
      new Post("Titulo del tercer post","Contendio del tercer post de mi blog. Aqui puedes compartit tis ideas, experiencias o cualquier cosa que quieras", [new Tag("Tecnología"), new Tag("Programación"), new Tag("HTML")]  , 4 ) ,
      ] ;
      return $arrayPost;
    }

      
    ?>
    
</body>
</html>