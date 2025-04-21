# Viking Violet - Hall de la Mode

**Viking Violet** est une application web développée avec Laravel, Blade, PHP, JavaScript et Bootstrap.  
Elle permet aux utilisateurs de créer, visualiser et partager des builds personnalisés autour d’un thème inspiré de l’univers World of Warcraft.

---

## 🚀 Aperçu du Projet

Viking Violet offre une interface interactive pour :

- Créer des builds personnalisés (titre, description, image)
- Gérer son profil (photo de profil, informations utilisateur)
- Consulter des builds publics partagés par d'autres utilisateurs
- Accéder à un arbre de talents dynamique (à venir)

---

## 🧱 Technologies utilisées

| Langage       | Utilisation principale                |
|---------------|---------------------------------------|
| **PHP**       | Backend (Laravel 11)                  |
| **Blade**     | Moteur de templates                   |
| **CSS**       | Styles personnalisés + Bootstrap 5    |
| **JavaScript**| Interaction dynamique (talents, menus)|

---

## ⚙️ Installation

1. **Cloner le projet** :
   ```bash
   git clone https://github.com/Pryiape/viking.git
   cd viking

Installer les dépendances PHP et JS :

composer install
npm install

Créer le fichier d’environnement :
cp .env.example .env
php artisan key:generate

Configurer la base de données dans .env puis exécuter les migrations :
php artisan migrate
php artisan storage:link

🧪 Utilisation locale
Lancer le serveur Laravel :
php artisan serve
Compiler les assets :
npm run dev

🧰 Fonctionnalités
Création et modification de builds avec image

Gestion du profil utilisateur (nom, email, photo)

Galerie de builds publics

Authentification et inscription personnalisée

Documentation API (générée avec Scribe)
📄 Documentation API
La documentation des endpoints est générée automatiquement avec Scribe.
php artisan scribe:generate
Elle est disponible localement sur :
http://localhost:8000/docs
🤝 Contribuer
Merci de considérer une contribution au projet Viking Violet !
Les pull requests sont les bienvenues. Assurez-vous de suivre les bonnes pratiques Laravel.

🧑‍⚖️ Code de Conduite
Pour garantir un environnement respectueux, merci de suivre notre Code de Conduite (fichier CODE_OF_CONDUCT.md si existant).

🛡️ Sécurité
Si vous découvrez une vulnérabilité de sécurité, merci d’en informer immédiatement par email :
📧 bernardlereceveur@gmail.com
Nous traiterons les incidents en priorité.

📄 Licence
Ce projet est distribué sous la licence MIT.