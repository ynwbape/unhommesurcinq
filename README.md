

# Pour développer

    symfony server:start
    yarn encore dev-server



# Assets

Mettre à jour les assets :

    npm run build

Permet de compiler tous les paquets qui figurent dans `package.json`.

Pour développer en modifiant les CSS :

    yarn encore dev-server

Si ça ne fonctionne pas, ne pas hésiter à relancer yarn.



# Landkit

Installé dans `assets/vendor`

Version installée la première fois : `v2.1.0`

Pour mettre à jour :

1. Mettre à jour chemin dans `assets/app.js`
2. Mettre à jour chemin dans `assets/styles/app.scss`
3. Modifier le fichier `assets/vendor/Landkit-X.X.X/src/scss/_user-variables.scss` (voir + bas)

Mettre à jour le fichier `_user-variables.scss`

Il faut y faire figurer les chemins utiles pour le thème comme `fonts` ou `img` :

    $path-to-img:   "/assets/vendor/Landkit-X.X.X/src/img" !default;
    $path-to-fonts: "/assets/vendor/Landkit-X.X.X/src/fonts" !default;

Les variables à surcharger se trouvent dans `_user.scss`.