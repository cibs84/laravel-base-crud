<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comics_array = Comic::all();

        // Prendo il parametro che viene passato dalla destroy quando viene eseguita la cancellazione
        $request_data = $request->all();
        $deleted = $request_data;

        $data = [
            'comics_array' => $comics_array,
            'deleted' => $deleted
        ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // Valido i dati inseriti nel form
        $request->validate($this->getValidationRules());
        
        // Assegno i dati del form
        $form_data = $request->all();

        // Creo nuova riga in cui salvo i dati del form nel database
        $new_comic = new Comic();
        // $new_comic->title = $form_data['title'];
        // $new_comic->description = $form_data['description'];
        // $new_comic->thumb = $form_data['thumb'];
        // $new_comic->price = $form_data['price'];
        // $new_comic->series = $form_data['series'];
        // $new_comic->sale_date = $form_data['sale_date'];
        // $new_comic->type = $form_data['type'];

        // Metodo alternativo al codice commentato sopra per salvare i dati del form nel database 
        $new_comic->fill($form_data);

        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id, 'created' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $comic = Comic::findOrFail($id);

        // Prendo i parametri che vengono passati da store quando viene creato un nuovo fumetto e da update quando viene modificato.
        // Assegniamo null come valore SE il parametro non ci viene passato e quindi non è settato, altrimenti visualizziamo un errore relativo alla/e variabile/i non definite
        $request_data = $request->all();
        $created = isset($request_data['created']) ? $request_data['created'] : null;
        $updated = isset($request_data['updated']) ? $request_data['updated'] : null;

        $data = [
            'comic' => $comic,
            'created' => $created,
            'updated' => $updated
        ];

        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        $data = [
            'comic' => $comic
        ];

        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Valido i dati inseriti nel form
        $request->validate($this->getValidationRules());

        // Assegno i dati del form
        $form_data = $request->all();

        $comic_to_update = Comic::findOrFail($id);
        $comic_to_update->update($form_data);
       
        return redirect()->route('comics.show', ['comic' => $comic_to_update->id, 'updated' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic_to_delete = Comic::findOrFail($id);
        $comic_to_delete->delete();

        $data = [
            'deleted' => true
        ];

        return redirect()->route('comics.index', $data);
    }

    protected function getValidationRules() {
        return [
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:50000',
            'thumb' => 'required|url|max:50000',
            'price' => 'numeric|between:0,3000',
            'series' => 'string|max:50',
            'sale_date' => 'date',
            'type' => 'string|max:50'
        ];
    }
}
