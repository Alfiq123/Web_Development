<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
  return view("home", ["title" => "Home Page"]);
});

Route::get("/about", function () {
  return view("about", ["title" => "About Page"]);
});

Route::get("/posts", function () {
  return view("posts", ["title" => "Blog Page", "posts" => [
    [
      "id"     => 1,
      "slug"   => "judul-artikel-1",
      "title"  => "Judul Artikel 1",
      "author" => "Muhammad Fauzi",
      "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium vero quas exercitationem voluptatum, quibusdam labore officiis necessitatibus, molestias repudiandae cupiditate ratione possimus sit dolorum modi! Quidem neque voluptate quae labore?"
    ],
    [
      "id"     => 2,
      "slug"   => "judul-artikel-2",
      "title"  => "Judul Artikel 2",
      "author" => "Sandika Galih",
      "body"   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique cumque praesentium ad quaerat autem nemo doloribus et repellat aliquid distinctio iure animi earum, a numquam voluptate commodi. Fugiat, numquam porro."
    ],
    [
      "id"     => 3,
      "slug"   => "judul-artikel-3",
      "title"  => "Judul Artikel 3",
      "author" => "Arzi Widodo",
      "body"   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore debitis, beatae totam officia optio nobis reiciendis veniam qui aspernatur, exercitationem iste molestiae libero, ea laborum ipsa repudiandae vitae. Aperiam, quas?"
    ]
  ]]);
});

Route::get("/contact", function () {
  return view("contact", ["title" => "Contact Page"]);
});

Route::get("/posts/{slug}", function ($slug) {
  $posts = [
    [
      "id"     => 1,
      "slug"   => "judul-artikel-1",
      "title"  => "Judul Artikel 1",
      "author" => "Muhammad Fauzi",
      "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium vero quas exercitationem voluptatum, quibusdam labore officiis necessitatibus, molestias repudiandae cupiditate ratione possimus sit dolorum modi! Quidem neque voluptate quae labore?"
    ],
    [
      "id"     => 2,
      "slug"   => "judul-artikel-2",
      "title"  => "Judul Artikel 2",
      "author" => "Sandika Galih",
      "body"   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique cumque praesentium ad quaerat autem nemo doloribus et repellat aliquid distinctio iure animi earum, a numquam voluptate commodi. Fugiat, numquam porro."
    ],
    [
      "id"     => 3,
      "slug"   => "judul-artikel-3",
      "title"  => "Judul Artikel 3",
      "author" => "Arzi Widodo",
      "body"   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore debitis, beatae totam officia optio nobis reiciendis veniam qui aspernatur, exercitationem iste molestiae libero, ea laborum ipsa repudiandae vitae. Aperiam, quas?"
    ]
  ];

  $posts = Arr::first($posts, function($posts) use ($slug) { 
    return $posts["slug"] == $slug;
  });

  return view("post", ["title" => $posts["title"], "post" => $posts]);
});