
1.Création d'un nouveau projet Node.js à l'aide de la commande :
npm init -y
Cette commande génère automatiquement le fichier package.json contenant la configuration du projet.
![alt text](images/image.png)

2.Installation du framework de tests Jest en dépendance de développement :
npm install --save-dev jest
![alt text](images/image1.png)

3.Modification du fichier package.json afin d'ajouter le script permettant d'exécuter les tests :

"scripts": {
  "test": "jest"
}
![alt text](images/image2.png)

4.Création du fichier Math.js contenant une fonction d'addition :

function addition(a, b) {
    return a + b;
}
module.exports = addition;
![alt text](images/image3.png)

5.Création du fichier Math.test.js permettant de vérifier le bon fonctionnement de la fonction :

const addition = require('./Math');
test('Addition de 1 + 5 doit retourner 6', () => {
    expect(addition(1, 5)).toBe(6);
});
![alt text](images/image7.png)

6.Lancement des tests avec la commande :
npm test
Le test est exécuté avec succès et retourne le résultat attendu.
![alt text](images/image4.png)

7.Modification volontaire de la fonction afin de provoquer un échec du test et vérifier le comportement de Jest lors de la détection d'une anomalie.
![alt text](images/image5.png)

8.Restauration du code correct puis relance des tests.
Les tests repassent au vert, confirmant que la fonction fonctionne de nouveau conformément aux attentes.
![alt text](images/image6.png)