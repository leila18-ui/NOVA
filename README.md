<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


[ADD BY Miss C]

**L'Utilité de chaque fichier
app/	dossier	Le cœur de ton code : contrôleurs, modèles, middleware
   -Http/	Tout ce qui concerne les requêtes HTTP
      *controllers/controller.php
       Controller.php est la classe de base dont tous tes contrôleurs hériteront. 
       C'est une classe quasi-vide (abstract class Controller {}). Elle sert de point d'extension. Tu n'auras pas besoin d'y toucher, mais tes contrôleurs feront extends Controller. 

   -Models/	Les modèles Eloquent (ex: User.php par défaut)
        *La classe User correspond à la table users (pluriel automatique)
   -Providers/	Services de démarrage (rare à modifier en apprentissage)
   Http/ : C'est le point d'entrée de toutes les requêtes web. Il contient la logique de traitement des requêtes HTTP.

Controllers/ : Les contrôleurs qui orchestrent la logique (ex: ProductController pour gérer l'affichage des livres).

Middleware/ : Les filtres qui s'exécutent avant ou après une requête (ex: vérifier si un utilisateur est connecté).

Requests/ : Les classes de validation de formulaires (Form Requests) pour garder tes contrôleurs propres.

Models/ : Le cœur de l'interaction avec la base de données. Chaque classe ici (ex: Book, User) représente une table et permet d'interroger et de manipuler ses données via Eloquent, l'ORM de Laravel.

Providers/ : Les fournisseurs de services qui "démarrent" ton application (enregistrement de services, d'événements, etc.). En apprentissage, tu n'auras presque jamais besoin d'y toucher

bootstrap/	dossier	Démarrage de l'application (ne pas toucher)
config/	dossier	Fichiers de configuration (base de données, mail, etc.)
database/	dossier	Migrations, seeders, base SQLite
public/	dossier	Seul dossier exposé au navigateur : index.php, CSS, JS, images
resources/	dossier	Vues Blade, CSS/JS non compilés, traductions
routes/	dossier	Les URLs de ton site : web.php, console.php
storage/	dossier	Logs, cache, sessions, fichiers uploadés
tests/	dossier	Tests automatisés
vendor/	dossier	Dépendances Composer (ne pas toucher)
.env	fichier	Configuration locale (base de données, clé secrète)
.env.example	fichier	Modèle de .env versionnable
artisan	fichier	Ta baguette magique : php artisan ...
composer.json	fichier	Liste des dépendances PHP
package.json	fichier	Liste des dépendances JS
vite.config.js	fichier	Config du bundler JS
README.md	fichier	Documentation

public/ est le seul dossier que le navigateur voit. C'est pour ça qu'on y met le index.php d'entrée et les assets.

vendor/ et node_modules/ ne se modifient jamais à la main. Composer et npm les gèrent.
**
.env contient tes secrets. On ne le versionne jamais dans Git (il est dans .gitignore par défaut).





book_category

Cette table sera notre table pivot.

Une table pivot sert à enregistrer les associations entre deux tables.
foreignId() : crée une colonne destinée à être une clé étrangère.
constrained() : établit la référence vers une autre table.
primary() : définit la clé primaire, ici composée de deux colonnes.

A. $book->categories();
Cette instruction permet d'accéder à la relation entre le livre et ses catégories.

Mais elle ne crée pas de nouvelle association.
B. $book->categories()->attach($categoryId);
Bonne réponse
C'est celle qu'on utilise pour associer un livre à une catégorie.
- $book : le livre concerné.
- categories() : sa relation avec les catégories.
- attach() : ajoute une association dans la table pivot.
- $categoryId : l'identifiant de la catégorie.


attach()	Ajouter une association
detach()	Supprimer une association
sync()	Remplacer les associations existantes par celles indiquées

Bilan de notre phase 4
Models validés
- Model Book : créé.
- Model Category : créé.
- $fillable : compris.
- belongsToMany() : compris.
- attach() : compris.

Book::all()	Récupère tous les livres
Book::find(1)	Récupère le livre dont l'identifiant est 1
Book::delete()	Ce n'est pas une utilisation valide pour supprimer tous les livres directement

compact('books') transmet la variable $books à ta vue.

$book : notre livre.
-> : permet d'accéder à une propriété de l'objet.
title : le titre du livre.Route::get	Réceptionne une requête GET
/books	Adresse demandée
BookController::class	Controller à utiliser
index	Méthode à exécuter

Créer un Controller.
Récupérer des données avec Book::all().
Transmettre des données à une View avec compact().
Afficher des données avec Blade ({{ }}).
Parcourir plusieurs livres avec @foreach.
Relier une Route à un Controller.
Category : nous travaillons avec le Model Category.
with('books') : nous demandons également les livres associés à chaque catégorie.
get() : récupère les résultats.
asset() permet à Laravel de générer le chemin vers un fichier situé dans public.
@yield('title') : permet à chaque page de définir son propre titre.
<header> : accueillera notre navigation.
<main> : accueillera le contenu spécifique de chaque page.
<footer> : accueillera notre pied de page.
@yield('content') : indique à Laravel où afficher le contenu de chaque page.
@vite(...) : permet de charger les fichiers CSS et JavaScript gérés par Vite.
Category::where() recherche une catégorie portant ce nom.
first() récupère la première correspondance.
categories() utilise la relation définie dans ton Model Book.
attach() enregistre l'association dans la table intermédiaire.
