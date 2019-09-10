<?php

$articles = [

  ["img" => "img/img-phone-01.jpg",
   "h2" => "Nombre del Producto",
   "p" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
   "a" => "ver más"
  ],
  ["img" => "img/img-phone-02.jpg",
   "h2" => "Nombre del Producto",
   "p" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
   "a" => "ver más"
  ],
  ["img" => "img/img-phone-03.jpg",
   "h2" => "Nombre del Producto",
   "p" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
   "a" => "ver más"
  ],
  ["img" => "img/img-phone-01.jpg",
   "h2" => "Nombre del Producto",
   "p" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
   "a" => "ver más"
  ],
  ["img" => "img/img-phone-02.jpg",
   "h2" => "Nombre del Producto",
   "p" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
   "a" => "ver más"
  ],
  ["img" => "img/img-phone-03.jpg",
   "h2" => "Nombre del Producto",
   "p" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
   "a" => "ver más"
  ]

];

foreach($articles as $key => $value){ ?>

  <article class="producto"><!-- Contenedor de cada producto -->
    <img class="main-photo" src="<?= $value['img'] ?>" alt="">
    <h2 class="name">Nombre del Producto</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <a class="more" href="#">ver más</a>
  </article>

<?php } ?>
