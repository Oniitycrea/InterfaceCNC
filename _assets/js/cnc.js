// Fonction pour déplacer un axe
function moveAxis(axis, distance) {
    // À compléter : Envoyer la commande G-code pour déplacer l'axe spécifié
    var gcodeCommand = `G01 ${axis}${distance}`;
    sendGCodeCommand(gcodeCommand);
    console.log(`Déplacement de l'axe ${axis} de ${distance} unités`);
}

// Fonction pour effectuer l'homming
function performHomming() {
    // À compléter : Envoyer la commande G-code pour l'homming
    sendGCodeCommand("G28");
    console.log("Homming en cours...");
}

// Fonction pour ouvrir la CNC
function openCNC() {
    // À compléter : Envoyer la commande G-code pour ouvrir la CNC
    
    console.log("Ouverture de la CNC...");
}

// Fonction pour fermer la CNC
function closeCNC() {
    // À compléter : Envoyer la commande G-code pour fermer la CNC
    console.log("Fermeture de la CNC...");
}
