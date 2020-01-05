Déploiement sur hébergement
===========================

#### Déploiement sur serveur avec git en ssh 

1\. Créer un dossier sur le serveur dans un endroit en dehors de public\_html ici home/droitdut/hub avec ce format: xxx.git (xxx =&gt; nom simple pour identifier le projet)  
2\. Aller dans le dossier xxx.git en ssh (cd xxx.git) et taper les instructions:

> {primary}  git init --bare

3\. Dans notre projet en local (sur l'ordinateur) ajouter le url "remote" par le terminal

> {primary}  git remote add production ssh://droitdut@droitdutravail.ch//home/droitdut/hub/xxx.git

> git remote set-url production ssh://droitdut@droitdutravail.ch//home/droitdut/hub/xxx.git

4\. Aller via ssh dans le dossier préparé sur l'hébergement (dans public\_html/xxx) dans lequelle le site doit être déployé et taper les instructions:

> {primary}  git init

> git remote add origin /home/droitdut/hub/xxx.git

> git fetch

> git checkout -t origin/master

Script bash pour éviter d'aller devoir "pull" via ssh ce que l'on a "push" sur le repo du serveur dans le fichier post-update

> {primary}  vim /home/droitdut/hub/xxx.git/hooks/post-update

> chmod +x /home/droitdut/hub/xxx.git/hooks/post-update

Ajouter:

> {primary} #!/bin/bash
> echo "********** mise en production *********"
> cd /home/droitdut/public_html/mondossier
> unset GIT_DIR
> git pull origin master

Une fois prêt lorsque l'on veut mettre en ligne en production au lieu de "git push origin master", origin étant le remote sur github, on push sur le remote production que l'on a ajouté avec "git remote add production" (Il est bien sur possible d'utiliser un autre nom que production).

Cette fois on utilise la commande:

> {primary} git push production master

Si on a configuré le script post-update les modifs sont déployés directement sinon il faut aller via ssh dans le dossier du site et utiliser la commande:

> {primary} git pull origin master

#### Astuces

Configurer git sur le serveur si problème avec receivepack

> {primary} git config remote.origin.receivepack /usr/local/cpanel/3rdparty/bin/git-receive-pack


Retirer et filtrer dans la hierarchie les fichiers

> {primary} git filter-branch --tree-filter 'rm -f public/frontend/images/backgrounds/5.psd’ HEAD

**DEAMON queue**

Start la queue pour les jobs en deamon via le terminal en SSH:

> {primary} php artisan queue:work --tries=3  --daemon &

Une commande dans kernel.php name: **monitor\_queue\_listener** Doit re-initializer la queue si celle-ci est arrêté. Le service "<https://cronitor.io/dashboard>" doit recevoir un ping avant et après pour être sur que tout fonctionne.
