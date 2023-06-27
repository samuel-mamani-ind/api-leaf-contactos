<?php

app()->get("/", function () {
    response()->json(["message" => "Congrats!! You're on Leaf API"]);
});

/* CONSULTA TODOS LOS REGISTROS (GET) */
app()->get("/contactos", 'ContactosController@index');
//CONSULTRA UN REGISTRO CON UN ID (GET)
app()->get("/contactos/{id}", 'ContactosController@consultar');
//INSERTA UN REGISTRO (POST)
app()->post("/contactos", 'ContactosController@agregar');
//BORRA UN REGISTRO (DELETE)
app()->delete("/contactos/{id}", 'ContactosController@borrar');
//ACTUALIZAR UN REGISTRO (PUT)
app()->put("/contactos/{id}", 'ContactosController@actualizar');



