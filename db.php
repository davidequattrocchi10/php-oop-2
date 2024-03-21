<?php
require_once __DIR__ . '/Models/TypeProduct.php';
require_once __DIR__ . '/Models/Animal.php';
// Create an array of products
$all_products = [
    new FoodDog('https://www.area-dog.it/wp-content/uploads/2020/11/area-wild-manzo-salmone-1.jpg', 'Area Dog', 30, 'German Shepherd', 'Large', 'Area Wild', '
    Beef-Salmon Flavor'),
    new FoodDog('https://shop-cdn-m.mediazs.com/bilder/6/800/1_80735_pla_royalcanin_miniadult_8kg_hs_01_7_6.jpg', 'Royal Canin', 25, 'Chihuahua', 'Small', 'Nutrition Health', 'Chicken Flavor'),
    new ToyDog('https://img.kwcdn.com/product/open/2023-09-01/1693555728350-d7329d04d1d24c4c818b29fac7711767-goods.jpeg?imageView2/2/w/800/q/70/format/webp', 'Dog Toy Ball', 15, '
    All breeds', 'Medium', 'Rubber', true),
    new FoodCat('https://m.media-amazon.com/images/I/71+n3ylvFjL._AC_SX679_PIbundle-8,TopRight,0,0_SH20_.jpg', 'Bolas de pelo', 22, 'Persian Cat', 'Small', 'Ultima', 'Turkey Flavor'),
];

$all_animals = [
    new Dog('https://media.istockphoto.com/id/806942944/photo/german-shepherd-dog.jpg?s=612x612&w=0&k=20&c=rm9Gt3YgnBxtPGbG2U1HdCj7vlfhE0T3fBJN4hZ2KOk=', 'German Shepherd'),
    new Dog('https://www.greenme.it/wp-content/uploads/2022/08/chihuahua-1.jpg', 'Chihuahua'),
    new Cat('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRCgJyaR5Lx97wIH47JVPyGRuMJLubPxPfyg1whNBLhS71TQvUb', 'Persian Cat'),
    new Cat('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRk_PRaHXvBgXig9pxNH3R_rSxwBFf-5sXOslDjZ-nBVEYZ61KC', 'American Shorthair')

];
