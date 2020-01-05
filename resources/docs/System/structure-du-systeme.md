Structure du système
====================

- [Structure laravel](#structure-laravel)
- [Infrastructure 2019](#Infrastructure)

<a name="structure-laravel"></a>
## Structure laravel

| Dossier   | Fonction |
|   :-   |  :-  |
| **app** | Dossier du framework et des providers |
| **Droit**   | Dossier principal des classes utilisées pour l'accès à la base de données ([repository pattern](http://shawnmc.cool/the-repository-pattern)) et services. |
| **Http/Controllers** | Les différents domaines (Admin backend, frontend, Api etc) sont regroupés |
| **public**  | css/js/images/fichiers |
| **config**  | fichiers de configurations |
| **Ressources**  | Templates des vues avec blade |
| **tests**  | tests unitaires avec phpunit |
| **vendor**  | composants installés via composer |

----------

<a name="Infrastructure"></a>

# Infrastructure 2019
## Situation actuelle
### Hébergement : Cyon.ch https://www.cyon.ch

|         | Stockage | Bases de données | Domaines                                                     |
| ------- | -------- | ---------------- | ------------------------------------------------------------ |
| Fournit | 100 GB   | 50               | 50                                                           |
| Utilisé | 60 GB    | 17               | 11 principaux (+ alias) <br>2 sous-domaines<br>=> 22 noms de domaines |

## Domaines installés

**Note :** 
D’autres noms de domaines sont installés comme alias.

### Système central

| **Domaine principal**   | **Répertoire** | **Remarque**                             |
| ----------------------- | -------------- | ---------------------------------------- |
| - publications-droit.ch | hubwebdroit    | Système central                          |
| - bail.ch               | hubwebdroit    | Système central                          |
| - droitmatrimonial.ch   | hubwebdroit    | Système central                          |
| - rcassurances.ch       | rcassurances   | Données depuis système central (API)     |
| - droitdutravail.ch     | droitdutravail | Données depuis système central (API)     |
|                         |                |                                          |
| rjne.ch                 | rjne           |                                          |
| droitenschema.ch        | schemas        | Cours procédure civile FB                |
| tribunauxcivils.ch      | tribunaux      |                                          |
| droitetcinema.ch        | cinema         | Wordpress                                |
| droitpourlelycee.ch     | lycee          | Archives colloque “Journées des lycéens” |
| droitne.ch              | droitne        | Présentation sites faculté               |
| droitpourlepraticien.ch | praticien      | Wordpress                                |
|                         |                |                                          |
| familles-egalite.ch     | egalite        | Blog à Sabrina Burgat et Fanny Matthey   |
| master-droit.ch         | masterdroit    | Que domaine,  redirection sur unine      |

----------

### Stockage

Le système central contient et génère de nombreux documents et archives qui peu à peu prennent de la place :

#### Taille août 19 => 20 GB

- Documents arrêts + analyses
- Documents et livres en téléchargement
- Images et documents divers
- Bon, facture, BV pour les inscriptions
- Facture pour le shop et abonnement
- Backup du site et base de données 2 derniers jours (env. 40 GB)

#### Autre sources
Droit et cinéma prend aussi de l’espace avec les vidéos (env. 7 GB)
Journées des lycées contient des archives sur plusieurs années

#### Problématique
L’hébergement fournit 100 GB d’espace qui sont déjà pratiquement utilisés par le système central seul. S’il n’y a plus de place tous les sites ne fonctionnent plus.

La base de données grossit elle aussi avec les divers transaction et nouveau contenus. La limite de taille d’une base de données est de 500 MB sur l’hébergement. Afin de rester dans la limite les divers archives de statistiques et tracking d’envois d’email doivent être périodiquement passée dans d’autres bases de données.

### Statistiques de stockage

| **Stockage nouveau documents par an**              | **Taille** |
| -------------------------------------------------- | ---------- |
| Documents inscriptions (bon,facture,BV)            | 600 MB     |
| Arrêts/Analyses                                    | 150 MB     |
| Téléchargements                                    | 70 MB      |
| Factures abonnements                               | 30 MB      |
| Documents autres (programmes, illustrations, etc.) | 150 MB     |
|                                                    |            |
| **Moyenne données  / année**                       | + **1GB**  |

----------

### Newsletter

#### Statistiques janvier-mai 2019

- 40 campagnes
- Environ 50’00 emails transactionnels (confirmations)

À ajouter droitpraticien avec la newsletter des arrêts à la publication envoyée chaque lundi et les alertes push. Environ 12’000 emails par mois.

Nombre email envoyés env **42’000** :

|                                | Janvier    | Février    | Mars       | Avril      | Mai        |
| ------------------------------ | ---------- | ---------- | ---------- | ---------- | ---------- |
| Newsletters divers             | 31’389     | 22’836     | 43’777     | 27’239     | 25’648     |
| Total<br>(avec droitpraticien) | **43’389** | **34’836** | **55’777** | **39’239** | **37’648** |


### Envoi
L’envoi d’email en masse (marketing) devient de plus en plus problématique dû aux multiples authentifications requises à cause des spams.
Ce genre d’envoi ne peut pas être fait directement depuis l’hébergement car celui si ne permet que l’envoi de 1000 emails par heure. 
Des services externes sont utilisés pour faire des envois en masse. Le principe étant que le service externe possède la liste avec les adresses email auxquelles envoyer la newsletter et fournit en retour les statistiques divers. Il suffit alors au système d’envoyer un seul email  et le numéro de la liste d’abonnées au service pour que la newsletter soit distribuée.

### Service d’envoi d’email utilisés

Newsletters avec liste fixe synchronisés :  [http://mailjet.com](https://www.mailjet.com/) 

- publications-droit.ch
- bail.ch
- droitmatrimonial.ch
- droitdutravail.ch
- rcassurances.ch

Email transactionnel : http://mailgun.com

- Confirmations de transactions
- Notifications pour l’admin
- Newsletter via liste d’emails
- Sondages
- Lien vers les slides
