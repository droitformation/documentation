Workflow général
================

Modifier les fichiers avec l'éditeur de code  
Faire passer les test unitaires en local avec la commande via le terminal:

> {primary} phpunit

=&gt; Plus d'info sur [phpunit](http://phpunit.de/)

Envoyer le code sur github via la commande push sur origin, fait passer les tests sur travis-ci.org

> {primary} git push origin master

[https://travis-ci.org](https://travis-ci.org/)  
Login via github "droitformation"

Une fois que les tests sont ok envoyer le code en production, il sera déployé automatiquement via un script bash dans post-update de git.

> {primary} git push production master

=&gt; Plus d'info sur [deployer avec git](http://doc.hubwebdroit.ch/page/deploy)
