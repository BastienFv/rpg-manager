Objectifs :

Développer une application web avec Laravel
 

Sujet : 

Au cours de ce mini-projet, vous allez développer en binôme une application web de gestion pour jeu de rôle. 

 

Cette application doit proposer les fonctionnalités suivantes :


1. L'utilisateur (joueur) peut se connecter et s'inscrire, en utilisant une adresse email et un mot de passe de minimum 8 caractères et comportant une lettre, un chiffre et un symbole. Lors de l'inscription, l'utilisateur doit également saisir son prénom, son nom et choisir un pseudo unique.


2. Le joueur peut créer un personnage en saisissant un nom, une description et en choississant une spécialité parmi les suivantes : "Guerrier", "Mage", "Druide", "Assassin", "Berserker", "Archer".

Lors de la création, les personnages doivent se voir attribuer des valeurs (statistiques) aléatoire comprises entre 0 et 14 pour chaque caractéristique: MAG (Magie), FOR (Force), AGI (Agilité), INT (intelligence). Il doivent également se voir attribuer un nombre de points de vie (PV) compris entre 20 et 50.

Le joueur ne peut pas modifier manuellement les valeurs statistiques ou les PV. Il peut relancer une génération aléatoire autant de fois qu'il le souhaite avant de valider le personnage. (Ainsi il peut choisir la spécialité appropriée.)

 

3. Le joueur peut consulter, modifier et supprimer ses personnages, cependant les statistiques et PV ne peuvent pas être modifiées.

 

4. Le joueur doit pouvoir créer, consulter, modifier et supprimer des groupes en leur donnant un nom, une description et une nombre de places. Chaque groupe pourra contenir plusieurs personnage.

Pour cela, le joueur peut ajouter ou supprimer des personnages qu'il a créé au sein du groupe.

 

5. Le joueur doit pouvoir consulter les personnages des autres joueurs sous forme d'un "catalogue" général. Il doit pouvoir filtrer les personnages par spécialité, par joueur ou effectuer une recherche par nom.

 

6. Le joueur doit pouvoir inviter un personnage d'un autre joueur dans un équipe, le joueur ayant créé ce personnage pourra alors accepter ou refuser de rejoindre l'équipe. Une fois que son personnage a rejoint une équipe, il doit pouvoir consulter les détails de l'équipe depuis son espace sans pour autant pouvoir la modifier.

 

BONUS:

- Ajouter un upload d'image pour chaque personnage.

- Ajouter un bouton permettant d'augmenter le niveau d'un personnage (cela lui donne +5 PV et aléatoirement entre 0 et 2 points supplémentaires par statistique).


-----------------------------------------------------------------------------------------------------------------------------------------------------------------------


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


dsfsdfds
