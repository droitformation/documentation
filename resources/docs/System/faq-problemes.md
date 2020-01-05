- [Malware](#malware)
- [Emails](#emails)
- [Abonnées](#abonnes)
- [Newsletters](#newsletters)
- [Erreurs](#erreurs)
- [Slides](#slides)


# FAQ problèmes

<a name="malware"></a>
## L'hébergeur à bloqué le site suite à un malware ou autre problème

- Avertir le secrétariat Droit Formation et François Bohnet
- Transmettre les codes d'accès éventuels données par l'hébergeur au secrétariat pour qu'elles/ils puissent continuer à travailler
- S'il y a des fichiers infectés les supprimer, éventuellement faire des copies en local pour les examiner plus tard
- Changer les mots de passes FTP et de l'hébergement

<a name="emails"></a>
## Les confirmations email ou les newsletters hors campagnes ne partent pas

Contrôler la table **failed\_jobs** dans la base de données. Si un problème est survenu les job seront dans la table et il est possible de voir un diagnostique de l'erreur.

<a name="abonnes"></a>
## Problème avec un abonné à une newsletter

- Contrôler sur dans le **système** et **Mailjet** si l'abonné existe et si il a bien la mention de la newsletter
- Contrôler les logs dans storage/logs si il y une erreur

<a name="newsletters"></a>
## Les newsletter principales ne partent pas

- Contrôler sur Mailjet et ouvrir un ticket pour demander des explications ou infos pour résoudre le problème
- Avertir le secrétariat Droit Formation

<a name="erreurs"></a>
## Pages d'erreur

Si la page d'un <span style="color: rgb(79, 129, 189);">**utilisateur**</span> renvoie cette erreur:

> {danger} return !$this->participations->isEmpty() ? $this->participations->reject(function ($participation, $key) {
    return !isset($participation->inscription->groupe) || isset($participation->inscription) && $participation->inscription->inscrit->id == $this->id; 
}) : collect([]);


Il est probable que cet <span style="color: rgb(79, 129, 189);">**utilisateur**</span> soit participant à une inscription groupée. Soit le <span style="color: rgb(151, 72, 6);">**détenteur**</span> (utilisateur+adresse) du <span style="color: rgb(118, 146, 60);">**groupe**</span> d'inscription a été supprimé ou le <span style="color: rgb(118, 146, 60);">**groupe**</span> n'existe plus.

Vérifier:

- Dans la table *colloque\_inscriptions\_participants* vérifier si l'**utilisateur** est présent via son adresse email et à quel **inscription\_id** il correspond.
- Dans la table *colloque\_inscription* voir grâce à **id** &lt;=&gt; **inscription\_id** à quel **groupe** via **group\_id** appartient l'inscription
- Dans la table *colloque\_inscriptions\_groupes* trouver **id** &lt;=&gt; **group\_id** et prendre **user\_id**
- Vérifier dans la table *user* **id** &lt;=&gt; **user\_id** via si le **détenteur** est supprimé, voir aussi dans la table *adresses* via **user\_id** &lt;=&gt; **user\_id**

<a name="slides"></a>
## Les slides renvoient un 404

Le symlink (lien symbolique) sur le serveur est peut-être corrompu.  
Pour le refaire aller via FTP dans le dossier **/public\_html/hubwebdroit/public**  
Supprimer le dossier "**storage**" (celui avec la petite flèche) et cocher (supprimer le lien symbolique)!  
Aller sur le server en SSH:

1. Ouvrir en ligne de commande (ou terminal sur mac) taper : **ssh droitdut@droitdutravail.ch**
2. Mettre le mot de passe principal (password general dans le fichier de config general)
3. Taper la commande: **cd public\_html/hubwebdroit**
4. Taper la commande: **php artisan storage:link**
