Tags spécialisation et abonnement newsletter
============================================

Les abonnement aux newsletter aux listes statiques régis par tags.

event dans SpecialisationController =&gt; store (ajout d'un tag):

Si le model passé est du type adresse (peux être un colloque car même mécanisme d'ajout d'un tag), si le ID du tag ($find-&gt;id) est égal à un des tags listé dans la configuration subscriptions.php un évènement est levé pour indiquer d'ajouter l'adresse email éventuelle associé à l'adresse à la liste d'envois

```

if($model == 'adresse'){    
    $subscriptions = config('subscriptions');    
    foreach ($subscriptions as $subscription){        
        if($subscription['id'] == $find->id){            
            event(new SubscriptionAddTag($item,$subscription['newsletter_id']));        
        }   
     }
}
```

Dans subscriptions.php:

L'ID du tag "pi2" et la newsletter associé n°10.

```

'pi2' => [                
    'id'    => 54,                
    'newsletter_id' => 10        
],
```