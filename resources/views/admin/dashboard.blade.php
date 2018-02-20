@extends('admin.layouts.app')

@section('title')
Dashboard
@endsection

@section('content') 
    <div class="row">
        <div class="col m4 s12">
            <div class="card-panel card-stat light-blue teal accent-3 hoverable">
                <p><i class="medium material-icons">supervisor_account</i> Users</p>
                <p>29</p>
            </div>
        </div>
        <div class="col m4 s12">
            <div class="card-panel card-stat orange lighten-2 hoverable">
                <p><i class="medium material-icons">library_books</i> Articles</p>
                <p>50</p>
            </div>
        </div>
        <div class="col m4 s12">
            <div class="card-panel card-stat purple accent-4 hoverable">
                <p><i class="medium material-icons">assessment</i> Résultats</p>
                <p>100</p>
            </div>
        </div>
    </div>

    <!-- creations table -->
    <div class="col s12">
        <div class="card-panel grey lighten-4 hoverable">
            <h2>Liste des créations <i class="material-icons medium">shopping_basket</i></h2>
            <table class="bordered highlight">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Date de création</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Panier 1</td>
                        <td>Description du panier ....</td>
                        <td>6/12/2016</td>
                        <td>
                            <a href="#"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                            <a href="#"><i class="material-icons red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="supprimer">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Panier 2</td>
                        <td>Description du panier ....</td>
                        <td>7/1/2017</td>
                        <td>
                            <a href="#"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                            <a href="#"><i class="material-icons red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="supprimer">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Panier 3</td>
                        <td>Description du panier ....</td>
                        <td>4/2/2017</td>
                        <td>
                            <a href="#"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                            <a href="#"><i class="material-icons red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="supprimer">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Panier 4</td>
                        <td>Description du panier ....</td>
                        <td>25/3/2017</td>
                        <td>
                            <a href="#"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                            <a href="#"><i class="material-icons red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="supprimer">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Panier 5</td>
                        <td>Description du panier ....</td>
                        <td>4/6/2017</td>
                        <td>
                            <a href="#"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                            <a href="#"><i class="material-icons red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="supprimer">delete</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Panier 6</td>
                        <td>Description du panier ....</td>
                        <td>4/8/2017</td>
                        <td>
                            <a href="#"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                            <a href="#"><i class="material-icons red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="supprimer">delete</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Articles table -->
    <div class="col s12">
        <div class="card-panel grey lighten-4 hoverable">
            <h2>Liste des articles <i class="material-icons medium">library_books</i></h2>
            <table class="bordered highlight">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre de l'article</th>
                        <th>Auteur</th>
                        <th>Date de création</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#">Titre de l'article</a></td>
                        <td>Marc</td>
                        <td>1/2/2017</td>
                        <td><a href="#"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                            <a href="#"><i class="material-icons red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="supprimer">delete</i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="#">Titre de l'article</a></td>
                        <td>Marc</td>
                        <td>1/2/2017</td>
                        <td><a href="#"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                            <a href="#"><i class="material-icons red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="supprimer">delete</i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="#">Titre de l'article</a></td>
                        <td>Marc</td>
                        <td>1/2/2017</td>
                        <td><a href="#"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                            <a href="#"><i class="material-icons red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="supprimer">delete</i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><a href="#">Titre de l'article</a></td>
                        <td>Marc</td>
                        <td>1/2/2017</td>
                        <td><a href="#"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                            <a href="#"><i class="material-icons red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="supprimer">delete</i></a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><a href="#">Titre de l'article</a></td>
                        <td>Marc</td>
                        <td>1/2/2017</td>
                        <td><a href="#"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                            <a href="#"><i class="material-icons red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="supprimer">delete</i></a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><a href="#">Titre de l'article</a></td>
                        <td>Marc</td>
                        <td>1/2/2017</td>
                        <td><a href="#"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                            <a href="#"><i class="material-icons red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="supprimer">delete</i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
